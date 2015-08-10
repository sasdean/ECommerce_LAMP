<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Model
{
	
	public function show_all()
	{
		return $this->db->query("SELECT * FROM product")->result_array();
	}
	public function show_all_cat()
	{
		return $this->db->query("SELECT * FROM categories")->result_array();
	}
	public function show_one_cat($category_id)
	{
		return $this->db->query("SELECT * FROM product WHERE product.category_id = ?", $category_id)->result_array();
	}
	public function show_ind($id)
	{
		return $this->db->query("SELECT * FROM product WHERE id = ?", $id)->row_array();
	}
	public function similar($category_id){
		
		return $this->db->query("SELECT * FROM product WHERE product.category_id = ?", $category_id)->result_array();
	}
	/*public function addtocart($data){
		$this->db->query("INSERT INTO orders(name, date, created_at, updated_at) VALUES(?,NOW(),NOW(), NOW())", array($data['name']));
		return $this->db->query($query, $values);
	}*/	
}
//SELECT * FROM leads LIMIT 15, 5" retrieves rows 16-20