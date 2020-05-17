<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("HomeModel");
	}

	public function index()
	{
		$this->render('frontend/index',$result=null);
	}

	public function products()
	{
		$this->validUser();
		$result["brands"]=$this->HomeModel->brand();
		$result["categorys"]=$this->HomeModel->category();	
		$result["products"]=$this->HomeModel->product();			
		$this->render('frontend/products',$result);
		
	}

	public function register()
	{
		$this->render('frontend/register',$result=Null);
	}

	//rework frolder in vew 
	// public function product()
	// {
	// 	$result["product"]=$this->HomeModel->product();			
	// 	echo json_encode(["status"=>"200","data"=>$result]);
	// }

	public function cartOpen()
	{
		$id=$this->session->userdata("UID");
		$result["carts"]=$this->HomeModel->cartOpen($id);
		$this->render('frontend/cart',$result);
	}

	public function addtoCart($id)
	{
		$data["product_id"]=$id;
		$data["user_id"]=$this->session->userdata("UID");
		$data["quantity"]=1;
		$data["created"]=date("d/m/y");
		$result=$this->HomeModel->caheckCart($data);
		if(empty($result)){
			$this->HomeModel->addtoCart($data);
			$this->sendData(200,"Add SuccessFully");
		}
		else{
			$this->sendData(201,"Already  Exits");
		}
	}

	public function cartUpdate($id)
	{
		$id=$id;
		$data["quantity"]=$this->input->post("quantity");
		$this->HomeModel->cartUpdate($id,$data);	
	}

	public function cartDelete($id)
	{
		$this->HomeModel->cartDelete($id);	
	}


	public function testData()
	{
		$id=$this->session->userdata("UID");
		$result["carts"]=$this->HomeModel->cartOpen($id);
		$this->sendData(200,$result);
	}


	public function login()
	{
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$result=$this->HomeModel->login($email,$password);
		if($result)
		{
			print_r($result[0]->id);
			$this->session->set_userdata("UID",$result[0]->id);

		}else{
			$this->sendData("201","Plese Enter a vlaid email id and pasowrd");
		}
	}

	public function signUp()
	{
		$data["name"]=$this->input->post("name");
		$data["email"]=$this->input->post("email");
		$data["password"]=$this->input->post("password");
		$this->HomeModel->signUp($data);
		echo "Dtat inserts";
		redirect("home/register");
	}

	public function sendData($status,$result)
	{
		echo json_encode(["status"=>$status,"result"=>$result]);
	}
}
