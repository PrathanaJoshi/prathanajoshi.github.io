<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['include']="pages/contact";
		$this->load->view('template/container',$data);	}
}
