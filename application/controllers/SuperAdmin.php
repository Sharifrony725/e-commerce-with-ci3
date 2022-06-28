<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SuperAdmin extends CI_Controller
{
	public function index()
	{
		$data = array();
		$data['dashboard_content'] = $this->load->view('admin/pages/dashboard_content', '', true);
		$this->load->view('admin/admin_master', $data);
	}
}
