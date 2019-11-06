<?php 

class Dpsen extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login2"){
			redirect(base_url("login2"));
		}
	}

	function index(){
		$this->load->view('v_dosen');
	}
}