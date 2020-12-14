<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends CI_Controller {

	public function index()
	{
		$data['include']="pages/training";
		$this->load->view('template/container',$data);

	}
	public function training_detail()
	{
		$data['include']="pages/training-detail";
		$this->load->view('template/container',$data);

	}
}

