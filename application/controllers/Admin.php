<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("HomeModel");
		$this->load->model("AdminModel");
	}

	public function index()
	{

		$this->render("admin/index",$result=Null);
	}

	public function users()
	{
		$result["users"]=$this->AdminModel->users();	
		$this->render("admin/users",$result);
	}

	public function cart()
	{
		$result["carts"]=$this->AdminModel->cart();	
		$this->render("admin/cart",$result);

	}

	public function category()
	{
		$result["categorys"]=$this->AdminModel->category();	
		$this->render("admin/category",$result);
	}

	public function singalcategory($id)
	{
		$singalcategory=$this->AdminModel->singalcategory($id);
		$this->sendData("200",$singalcategory);
	}

	public function product()
	{
			 $result["products"]=$this->AdminModel->product();	
			$this->render("admin/product",$result);
	}

	public function brand()
	{
		// $result["users"]=$this->AdminModel->brand();	
		$this->render("admin/brand",$result=null);
	}


	public function singalUsers()
	{

	}	

	public function unblock($id)
	{
		$data["status"]=2;
		$this->AdminModel->editUsers($id,$data);
	}	

	public function block($id)
	{
		$data["status"]=1;
		$this->AdminModel->editUsers($id,$data);
	}	

	public function changeStatus()
	{
			echo $this->users();
	}	
}
