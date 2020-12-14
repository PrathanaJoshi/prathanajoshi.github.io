
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downloads extends CI_Controller {

	public function index()
	{
		$data['include']="pages/downloads";
		$this->load->view('template/container',$data);

	}
	
}

