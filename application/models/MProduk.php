<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MProduk extends CI_Model{

	private $table="daftar_produk";

	function insert($data){

		return $this->db->insert($this->table,$data);
	}
	function tampilproduk(){
		return $this->db->get($this->table);
	}
	function delete($where){
		$this->db->where($where);
		$this->db->delete($this->table);
	}
	function tampilprodukId($where){
		return $this->db->get_where($this->table,$where);
	}

	public function upload_image($id_produk){
	$config['upload_path']          = './assets/gambar_produk/';
    $config['allowed_types']        = 'jpg|png';
    $config['file_name']            = $id_produk;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; 

	/*$config['direktori']='./assets/gambar_produk/';
	$config['type']='jpg|png';
	$config['name_file']=$id_produk;
	$config['overwrite']=true;
	$config['max_size']= 1024; //1 MB*/
	 $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }else{
		echo '<script>alert("Data gag di inputkan")</script>';
	}
}

public function kode_produk_olah(){
	$this->db->select('RIGHT(daftar_produk.id_produk,3) AS kode',FALSE);
	$this->db->order_by('kode','DESC');
	$this->db->limit(1);
	$where=array(
		'id_kategori'=>2
			);
	$query=$this->db->get_where($this->table,$where);

	if($query->num_rows()<>0){
		$data = $query->row();
		$kode = intval($data->kode)+1;
	}else{
		$kode=1;
	}
		$batas = str_pad($kode,3,"0", STR_PAD_LEFT);
		$kodetampil="PO".$batas;
		return $kodetampil;
}
public function kode_produk_tani(){
	$this->db->select("RIGHT(daftar_produk.id_produk,3) AS kode",FALSE);
	$this->db->order_by('kode','DESC');
	$this->db->limit(1);
	$where=array(
		'id_kategori'=>1
			);
	$query=$this->db->get_where($this->table,$where);

	if($query->num_rows()<>0){
		$data = $query->row();
		$kode = intval($data->kode)+1;
	}else{
		$kode=1;
	}
		$batas = str_pad($kode,3,"0", STR_PAD_LEFT);
		$kodetampil="PT".$batas;
		return $kodetampil;
}
}