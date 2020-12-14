<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function index()
	{
		$data['include']="pages/jobs";
		$this->load->view('template/container',$data);

	}
}
