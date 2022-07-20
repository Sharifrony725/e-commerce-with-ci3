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
	public function save_category()
	{
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
	public function manage_category()
	{
		$data = array();
		$data['all_category'] = $this->SuperAdminModel->select_all_category();
		$data['dashboard_content'] = $this->load->view('admin/pages/manage_category', $data, true);
		$this->load->view('admin/admin_master', $data);
	}

	public function unpublished_category($id)
	{
		$this->SuperAdminModel->unpublished_category_by_id($id);
		redirect('SuperAdmin/manage_category');
	}

	public function published_category($id)
	{
		$this->SuperAdminModel->published_category_by_id($id);
		redirect('SuperAdmin/manage_category');
	}
	public function delete_category($id)
	{
		$this->SuperAdminModel->delete_category_by_id($id);
		redirect('SuperAdmin/manage_category');
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
