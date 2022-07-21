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
	// category operation start 
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
		$sData = array();
		$sData['message'] = 'category delete successfully.';
		$this->session->set_userdata($sData);
		redirect('SuperAdmin/manage_category');
	}
	public function edit_category($id)
	{
		$data = array();
		$data['category_info'] = $this->SuperAdminModel->select_category_info_by_id($id);
		$data['dashboard_content'] = $this->load->view('admin/pages/edit_category', $data, true);
		$this->load->view('admin/admin_master', $data);
	}
	public function update_category(){
		$data = array();
		$id = $this->input->post('id');
		$data['category_name'] = $this->input->post('category_name');
		$data['description'] = $this->input->post('description');
		$this->SuperAdminModel->update_category_info_by_id($data , $id);
		$sData = array();
		$sData['message'] = 'category update successfully.';
		$this->session->set_userdata($sData);
		redirect('SuperAdmin/manage_category');
	}
	// category operation end 

	//manufacture operation start
	public function add_manufacture(){
		$data = array();
		$data['dashboard_content'] = $this->load->view('admin/pages/add_manufacture', '', true);
		$this->load->view('admin/admin_master', $data);
	}
	public function manage_manufacture(){
		$data = array();
		$data['all_manufacture'] = $this->SuperAdminModel->select_all_manufacture();
		$data['dashboard_content'] = $this->load->view('admin/pages/manage_manufacture', $data, true);
		$this->load->view('admin/admin_master', $data);
	}
	public function save_manufacture(){
		$data = array();
		$data['manufacture_name'] = $this->input->post('manufacture_name');
		$data['description'] = $this->input->post('description');
		$data['publication_status'] = $this->input->post('publication_status');
		$this->SuperAdminModel->save_manufacture_info($data);
		$sData = array();
		$sData['message'] = 'manufacture save successfully.';
		$this->session->set_userdata($sData);
		redirect('SuperAdmin/add_manufacture');
	}
	public function unpublished_manufacture($id){
		$this->SuperAdminModel->unpublished_manufacture_by_id($id);
		redirect('SuperAdmin/manage_manufacture');
	}
	public function published_manufacture($id){
		$this->SuperAdminModel->published_manufacture_by_id($id);
		redirect('SuperAdmin/manage_manufacture');
	}
	public function delete_manufacture($id){
		$this->SuperAdminModel->delete_manufacture_by_id($id);
		redirect('SuperAdmin/manage_manufacture');
	}
	public function edit_manufacture($id){
		$data = array();
		$data['manufacture_info'] = $this->SuperAdminModel->select_manufacture_info_by_id($id); 
		$data['dashboard_content'] = $this->load->view('admin/pages/edit_manufacture', $data, true);
		$this->load->view('admin/admin_master', $data);
	}
	public function update_manufacture(){
		$data = array();
		$id = $this->input->post('id');
		$data['manufacture_name'] = $this->input->post('manufacture_name');
		$data['description'] = $this->input->post('description');
		$this->SuperAdminModel->update_manufacture_info_by_id($data , $id);
		$sData = array();
		$sData['message'] = 'manufacture info updated successfully';
		$this->session->set_userdata($sData);
		redirect('SuperAdmin/manage_manufacture');

	}
	//manufacture operation end

	//admin logout method
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
