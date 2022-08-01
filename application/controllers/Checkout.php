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
		$data['password'] = md5($this->input->post('password'));
		$data['company'] = $this->input->post('company');
		$data['mobile'] = $this->input->post('mobile');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['postcode'] = $this->input->post('postcode');
		$data['country'] = $this->input->post('country');
		$customer_id = $this->CheckoutModel->save_customer_info($data);
		$sData = array();
		$sData['customer_id'] = $customer_id;
		$sData['customer_name'] = $data['first_name'].' '.$data['last_name'];
		$this->session->set_userdata($sData);
		redirect('Checkout/shipping');
	}
	public function shipping(){
		$data = array();
		$data['featured_product'] = $this->WelcomeModel->select_all_featured_product();
		$data['maincontent'] = $this->load->view('pages/shipping', $data, true);
		$this->load->view('master', $data);
	}

	public function save_shipping_address(){
		$data = array();
		$data['first_name'] = $this->input->post('first_name');
		$data['last_name'] = $this->input->post('last_name');
		$data['email'] = $this->input->post('email');
		$data['mobile'] = $this->input->post('mobile');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['postcode'] = $this->input->post('postcode');
		$data['country'] = $this->input->post('country');
		$shipping_id = $this->CheckoutModel->save_shipping_info($data);
		$sData = array();
		$sData['shipping_id'] = $shipping_id;
		$this->session->set_userdata($sData);
		redirect('Checkout/payment');
	}
	public function payment()
	{
		$data = array();
		$data['featured_product'] = $this->WelcomeModel->select_all_featured_product();
		$data['maincontent'] = $this->load->view('pages/payment', $data, true);
		$this->load->view('master', $data);
	}
	public function order_confirm(){
		$data = array();
		$payment_method = $this->input->post('payment_method');
		$data['payment_method'] = $payment_method;
		$payment_id = $this->CheckoutModel->save_payment_info($data);
		$orderData = array();
		$orderData['customer_id'] = $this->session->userdata('customer_id');
		$orderData['shipping_id'] = $this->session->userdata('shipping_id');
		$orderData['payment_id'] = $payment_id;
		$orderData['order_total'] = $this->session->userdata('grant_total');
		$order_id = $this->CheckoutModel->save_order_info($orderData);
	}

	public function logout(){

	}
}	
