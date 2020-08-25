<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}


	public function index(){

		$this->load->view('home/index');

	}
	public function hasil(){
		if($this->input->post('keyword')){
			$data['pelanggan']=$this->Home_model->Cari_nota();
			$this->load->view('home/hasil',$data);
		}
		else{
			$data=" Data Tidak Di Temukan";
			$this->load->view('home/hasil',$data);
		}
	}

}