<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('email');
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->model('JenisBarang_model');
		$this->load->model('Cabang_model');
		$this->load->model('Lokasi_model');
		$this->load->model('Pelanggan_model');
		$this->load->library('form_validation');

		if($this->session->userdata('level')!="Admin") { 
			redirect('auth');
		}
	} 

	public function index(){

		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		 
		$this->load->view('admin/index',$data);

	}
	//Jenis Barang
	public function jenis_barang(){
		$data['jenis_barang'] = $this->JenisBarang_model->getAllBarang();
		$this->load->view('admin/jenis_barang', $data);
	}
	public function input_barang(){
			$this->form_validation->set_rules('jenis_barang','Jenis Barang','required');
			if($this->form_validation->run() == FALSE) {
	
			$this->load->view('admin/jenis_barang', $data);
		} else {

			$this->JenisBarang_model->input_barang();
			$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Tambah</b> :) </div>');
			redirect('admin/jenis_barang');
		}
	}
	//CABANG
	public function cabang(){
			$data['kode'] = $this->Cabang_model->kode();
			$data['cabang'] = $this->Cabang_model->getAllCabang();

		$this->load->view('admin/cabang', $data);
	}
	public function input_cabang(){

			$data['kode'] = $this->Cabang_model->kode();
			$data['cabang'] = $this->Cabang_model->getAllCabang();

			$this->form_validation->set_rules('nama_cabang','Nama Cabang','required|regex_match[/^([a-zA-Z]|\s)+$/]|xss_clean');
			$this->form_validation->set_rules('alamat_cabang','Alamat Cabang','required');
			$this->form_validation->set_rules('no_telp','Nomor Telpon','required|integer');
			if($this->form_validation->run() == FALSE) {
			
			$this->load->view('admin/cabang', $data);
		} else {
			$this->Cabang_model->input_cabang();
			$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Tambah</b> :) </div>');
			redirect('admin/cabang');
		}
	}
	public function hapus_cabang($id){
			$this->Cabang_model->hapus_cabang($id);
			$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Hapus</b> :) </div>');
			redirect('admin/cabang');
	}
	public function cabang_edit($id){

			$data['cabang'] = $this->Cabang_model->getCabangById($id);

			$this->form_validation->set_rules('nama_cabang','Nama Cabang','required|regex_match[/^([a-zA-Z]|\s)+$/]|xss_clean');
			$this->form_validation->set_rules('alamat_cabang','Alamat Cabang','required');
			$this->form_validation->set_rules('no_telp','Nomor Telpon Cabang','required|integer');

			if($this->form_validation->run() == FALSE) {
	
			$this->load->view('admin/cabang_edit', $data);
		}else {
			 $this->Cabang_model->cabang_ubah();
			 $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Update</b> :) </div>');
			redirect('admin/cabang');
			}
	}

	//Pelanggan
	public function pelanggan(){

		    $data['kode'] = $this->Pelanggan_model->kode();
			$data['cabang'] = $this->Pelanggan_model->get_Cabang();
			$data['jenis_barang'] = $this->Pelanggan_model->get_JenisBarang();
			$data['pelanggan'] = $this->Pelanggan_model->getALLPelanggan();

		$this->load->view('admin/pelanggan', $data);
	}
	public function input_pelanggan(){
		    $data['kode'] = $this->Pelanggan_model->kode();
		    $data['cabang'] = $this->Pelanggan_model->get_Cabang();
			$data['jenis_barang'] = $this->Pelanggan_model->get_JenisBarang();
			$data['pelanggan'] = $this->Pelanggan_model->getALLPelanggan();
			

			$this->form_validation->set_rules('nama','Nama','required|regex_match[/^([a-zA-Z]|\s)+$/]|xss_clean');
			$this->form_validation->set_rules('email','Email Pelanggan','required|valid_email');
			$this->form_validation->set_rules('no_hp','Nomor HP','required|integer');
			$this->form_validation->set_rules('nama_barang','Nama Barang','required');
			$this->form_validation->set_rules('berat_barang','Berat Barang','required');
			$this->form_validation->set_rules('id_jenis_barang','Jenis Laundry','required');
			$this->form_validation->set_rules('kode_cabang','Kode Cabang','required|min_length[2]',['min_length' =>'Isi Cabang dengan Benar!!!']);


			if($this->form_validation->run() == FALSE) {
			
			$this->load->view('admin/pelanggan', $data);
		} else { 

			$this->Pelanggan_model->input_pelanggan();
			$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Tambah</b> :) </div>');
			redirect('admin/pelanggan');
		}
	}
	public function hapus_pelanggan($id){
			$this->Pelanggan_model->hapus_pelanggan($id);
			$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Hapus</b> :) </div>');
			redirect('admin/pelanggan');
	}

	public function pelanggan_edit($id){

			$data['pelanggan'] = $this->Pelanggan_model->getPelangganById($id);
			$data['status'] = ["Progres","Selesai"];

			$this->form_validation->set_rules('nama','Nama Pelanggan','required|regex_match[/^([a-zA-Z]|\s)+$/]|xss_clean');
			$this->form_validation->set_rules('email','Email Pelanggan','required|valid_email');
			$this->form_validation->set_rules('no_hp','Nomor HP','required|integer');
			

			if($this->form_validation->run() == FALSE) {
	
			$this->load->view('admin/pelanggan_edit', $data);
		}else {
			 $this->Pelanggan_model->pelanggan_ubah();
			 $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Update</b> :) </div>');
			redirect('admin/pelanggan');
			}
	}
	public function pelanggan_nota($id){

			$data['pelanggan'] = $this->Pelanggan_model->getPelangganById($id);
			$data['status'] = ["Progres","Selesai"];

			$this->form_validation->set_rules('nama','Nama Pelanggan','required|regex_match[/^([a-zA-Z]|\s)+$/]|xss_clean');
			$this->form_validation->set_rules('email','Email Pelanggan','required|valid_email');
			$this->form_validation->set_rules('no_hp','Nomor HP','required|integer');
			

			if($this->form_validation->run() == FALSE) {
	
			$this->load->view('admin/pelanggan_nota', $data);
		}else {
			 $this->Pelanggan_model->pelanggan_ubah();
			 $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Update</b> :) </div>');
			redirect('admin/pelanggan');
			}
	}
	public function email_validation(){
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');

		if($this->form_validation->run()){

			$email = $this->input->post('email');
			$nama = $this->input->post('nama');
			$status = $this->input->post('status');
			$nota = $this->input->post('nota');
			$tgl_masuk = $this->input->post('tgl_masuk');
			$tgl_keluar = $this->input->post('tgl_keluar');

			 $tgl_masuk = DateTime::createFromFormat('Y-m-d',$tgl_masuk);
	         $newA = $tgl_masuk->format('d-m-Y');
	         $tgl_keluar = DateTime::createFromFormat('Y-m-d', $tgl_keluar);
	         $newB = $tgl_keluar->format('d-m-Y');

		    	$this->load->library('email');
				$config = array();
				$config['charset'] = 'utf-8';
				$config['useragent'] = 'Codeigniter';
				$config['protocol']= "smtp";
				$config['mailtype']= "html";
				$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
				$config['smtp_port']= "465";
				$config['smtp_timeout']= "5";
				$config['smtp_user']= "tugasbasdat04@gmail.com"; // isi dengan email kamu
				$config['smtp_pass']= "Admin123."; // isi dengan password kamu
				$config['crlf']="\r\n"; 
				$config['newline']="\r\n"; 
				$config['wordwrap'] = TRUE;
				//memanggil library email dan set konfigurasi untuk pengiriman email
					
				$this->email->initialize($config);
				//konfigurasi pengiriman
				$this->email->from($config['smtp_user'],'Liquid Laundry');
				$this->email->to($email);
				$this->email->subject("Notifikasi");

				$message = "<h2>Terimakasih atas kepercayaan anda</h2>
							<p> No Resi : $nota <br>
							 Nama Pelanggan : $nama <br> 
							 Status Laundry => $status <br>
							 Tanggal Masuk : $newA <br> 
							 Tanggal Keluar : $newB </p>";

				$this->email->message($message);
				
				if($this->email->send())
				{
					echo "Notifikasi Terkirim ke <b>".$this->input->post('email').'</b>';
				}else
				{	
					echo "Email is Register, Error in sending email";
				}
				
				echo "<br><br><a href='".base_url('admin/pelanggan')."'>Back to Data Pelanggan</a>";

				} else{

			$this->load->view('admin/pelanggan');
		}
	}

	public function WA(){
		echo "MAAF ini Adalah fitur Premium :)";
		echo "<br><br><a href='".base_url('admin/pelanggan')."'>Back to Data Pelanggan</a>";
	}





	//Laporan
	public function laporan(){
		$this->load->view('admin/laporan');
	}

	//USER
	public function user($offset=0){
		//$data['user'] = $this->User_model->getAllUser();
		//$this->load->view('admin/user',$data);

		$data_user = $this->db->get("user");

		$config['total_rows']= $data_user->num_rows();
		$config['base_url'] = base_url('admin/user');
		$config['per_page']= 3;
		//Konfigurasi tabelnya
		$config['full_tag_open']=" <ul class='pagination mb-0'>";
		$config['full_tag_close']="</ul>";
		$config['num_tag_open']="<li class='page-link'>";
		$config['num_tag_close']="</li>";
		$config['cur_tag_open']="&nbsp;<li class='page-item active'><a class='page-link' href='#'>";
		$config['cur_tag_close']="<span class='sr-only'>(current)</span></a></li> &nbsp;";
		$config['next_tag_open']="&nbsp;<li class='page-link'>";
		$config['next_tag_close']="</li>&nbsp;&nbsp;";
		$config['prev_tag_open']="&nbsp;<li class='page-link'>"; 
		$config['prev_tag_close']="</li>&nbsp;&nbsp;";
		$config['first_tag_open']="&nbsp;<li class='page-link'>";
		$config['first_tag_close']="</li>";
		$config['last_tag_open']="&nbsp;<li class='page-link'>";
		$config['last_tag_close']="</li>";

		$this->pagination->initialize($config);

		$data['halaman']= $this->pagination->create_links();
		$data['offset']= $offset;

		$data['data']= $this->User_model->getUser($config['per_page'], $offset);
		$this->load->view('admin/user',$data);

	}

	public function hapus_user($id){
			$this->User_model->hapusUser($id);
			$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Hapus</b> :) </div>');
			redirect('admin/user');
	}

	public function user_edit($id){

			$data['user'] = $this->User_model->getUserById($id);
			$data['is_active'] = [0,1];
			$data['level'] = ['Petugas','Owner','Admin'];

			$this->form_validation->set_rules('name','Nama','required');
			$this->form_validation->set_rules('email','Email','required|trim|valid_email');

			if($this->form_validation->run() == FALSE) {
	
			$this->load->view('admin/user_edit', $data);
		}else {
			 $this->User_model->user_ubah();
			 $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Update</b> :) </div>');
			redirect('admin/user');
			}
	}

}