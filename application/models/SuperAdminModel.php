<?php
class SuperAdminModel extends CI_Model
{
	//category method start
	public function save_category_info($data)
	{
		$this->db->insert('tbl_category', $data);
	}
	public function select_all_category()
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function unpublished_category_by_id($id){
		$this->db->set('publication_status', 0);
		$this->db->where('id', $id);
		$this->db->update('tbl_category');
	}
	public function published_category_by_id($id){
		$this->db->set('publication_status', 1);
		$this->db->where('id', $id);
		$this->db->update('tbl_category');
	}
	public function delete_category_by_id($id){
		$this->db->where('id' , $id);
		$this->db->delete('tbl_category');
	}
	public function select_category_info_by_id($id){
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('id' , $id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
	public function update_category_info_by_id($data , $id){
		$this->db->where('id' , $id);
		$this->db->update('tbl_category' , $data);
	}
	//category method end

	//manufacture method start
	public function save_manufacture_info($data){
		$this->db->insert('tbl_manufacture', $data);
	}
	public function select_all_manufacture(){
		$this->db->select('*');
		$this->db->from('tbl_manufacture');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function unpublished_manufacture_by_id($id){
		$this->db->set('publication_status', 0);
		$this->db->where('id', $id);
		$this->db->update('tbl_manufacture');
	}
	public function published_manufacture_by_id($id){
		$this->db->set('publication_status', 1);
		$this->db->where('id', $id);
		$this->db->update('tbl_manufacture');
	}
	public function delete_manufacture_by_id($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_manufacture');
	}
	public function select_manufacture_info_by_id($id){
		$this->db->select('*');
		$this->db->from('tbl_manufacture');
		$this->db->where('id', $id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
	public function update_manufacture_info_by_id($data, $id){
		$this->db->where('id' , $id);
		$this->db->update('tbl_manufacture' , $data);
	}
	//manufacturer method end

	//product method start
	public function select_all_published_category(){
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('publication_status' , 1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function select_all_published_manufacturer(){
		$this->db->select('*');
		$this->db->from('tbl_manufacture');
		$this->db->where('publication_status' , 1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function save_product_info($data){
		$this->db->insert('tbl_product' , $data);
	}
	public function select_all_product(){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function unpublished_product_by_id($id){
		$this->db->set('publication_status', 0);
		$this->db->where('id', $id);
		$this->db->update('tbl_product');
	}
	public function published_product_by_id($id){
		$this->db->set('publication_status', 1);
		$this->db->where('id', $id);
		$this->db->update('tbl_product');
	}
	public function unpublished_featured_product_by_id($id){
		$this->db->set('is_featured', 0);
		$this->db->where('id', $id);
		$this->db->update('tbl_product');
	}
	public function published_featured_product_by_id($id){
		$this->db->set('is_featured', 1);
		$this->db->where('id', $id);
		$this->db->update('tbl_product');
	}
	public function delete_product_by_id($id){
		$this->db->where('id' , $id);
		$this->db->delete('tbl_product');
	}
	//product method end
}
