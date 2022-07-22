<?php
class WelcomeModel extends CI_Model
{
	public function select_all_published_product(){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('publication_status' , 1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function select_all_featured_product(){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('is_featured' , 1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function select_product_info_by_id($id){
		$this->db->select('tbl_product.*,tbl_manufacture.manufacture_name ,tbl_category.category_name');
		$this->db->from('tbl_product');
		$this->db->join('tbl_manufacture', 'tbl_manufacture.id=tbl_product.manufacturer_name');
		$this->db->join('tbl_category', 'tbl_category.id=tbl_product.category_name');
		$this->db->where('tbl_product.id', $id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function select_published_product_by_category_id($id){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('publication_status', 1);
		$this->db->where('category_name', $id);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
}
