<?php

class Reset_model extends CI_model{

	public function update_reset_key($email,$reset_key)
		{
			$this->db->where('email', $email);
			$data = ['reset_password'=>$reset_key];
			$this->db->update('user', $data);
			if($this->db->affected_rows()>0)
			{
				return TRUE;
			}else{
				return FALSE;
			}
		}
	public function reset_password($reset_key, $password)
		{
			$this->db->where('reset_password', $reset_key);
			$data = array('password' => $password);
			$this->db->update('user', $data);
			return ($this->db->affected_rows()>0 )? TRUE:FALSE;
		}
	public function check_reset_key($reset_key)
		{
			$this->db->where('reset_password', $reset_key);
			$this->db->from('user');
			return $this->db->count_all_results();
		}
	public function clear_reset($reset){
		$data = array('reset_password' => $reset);
		$this->db->update('user', $data);
	}

}