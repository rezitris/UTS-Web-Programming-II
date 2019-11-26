<?php

/**
* 
*/
class Modelperkuliahan extends CI_model{ // Inheritance/pewarisan

	function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}
	function tampil_data(){
		return $this->db->get("perkuliahan")->result();
	}
}
?>