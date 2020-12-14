<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function index()
	{
		$data['include']="pages/register";
		$this->load->view('template/container',$data);

}
