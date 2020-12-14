<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	
	public function index()
	{
		
		$data['include']="pages/update";
		$this->load->view('template/container',$data);
	}
	public function latest_news()
	{
		
		$data['include']="pages/latest-news";
		$this->load->view('template/container',$data);
	}
	public function event()
	{
		
		$data['include']="pages/event";
		$this->load->view('template/container',$data);
	}
}
