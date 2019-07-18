<?php defined('BASEPATH') OR exit('No direct script access allowed');

class mProduksiTani extends CI_Model{

	private $table="produksi_tani";

	function insert($data){
		return $this->db->insert($this->table,$data);
	}
	function tampilproduksitani(){
		return $this->db->get($this->_table)->result();
	}
}