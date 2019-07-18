<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Android_api extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("user");
	}

	//---------------------------------------------------------------//

	//--------------------------------------------------------------//

	//Fungsi login pada form login
	function aksi_login(){
		if($_POST['action']=="login"){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->user->cek_login($where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'username' => $username,
				'status' => "login"
				);
 
			echo json_encode($data_session);
		}else{
			echo "Username dan password salah !";
			echo json_encode("eror");
		}
	}else{
		echo json_encode("eror");
	}
}

	function daftar(){
		if($_POST['action']=="save"){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$confirm_password=$this->input->post('confirm_password');

		if($confirm_password==$password){
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
		}
	}
	
}

