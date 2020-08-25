<?php

class Lapor_model extends CI_model{ 

	public function get_umum(){
		$sql = "SELECT sum(if(id_target=2, retribusi , NULL)) as retribusi FROM parkir";

		$result= $this->db->query($sql);
		return $result->row();
	}
	public function get_khusus(){
		$sql = "SELECT sum(if(id_target=1, retribusi , NULL)) as retribusi FROM parkir";

		$result= $this->db->query($sql);
		return $result->row();
	}
	/*public function get_khu($bulan,$tahun){
		$sql = "SELECT sum(if(id_target=1, retribusi , NULL)) as retribusi FROM parkir WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun'";

		$result= $this->db->query($sql);
		return $result->row();
	}*/
}