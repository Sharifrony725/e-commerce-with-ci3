<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AuthController extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin/admin_login');
	}
	public function admin_login_check()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
	redirect('SuperAdmin');
	}
}
