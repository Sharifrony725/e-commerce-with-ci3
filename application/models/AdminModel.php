<?php 
class AdminModel extends CI_Model{
	public function admin_login_check_info($email , $password){
		//active records query
		$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
}
