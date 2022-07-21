<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['slider'] = true;
		$data['published_product'] = $this->WelcomeModel->select_all_published_product();
		$data['featured_product'] = $this->WelcomeModel->select_all_featured_product();
		$data['maincontent'] = $this->load->view('pages/home_content' , $data , true);
		$this->load->view('master' , $data);
	}
	public function category_product($id){
		$data = array();
		$data['slider'] = true;
		$data['published_product_by_category'] = $this->WelcomeModel->select_published_product_by_category_id($id);
		$data['featured_product'] = $this->WelcomeModel->select_all_featured_product();
		$data['maincontent'] = $this->load->view('pages/category_product', $data, true);
		$this->load->view('master', $data);
	}
	public function about_us(){
		$data = array();
		$data['maincontent'] = $this->load->view('pages/about', '', true);
		$this->load->view('master' , $data);
	}
}
