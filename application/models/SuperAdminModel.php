<?php
class SuperAdminModel extends CI_Model{

	public function save_category_info($data){
		$this->db->insert('tbl_category' , $data);
	}
	
}