<?php

class Lokasi_model extends CI_model{ 

	function get_kategori(){
		$hasil=$this->db->query("SELECT * FROM kategori");
		return $hasil;
	}

	function get_subkategori($id){
		$hasil=$this->db->query("SELECT * FROM subkategori WHERE subkategori_kategori_id='$id'");
		return $hasil->result();
	}

	public function get_Target(){

		return $query = $this->db->get('target')->result_array();

	}
	public function get_Peralatan(){

		return $query = $this->db->get('peralatan')->result_array();
	}

	public function getLokasi(){  

		return $query = $this->db->get('lokasi')->result_array();
	}
	public function input_lokasi(){
		$data = [
			'id_lokasi' => $this->input->post('id_lokasi'),
		 	'id_target' => $this->input->post('id_target'),
		 	'id_peralatan' => $this->input->post('id_peralatan'),
		 	'lokasi' => $this->input->post('lokasi')
			];
			$this->db->insert('lokasi', $data); 
	}
	public function kode(){

		  $this->db->select('RIGHT(lokasi.id_lokasi,2) as id_lokasi', FALSE);
		  $this->db->order_by('id_lokasi','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('lokasi');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_lokasi) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "LKS".$batas;  //format kode
			  return $kodetampil;  
	}
}