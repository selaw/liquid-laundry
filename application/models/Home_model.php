<?php

class Home_model extends CI_model{ 

	public function Cari_nota(){  

		$keyword = $this->input->post('keyword');
		$this->db->where('nota', $keyword);
		return $query = $this->db->get('pelanggan')->result_array();
	}
}