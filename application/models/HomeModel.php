<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

	public function signUp($data)
	{
		$this->db->insert("users",$data);
	}

	public function login($email,$password)
	{
		return $this->db->select("*")
					->from("users")
					->where("email",$email)
					->where("password",$password)
					->get()
					->result();	
	}

	public function brand()
	{
		return $this->db->select("*")
						->from("brand")
						->get()
						->result();
	}

	public function category()
	{
		return $this->db->select("*")
						->from("category")
						->get()
						->result();
	}

	public function product()
	{
	return $this->db->select("*")
					->from("product")
					->get()
					->result();
}

public function addtoCart($data)
{
	$this->db->insert("cart",$data);
}

public function cartOpen($id)
{
	return $this->db->select("* , cart.id as cart_id,cart.quantity as cart_quantity")
					->from("cart")
					->join("product","cart.product_id=product.id")
					->where("user_id",$id)
					->get()
					->result();
}

public function cartUpdate($id,$data)
{
	$this->db->where("id",$id)->update("cart",$data);
}

public function cartDelete($id)
{
	$this->db->where("id",$id)->delete("cart");
}

public function caheckCart($data)
{
	// print_r($data);
	return $this->db->select("*")
					->from("cart")
					->where("user_id",$data["user_id"])
					->where("product_id",$data["product_id"])
					->get()
					->result();
}

}
