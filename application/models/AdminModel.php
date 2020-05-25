<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {
	
	public function users()
	{
		return $this->db->select()
		->from("users")
		->get()
		->result();
	}

	public function singalUsers($id)
	{
		return $this->db->select()
		->from("users")
		->where("id",$id)
		->get()
		->result();
	}

	public function editUsers($id,$data)
	{
		$this->db->where("id",$id)
		->update("users",$data);
	}

	public function deleteUsers($id)
	{
		 $this->db->where("id",$id)
		->delete("users");
	}

	public function cart()
	{
		return $this->db->select()
		->from("cart")
		->get()
		->result();
	}

	public function singalcart($id)
	{
		return $this->db->select()
		->from("cart")
		->where("id",$id)
		->get()
		->result();
	}

	public function editcart($id,$data)
	{
		$this->db->where("id",$id)
		->update("cart",$data);
	}

	public function deletecart($id)
	{
		 $this->db->where("id",$id)
		->delete("cart");
	}

	

	public function category()
	{
		return $this->db->select()
		->from("category")
		->get()
		->result();
	}

	public function singalcategory($id)
	{
		return $this->db->select()
		->from("category")
		->where("id",$id)
		->get()
		->result();
	}

	public function editcategory($id,$data)
	{
		$this->db->where("id",$id)
		->update("category",$data);
	}

	public function deletecategory($id)
	{
		 $this->db->where("id",$id)
		->delete("category");
	}

	public function addProduct($data)
	{
		$this->db->insert("product",$data);
	}

	public function brand()
	{
		return $this->db->select("*")
		->from("brand")
		->get()
		->result();
	}

	// public function category()
	// {

	// 	return "kazim";
	// 	// return $this->db->select("*")
	// 	// ->from("category")
	// 	// ->get()
	// 	// ->result();
	// }

	public function product()
	{
		return $this->db->select()
		->from("product")
		->get()
		->result();
	}

	public function singalproduct($id)
	{
		return $this->db->select()
		->from("product")
		->where("id",$id)
		->get()
		->result();
	}

	public function editproduct($id,$data)
	{
		$this->db->where("id",$id)
		->update("product",$data);
	}

	public function deleteproduct($id)
	{
		 $this->db->where("id",$id)
		->delete("product");
	}

	
}
