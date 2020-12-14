<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog CI_Controller {

	public function index()
	{
		$data['include']="pages/blog";
		$this->load->view('template/container',$data);
	}
}
