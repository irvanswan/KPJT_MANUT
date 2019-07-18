<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MBiaya extends CI_Model{

	private $table="biaya_produksi";

	function insert($data){
		return $this->db->insert($this->table,$data);
	}
	function ambildata(){
		return $this->db->get($this->table);
	}
	function caridata($where){
		return $this->db->get_where($this->table,$where);
	}
}