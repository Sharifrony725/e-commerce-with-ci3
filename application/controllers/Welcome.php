<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['maincontent'] = $this->load->view('pages/home_content' , '' , true);
		$this->load->view('master' , $data);
	}
}
