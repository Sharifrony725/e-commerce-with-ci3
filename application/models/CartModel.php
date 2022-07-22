<?php
class CartModel extends CI_Model{
	public function select_product_by_id($product_id){
		$this->db->select('tbl_product.*,tbl_manufacture.manufacture_name ,tbl_category.category_name');
		$this->db->from('tbl_product');
		$this->db->join('tbl_manufacture', 'tbl_manufacture.id=tbl_product.manufacturer_name');
		$this->db->join('tbl_category', 'tbl_category.id=tbl_product.category_name');
		$this->db->where('tbl_product.id', $product_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
}
