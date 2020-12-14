<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function index()
	{
		$data['include']="pages/event";
		$this->load->view('template/container',$data);

	}
	
}

