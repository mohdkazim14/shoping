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
		 $result["brands"]=$this->AdminModel->brand();	
		 $result["categorys"]=$this->AdminModel->category();	
		 $result["products"]=$this->AdminModel->product();	

		$this->render("admin/product",$result);
		}

	public function addPtoduct()
	{
		if(isset($_FILES["userfile"]["name"]))  
		{ 
			print_r($_FILES);
		 
          	$config['upload_path']    	= './assets/images/upload/product';   
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 5048;
            $config['max_width']            = 4024;
            $config['max_height']           = 5020;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('userfile'))
            {
        		echo "image validation";
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
               echo json_encode(["status"=>201,"image_error"=> $error]);
            }
            else
            { 		
				$data["img"] = array('upload_data' => $this->upload->data());
				print_r($data);
        	 	$datas["name"]=$this->input->post("name"); 
        		$datas["quantity"]=$this->input->post("quantity");
        		$datas["price"]=$this->input->post("price");
        		$datas["brand"]=$this->input->post("brand");
        		$datas["offer"]=$this->input->post("offer");
        		$datas["category"]=$this->input->post("category");
        		$datas["description"]=$this->input->post("description");
        		$datas["image"]=$data["img"]["upload_data"]["file_name"];
        		$datas["created"]=date("d/m/y");
        		$datas["status"]=1;  
        		echo json_encode(["status"=>200,"data"=>$data]);				           	
                $this->AdminModel->addProduct($datas);
                redirect("admin/product");
                // $this->load->view('upload_success', $data);            
        }
   	 }
	}
	

		
	public function brand()
	{
		// $result["users"]=$this->AdminModel->brand();	
		$this->render("admin/brand",$result=null);
	}

public function do_upload()
        {
        	// print_r($_FILES["userfile"]["name"]);
	       	if(isset($_FILES["userfile"]["name"]))  
			{  
              	$config['upload_path']    	= './assets/images/upload/upload';   
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 1024;
                $config['max_height']           = 1020;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                        // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                        // $this->load->view('upload_success', $data);
                }
            }
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
