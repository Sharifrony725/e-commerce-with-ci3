<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Checkout extends CI_Controller
{
	public function customer_registration(){
		$data = array();
		$data['featured_product'] = $this->WelcomeModel->select_all_featured_product();
		$data['maincontent'] = $this->load->view('pages/checkout', $data, true);
		$this->load->view('master', $data);
	}
}

