<?php
class CheckoutModel extends CI_Model{
	public function	save_customer_info($data){
		$this->db->insert('tbl_customer' , $data);
		$customer_id = $this->db->insert_id();
		return $customer_id;
	}

} 

