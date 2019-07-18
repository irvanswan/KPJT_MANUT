<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forminput extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("mProduk");
		$this->load->model("user");
		$this->load->library('form_validation');
	}

	function delete($id){
		$where=array('id_produk'=>$id);
		$this->mProduk->delete($where,'daftar_produk');
		echo "<script>alert('Data Berhasil Dihapus !'); history.go(-1);</script>";
	}
}

	?>