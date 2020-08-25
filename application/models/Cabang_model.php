<?php

class Cabang_model extends CI_model{ 



	public function getAllCabang(){
		return $query = $this->db->get('cabang')->result_array();

	}
	public function input_cabang(){
			$data = [
			'id_cabang' => $this->input->post('id_cabang'),
		 	'nama_cabang' => $this->input->post('nama_cabang'),
		 	'alamat_cabang' => $this->input->post('alamat_cabang'),
		 	'no_telp' => $this->input->post('no_telp'),
		 	'jumlah_transaksi' => 0,
			];
			$this->db->insert('cabang', $data); 
	}
	public function hapus_cabang($id){

		$this->db->where('id_cabang', $id);
		$this->db->delete('cabang');
	}

	public function getCabangById($id){

		return $this->db->get_where('cabang', ['id_cabang' => $id])->row_array();

	}
	public function cabang_ubah(){

		$data = [
		 	'nama_cabang' => $this->input->post('nama_cabang'),
		 	'alamat_cabang' => $this->input->post('alamat_cabang'),
		 	'no_telp' => $this->input->post('no_telp'),
		 	'jumlah_transaksi' => 0,
			];
		$this->db->where('id_cabang', $this->input->post('id'));
		$this->db->update('cabang', $data);
	}
	public function kode(){

		  $this->db->select('RIGHT(cabang.id_cabang,2) as id_cabang', FALSE);
		  $this->db->order_by('id_cabang','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('cabang');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_cabang) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "LLC".$batas;  //format kode
			  return $kodetampil;  
	}

}