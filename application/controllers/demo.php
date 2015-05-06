<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 class Demo extends  CI_Controller {
	public $data;
	
	function index()
	{
	
          $this->load->view('index');	
	}
		
	function demo_login()
	{
	
		  $data['main_content'] ='personnel/view_users';
          $this->load->view('includes/template', $data);	
	}
	function demo_supplier()
	{
	
		  $data['main_content'] ='supllier/supplier';
          $this->load->view('includes/template', $data);	
	}

	function logout()
	{
		
		//$this->session->unset_userdata();
		$this->session->sess_destroy();
		$this->index();
	}


	
	
}