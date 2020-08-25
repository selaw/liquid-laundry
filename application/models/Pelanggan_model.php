<?php

class Pelanggan_model extends CI_model{ 

	public function get_Cabang(){  

		return $query = $this->db->get('cabang')->result_array();
	}
	
	public function getAllPelanggan(){

		return $query = $this->db->get('pelanggan')->result_array();
	}
	public function get_JenisBarang(){
		return $query = $this->db->get('jenis_barang')->result_array();
	}
	public function input_pelanggan(){

		$cb = $this->input->post('kode_cabang');
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp'),
			'nota' => $cb.$this->input->post('nota'),
			'nama_barang' => $this->input->post('nama_barang'),
			'id_jenis_barang' => $this->input->post('id_jenis_barang'),
			'berat_barang' => $this->input->post('berat_barang'),
			'id_cabang' => $this->input->post('kode_cabang'),
		 	'tgl_masuk' => $this->input->post('tgl_masuk'),
		 	'tgl_keluar' => $this->input->post('tgl_keluar'),
		 	'status' => "Progres",
			];
			$this->db->insert('pelanggan', $data); 
	}
	public function hapus_pelanggan($id){

		$this->db->where('id_pelanggan', $id);
		$this->db->delete('pelanggan');
	}
	public function getPelangganById($id){

		return $this->db->get_where('pelanggan', ['id_pelanggan' => $id])->row_array();

	}
	public function pelanggan_ubah(){
$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp'),
		 	'tgl_masuk' => $this->input->post('tgl_masuk'),
		 	'tgl_keluar' => $this->input->post('tgl_keluar'),
		 	'status' => $this->input->post('status'),
			];
		$this->db->where('id_pelanggan', $this->input->post('id'));
		$this->db->update('pelanggan', $data);
	}
	public function kode(){

		  $this->db->select('RIGHT(pelanggan.nota,2) as nota', FALSE);
		  $this->db->order_by('nota','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('pelanggan');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->nota) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
			  $kodetampil = "N".$batas;  //format kode
			  return $kodetampil;  
	}
}