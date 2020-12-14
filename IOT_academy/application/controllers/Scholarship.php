<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarship extends CI_Controller {

	
	public function index()
	{
		$data['include']="pages/scholarship";
		$this->load->view('template/container',$data);

	}
	public function scholarship_detail()
	{
		$data['include']="pages/scholarship-detail";
		$this->load->view('template/container',$data);

	}
}
