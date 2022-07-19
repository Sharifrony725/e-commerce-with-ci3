<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SuperAdmin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$id = $this->session->userdata('id');
		if (!$id) {
			redirect('AuthController');
		}
	}
	public function index()
	{
		$data = array();
		$data['dashboard_content'] = $this->load->view('admin/pages/dashboard_content', '', true);
		$this->load->view('admin/admin_master', $data);
	}
	public function add_category()
	{
		$data = array();
		$data['dashboard_content'] = $this->load->view('admin/pages/add_category', '', true);
		$this->load->view('admin/admin_master', $data);
	}
	public function save_category(){
		$data = array();
		$data['category_name'] = $this->input->post('category_name');
		$data['description'] = $this->input->post('description');
		$data['publication_status'] = $this->input->post('publication_status');
		$this->SuperAdminModel->save_category_info($data);
		$sData = array();
		$sData['message'] = 'category save successfully.';
		$this->session->set_userdata($sData);
		redirect('SuperAdmin/add_category');
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$sData = array();
		$sData['message']  = "you are successfully logout!";
		$this->session->set_userdata($sData);
		redirect('AuthController');
	}
}
