<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loader extends CI_Controller {

	public function index()
	{
		//$this->load->view('includes/header');
		$this->load->view('index');
		//$this->load->view('includes/footer');
	}
}
