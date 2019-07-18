<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("MProduk");
	}
	public function index()
	{
		$data['produk']=$this->MProduk->tampilproduk()->result();

		$this->load->view('index',$data);
	}
}
