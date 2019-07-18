<?php defined('BASEPATH') OR exit('No direct script access allowed');

class mKegiatan extends CI_Model{

	private $table="kegiatan";

	function insert($data){
		return $this->db->insert($this->table,$data);
	}
	function tampilallkegiatan(){
		return $this->db->get($this->table);
	}
	function tampilkegiatan($where){
		return $this->db->get_where($this->table,$where);
	}
}