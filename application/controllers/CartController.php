<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}
	public function add_to_cart()
	{
		$qty = $this->input->post('qty');
		$product_id = $this->input->post('product_id');
		$product_info = $this->CartModel->select_product_by_id($product_id);
		$data = array(
			'id'      => $product_info->id,
			'qty'     => $qty,
			'price'   => $product_info->new_price,
			'name'    => $product_info->product_name,
			'options' => array('image' => $product_info->image)
		);

		$this->cart->insert($data);

		
		redirect('CartController/show_cart');
	}
	public function show_cart(){
		$data = array();
		$data['featured_product'] = $this->WelcomeModel->select_all_featured_product();
		$data['maincontent'] = $this->load->view('pages/show_cart', $data, true);
		$this->load->view('master', $data);
	}

}
