<?php
class CheckoutModel extends CI_Model{
	public function	save_customer_info($data){
		$this->db->insert('tbl_customer' , $data);
		$customer_id = $this->db->insert_id();
		return $customer_id;
	}
	public function	save_shipping_info($data){
		$this->db->insert('tbl_shipping' , $data);
		$shipping_id = $this->db->insert_id();
		return $shipping_id;
	}
	public function save_payment_info($data){
		$this->db->insert('tbl_payment' , $data);
		$payment_id = $this->db->insert_id();
		return $payment_id;	
	}
	public function save_order_info($orderData){
		$this->db->insert('tbl_order' , $orderData);
		$order_id = $this->db->insert_id();
		return $order_id;	
	}
} 

