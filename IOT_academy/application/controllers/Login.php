<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$data['include']="pages/login";
		$this->load->view('template/container',$data);

	}
}
