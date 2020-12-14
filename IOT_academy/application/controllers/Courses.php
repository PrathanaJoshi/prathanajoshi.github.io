<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

	
	public function index()
	{
		$data['include']="pages/courses";
		$this->load->view('template/container',$data);

	}
	public function course_detail()
	{
		$data['include']="pages/courses-detail";
		$this->load->view('template/container',$data);

	}
}
	