<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forminput extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("mProduk");
		$this->load->model("user");
		$this->load->library('form_validation');
	}

	function form_input_tani(){
		if($this->session->userdata('status') == "login"){
		$id_produk=$this->input->post('id_produk');
		$nm_produk=$this->input->post('nama_produk');
		$gambar=$this->mProduk->upload_image($id_produk);
		$data=array(
			'id_produk'=>$id_produk,
			'id_kategori'=>1,
			'nm_produk'=>$nm_produk,
			'gambar_produk'=>$gambar
		);
		$this->mProduk->insert($data);
		echo '<script>alert("Data berhasil di inputkan");history.go(-1);</script>';
	}else{
			$this->load->view('admin/login');
		}
	}

	function form_input_olah(){
		if($this->session->userdata('status') == "login"){
		$id_produk=$this->input->post('id_produk');
		$nm_produk=$this->input->post('nama_produk');
		$gambar=$this->mProduk->upload_image($id_produk);
		$data=array(
			'id_produk'=>$id_produk,
			'id_kategori'=>2,
			'nm_produk'=>$nm_produk,
			'gambar_produk'=>$gambar
		);
		$this->mProduk->insert($data);
		echo '<script>alert("Data berhasil di inputkan");history.go(-1);</script>';
		
	}else{
			$this->load->view('admin/login');
		}

	
}
}

	?>