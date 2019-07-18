<?php 
 
class Ses extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin"));
	}
}
 
	function index(){
		$this->load->view('admin/views/home');
	}
}