<?php

class JenisBarang_model extends CI_model{ 

	public function getAllBarang(){
		return $query = $this->db->get('jenis_barang')->result_array();

	}
	public function input_barang(){

		$data = [
		 	'jenis_barang' => htmlspecialchars($this->input->post('jenis_barang', TRUE))
		];
		$this->db->insert('jenis_barang', $data);  
	}

}