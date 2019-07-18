<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produksitani extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("mProduk");
		$this->load->model("mAnggota");
		$this->load->model("mProduksiTani");
	}

	//---------------------------------------------------------------//

	//--------------------------------------------------------------//

	//Fungsi login pada form login

	function tampilproduk(){
		$data=$this->mProduk->tampilproduk()->result();
		foreach ($data as $dt ) {
			$result[]=$dt;
		}
		print(json_encode($result));
}
	function tampilorganisasi(){
		$data=$this->mAnggota->tampilanggota()->result();
		foreach ($data as $dt ) {
			$result[]=$dt;
		}
		print(json_encode($result));
}


	function input_data(){
		if($_POST['action']=="simpan"){
			$nama_anggota=$this->input->post('nama_anggota');
			$nama_produk=$this->input->post('nama_produk');
			$tanggal=$this->input->post('tanggal');
			$hasil_produksi=$this->input->post('hsl_produksi');
			$jml_setor=$this->input->post('jml_stor');
			$jml_jual=$this->input->post('jml_jual');

			$nm_produk=array(
				'nm_produk'=>$nama_produk
			);
			$nm_anggota=array(
				'nm_anggota'=>$nama_anggota
			);
		$produk=$this->mProduk->tampilprodukId($nm_produk)->result();
		//$id_produk=null;
		foreach ($produk as $row) {
			$id_produk=$row->id_produk;
		}

		$anggota=$this->mAnggota->tampilaanggotabynama($nm_anggota)->result();

		foreach ($anggota as $row) {
			$id_anggota=$row->id_anggota;
		}
		$data=array(
			'id_anggota'=>$id_anggota,
			'tanggal'=>$tanggal,
			'id_produk'=>$id_produk,
			'jml_setor'=>$jml_setor,
			'jml_jual'=>$jml_jual,
			'jml_hasil'=>$hasil_produksi
		);
		$insert=$this->mProduksiTani->insert($data);
		print(json_encode(array("Success")));
		//$this->mProduksiTani->insert($)
		

		/*if($confirm_password==$password){
			$data=array(
				'username'=>$username,
				'password'=>md5($password)
			);
			$insert=$this->user->daftar($data);
			print(json_encode(array("Success")));
		}else{
			echo json_encode("Confirm Password tidak sama");
		}

		}else{
			echo json_encode("Eror action");
		}*/
	}

	}
}

