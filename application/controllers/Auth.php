<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('email');
		$this->load->library('form_validation');
		$this->load->helper('string');
		$this->load->model('Reset_model');
	}

	public function index(){
			$this->form_validation->set_rules('email','Email','required|trim|valid_email');
			$this->form_validation->set_rules('password', 'Name','required|trim');

		if ($this->form_validation->run() == FALSE){
			$data['title']='Login';
			$this->load->view('auth/header', $data);
			$this->load->view('auth/login');
		} else{
			$this->_login();
		}
	}
	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['email' => $email])->row_array();
		// jika user ada
		if($user){
			// jika user nya aktif
			if($user['is_active'] == 1){
				//cek password
					if (password_verify($password, $user['password']))
					{
						$data = [
							'email' => $user['email'],
							'level' => $user['level'],
							'nama' => $user['nama']
						];
						$this->session->set_userdata($data);
						
							if($this->session->userdata('level')=="Admin"){
								redirect('admin');
							}elseif($this->session->userdata('level')=="Petugas") {
								redirect('petugas'); 
							}elseif($this->session->userdata('level')=="Owner"){
								redirect('owner'); 
							} else{
								$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Account Not Register!! </div>');
								redirect('auth');
							}

					} else{
							$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Wrong password!! </div>');
					redirect('auth');
					}

			} else{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> This Account has not been active!! </div>');
					redirect('auth');
			}
			
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Email is not registred!! please Register :) </div>');
			redirect('auth');
		}
	}

	public function register(){
		$this->form_validation->set_rules('name','Name','required|regex_match[/^([a-zA-Z]|\s)+$/]|xss_clean');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
			'is_unique' => ' This Email has Ready Register']);
		$this->form_validation->set_rules('password1', 'Password','required|trim|min_length[6]|matches[password2]',[
			'matches' =>'Password dont match!!!',
			'min_length' =>'Password too short!!!' ]);
		$this->form_validation->set_rules('password2', 'Password','required|trim|matches[password1]');


		if($this->form_validation->run()== FALSE) {
		$data['title']='Register';
		$this->load->view('auth/header', $data);
		$this->load->view('auth/register');
	}else {
			 $data = [
			 	'nama' => htmlspecialchars($this->input->post('name', TRUE)),
			 	'email' => htmlspecialchars( $this->input->post('email', TRUE)),
			 	'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
			 	'level' => 'Petugas',
			 	'is_active' => 0,
			 	'date_create' => time()
			 ];

			 $this->db->insert('user', $data);
			 $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Congratulation your account has been created, Please Login :) </div>');
			 redirect('auth');

			}

	}
	//Logout
	public function logout(){

		$this->session->unset_userdata('email');
		$this->session->unset_userdata('level');
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">You have been logged out </div>');
			 redirect('auth');
	}
	//forgottt pasworddd
	public function forgot(){
		$data['title']='Forgot Password';
		$this->load->view('auth/header', $data);
		$this->load->view('auth/auth-forgot-password');

	}	
	public function email_reset_password_validation(){
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
		if($this->form_validation->run()){

			$email = $this->input->post('email');
			$reset_key =  random_string('alnum', 50);

			if($this->Reset_model->update_reset_key($email,$reset_key))
			{
				
		    	$this->load->library('email');
				$config = array();
				$config['charset'] = 'utf-8';
				$config['useragent'] = 'Codeigniter';
				$config['protocol']= "smtp";
				$config['mailtype']= "html";
				$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
				$config['smtp_port']= "465";
				$config['smtp_timeout']= "5";
				$config['smtp_user']= "hellosiparkir@gmail.com"; // isi dengan email kamu
				$config['smtp_pass']= "masukaja"; // isi dengan password kamu
				$config['crlf']="\r\n"; 
				$config['newline']="\r\n"; 
				$config['wordwrap'] = TRUE;
				//memanggil library email dan set konfigurasi untuk pengiriman email
					
				$this->email->initialize($config);
				//konfigurasi pengiriman
				$this->email->from($config['smtp_user'],'Si Parkir');
				$this->email->to($email);
				$this->email->subject("Reset your password");

				$message = "<p>Anda melakukan permintaan reset password</p>";
				$message = "<a href='".base_url('auth/reset_password/'.$reset_key)."'>klik reset password</a>";
				$this->email->message($message);
				
				if($this->email->send())
				{
					echo "Please check email <b>".$this->input->post('email').'</b> reset password';
				}else
				{	
					echo "Email is Register, Error in sending email";
				}
				
				echo "<br><br><a href='".base_url('auth')."'>Back to Login</a>";

			}else {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Email is not registred!! please Register :) </div>');
				redirect('auth/forgot');
			}
		} else{

			$this->load->view('auth/forgot');
		}
	}
	public function reset_password(){
		$reset_key = $this->uri->segment(3);
		
		if(!$reset_key){
			die('Jangan Dihapus');
		}

		if($this->Reset_model->check_reset_key($reset_key) == 1)
		{
			$data['title']='Reset Password';
			$this->load->view('auth/header', $data);
			$this->load->view('auth/reset_password');
		} else{
			die("reset key salah");
		}
	
	}
	public function reset_password_validation(){
		$this->form_validation->set_rules('password1', 'Password','required|trim|min_length[3]|matches[password2]',[
			'matches' =>'Password dont match!!!',
			'min_length' =>'Password too short!!!' ]);
		$this->form_validation->set_rules('password2', 'Password','required|trim|matches[password1]');

		if($this->form_validation->run())
		{

			$reset_key = $this->input->post('reset_key');
			$password = password_hash($this->input->post('password1'),PASSWORD_DEFAULT);


			if($this->Reset_model->reset_password($reset_key, $password)){
				$reset = 0;
				$this->Reset_model->clear_reset($reset);
				echo "Password anda telah berhasil diubah";
			}else{
				echo "error";
			}
		
		}else{
			$data['title']='Reset Password';
			$this->load->view('auth/header', $data);
			$this->load->view('auth/reset_password');
		}
	}

}
