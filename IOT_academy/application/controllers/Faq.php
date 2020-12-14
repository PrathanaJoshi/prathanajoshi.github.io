<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	
	public function index()
	{
		$data['include']="pages/faq";
		$this->load->view('template/container',$data);
	}
}
