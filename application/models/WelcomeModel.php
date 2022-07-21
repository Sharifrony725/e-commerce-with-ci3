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
