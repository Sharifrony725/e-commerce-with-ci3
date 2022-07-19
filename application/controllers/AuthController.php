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
		$password = md5($this->input->post('password'));
		$result = $this->AdminModel->admin_login_check_info($email , $password);
		$sData = array();
		if($result){
			$sData['id'] = $result->id;
			$sData['name'] = $result->name;
			$this->session->set_userdata($sData);
			redirect('SuperAdmin');
		}else{
			$sData['exception'] = 'email or password invalid';
			$this->session->set_userdata($sData);
			redirect('AuthController');
		}
	}
}
