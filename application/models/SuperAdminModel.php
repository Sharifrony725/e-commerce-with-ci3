<?php
class SuperAdminModel extends CI_Model
{

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
}
