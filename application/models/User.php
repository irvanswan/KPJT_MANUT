<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{

	private $table="admin";
	function cek_login($where){
		return $this->db->get_where($this->table,$where);
	}
	function daftar($data){
		return $this->db->insert($this->table,$data);
	}
}