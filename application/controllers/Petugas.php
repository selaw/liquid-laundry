<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library('email');
		$this->load->helper('url');
		$this->load->model('Pelanggan_model');
		$this->load->library('form_validation');

		if($this->session->userdata('level')!="Petugas"){
			redirect('auth');
		}
	} 

	public function index(){

		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		 
		$this->load->view('petugas/index',$data);

	}
		//Pelanggan
	public function pelanggan(){

		    $data['kode'] = $this->Pelanggan_model->kode();
			$data['cabang'] = $this->Pelanggan_model->get_Cabang();
			$data['jenis_barang'] = $this->Pelanggan_model->get_JenisBarang();
			$data['pelanggan'] = $this->Pelanggan_model->getALLPelanggan();

		$this->load->view('petugas/pelanggan', $data);
	}
	public function input_pelanggan(){
		    $data['kode'] = $this->Pelanggan_model->kode();
		    $data['cabang'] = $this->Pelanggan_model->get_Cabang();
			$data['jenis_barang'] = $this->Pelanggan_model->get_JenisBarang();
			$data['pelanggan'] = $this->Pelanggan_model->getALLPelanggan();
			

			$this->form_validation->set_rules('nama','Nama Pelanggan','required|regex_match[/^([a-zA-Z]|\s)+$/]|xss_clean');
			$this->form_validation->set_rules('email','Email Pelanggan','required|valid_email');
			$this->form_validation->set_rules('no_hp','Nomor HP','required|integer');
			$this->form_validation->set_rules('nama_barang','Nama Barang','required');
			$this->form_validation->set_rules('berat_barang','Berat Barang','required');
			$this->form_validation->set_rules('id_jenis_barang','Jenis Laundry','required');
			$this->form_validation->set_rules('kode_cabang','Kode Cabang','required|min_length[2]',['min_length' =>'Isi Cabang dengan Benar!!!']);


			if($this->form_validation->run() == FALSE) {
			
			$this->load->view('petugas/pelanggan', $data);
		} else { 

			$this->Pelanggan_model->input_pelanggan();
			$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Tambah</b> :) </div>');
			redirect('petugas/pelanggan');
		}
	}
	public function hapus_pelanggan($id){
			$this->Pelanggan_model->hapus_pelanggan($id);
			$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Hapus</b> :) </div>');
			redirect('petugas/pelanggan');
	}

	public function pelanggan_edit($id){

			$data['pelanggan'] = $this->Pelanggan_model->getPelangganById($id);
			$data['status'] = ["Progres","Selesai"];

			$this->form_validation->set_rules('nama','Nama Pelanggan','required|regex_match[/^([a-zA-Z]|\s)+$/]|xss_clean');
			$this->form_validation->set_rules('email','Email Pelanggan','required|valid_email');
			$this->form_validation->set_rules('no_hp','Nomor HP','required|integer');
			

			if($this->form_validation->run() == FALSE) {
	
			$this->load->view('petugas/pelanggan_edit', $data);
		}else {
			 $this->Pelanggan_model->pelanggan_ubah();
			 $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Update</b> :) </div>');
			redirect('petugas/pelanggan');
			}
	}
	public function pelanggan_nota($id){

			$data['pelanggan'] = $this->Pelanggan_model->getPelangganById($id);
			$data['status'] = ["Progres","Selesai"];

			$this->form_validation->set_rules('nama','Nama Pelanggan','required');
			$this->form_validation->set_rules('email','Email Pelanggan','required|valid_email');
			$this->form_validation->set_rules('no_hp','Nomor HP','required|integer');
			

			if($this->form_validation->run() == FALSE) {
	
			$this->load->view('petugas/pelanggan_nota', $data);
		}else {
			 $this->Pelanggan_model->pelanggan_ubah();
			 $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert"> Data berhasil di <b>Update</b> :) </div>');
			redirect('petugas/pelanggan');
			}
	}
	public function email_validation(){
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');

		if($this->form_validation->run()){

			$email = $this->input->post('email');
			$nama = $this->input->post('nama');
			$status = $this->input->post('status');
			$nota = $this->input->post('id_nota');
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
				
				echo "<br><br><a href='".base_url('petugas/pelanggan')."'>Back to Data Pelanggan</a>";

				} else{

			$this->load->view('petugas/pelanggan');
		}
	}

	public function WA(){
		echo "MAAF ini Adalah fitur Premium :)";
		echo "<br><br><a href='".base_url('petugas/pelanggan')."'>Back to Data Pelanggan</a>";
	}



}