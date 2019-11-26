<?php

/**
* 
*/
class Model_tif_rp_v extends CI_model{  // Inheritance/pewarisan

	function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}
	function tampil_data(){
		return $this->db->get("semester_v")->result();
	}
}
?>