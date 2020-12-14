<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['include']="pages/home";
		$this->load->view('template/container',$data);
	}
}
