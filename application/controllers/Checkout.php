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
	public function customer_save(){
		$data = array();
		$data['first_name'] = $this->input->post('first_name');
		$data['last_name'] = $this->input->post('last_name');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['company'] = $this->input->post('company');
		$data['mobile'] = $this->input->post('mobile');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['postcode'] = $this->input->post('postcode');
		$data['country'] = $this->input->post('country');
		$customer_id = $this->CheckoutModel->save_customer_info($data);
		$sData = array();
		$sData['customer_id'] = $customer_id;
		$this->session->set_userdata($sData);
	}
}	
