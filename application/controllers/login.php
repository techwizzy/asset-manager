<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 class Login extends  CI_Controller {
	
	
	function index()
	{
	
		 $data['main_content'] = 'personnel/view_users';
          $this->load->view('includes/template', $data);	
	}
	

	
  function demo_login(){
         //$data['page_title'] = 'Asset'; 
          //$data['chartaccounts']=$this->asset_model->get_chartaccount();
          
   }
	
	
	
}