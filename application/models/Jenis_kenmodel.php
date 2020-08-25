<?php

class Jenis_kenmodel extends CI_model{ 

	public function getAllKen(){
		return $query = $this->db->get('jenis_kendaraan')->result_array();

	}
	public function input_jenis(){

		$data = [
		 	'jenis_kendaraan' => htmlspecialchars($this->input->post('jenis_kendaraan', TRUE))
		];
		$this->db->insert('jenis_kendaraan', $data);  
	}



}