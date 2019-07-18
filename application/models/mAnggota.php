<?php defined('BASEPATH') OR exit('No direct script access allowed');

class mAnggota extends CI_Model{

	private $table="organisasi";

	function insert($data){
		return $this->db->insert($this->table,$data);
	}
	function tampilanggota(){
		return $this->db->get($this->table);
	}
	function tampilaanggotabynama($where){
		return $this->db->get_where($this->table,$where);
	}
}