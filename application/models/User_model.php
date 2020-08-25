<?php

class User_model extends CI_model{
	
	public function getAllUser(){
		return $query = $this->db->get('user')->result_array();

	}
	public function getUser($perpage, $offset){
		return $this->db->get('user',$perpage,$offset)->result_array();

	}

	public function hapusUser($id){

		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}
	public function getUserById($id){

		return $this->db->get_where('user', ['id_user' => $id])->row_array();

	}
	public function user_ubah(){

		$data = [
		 	'nama' => htmlspecialchars($this->input->post('name', TRUE)),
		 	'email' => htmlspecialchars( $this->input->post('email', TRUE)),
		 	'level' => htmlspecialchars( $this->input->post('level', TRUE)),
		 	'is_active' => $this->input->post('is_active', TRUE)
		];
		$this->db->where('id_user', $this->input->post('id'));
		$this->db->update('user', $data);
	}

}