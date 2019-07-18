<?php defined('BASEPATH') OR exit('No direct script access allowed');

class mKegiatan extends CI_Model{

	private $table="produksi_olahan";

	function insert($data){
		return $this->db->insert($this->table,$data);
	}
	function tampilallolahan(){
		return $this->db->get($this->table);
	}
	function tampilolahan($where){
		return $this->db->get_where($this->table,$where);
	}
}