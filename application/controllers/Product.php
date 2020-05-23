<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("HomeModel");
	}
	
	public function products()
	{
		$this->validUser();
		$result["brands"]=$this->HomeModel->brand();
		$result["categorys"]=$this->HomeModel->category();	
		$result["products"]=$this->HomeModel->product();			
		$this->render('frontend/products',$result);		
	}	

	public function search()
	{
		$search=$this->input->post("search");
		$result=$this->HomeModel->search($search);
		if(!empty($result)){

		$this->sendData(200,$result);
	}else{
		$this->sendData(201,"try again");

	}
	}	
	public function mymail()
	{
		$email="mohdkazim14@gmail.com";
		$subject="chek SMTP";
		$msg="Your mail is send";
		$this->sendMail($email,$subject,$msg);
	}
}
