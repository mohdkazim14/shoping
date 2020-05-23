<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("HomeModel");
		date_default_timezone_set("Asia/Kolkata"); 
	}
	
	public function register()
	{
		$this->render('frontend/register',$result=Null);
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules("password","Password","required");
		if($this->form_validation->run()==false)
		{
			echo json_encode(["status"=>201,"l_email_error"=>form_error("email"),"L_password_error"=>form_error("password")]);			
						
		}
		else {
			$email=$this->input->post("email");
			$password=$this->input->post("password");
			$result=$this->HomeModel->login($email,$password);		
		if($result)
		{
			print_r($result[0]->id);
			$this->session->set_userdata("UID",$result[0]->id);

		}else{
			echo json_encode(["status"=>203,"data"=>"Please Enter a vlaid email id and pasowrd"]);

		}		
		}


		// $email=$this->input->post("email");
		// $password=$this->input->post("password");
		// $result=$this->HomeModel->login($email,$password);
		// if($result)
		// {
		// 	print_r($result[0]->id);
		// 	$this->session->set_userdata("UID",$result[0]->id);

		// }else{
		// 	$this->sendData("201","Plese Enter a vlaid email id and pasowrd");
		// }
	}

	public function signUp()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules("name","Name","required|min_length[4]");
		$this->form_validation->set_rules("password","Password","required|max_length[12]|min_length[3]");
		if($this->form_validation->run()==false)
		{
			echo json_encode(["status"=>201,"name_error"=>form_error("name"),"email_error"=>form_error("email"),"password_error"=>form_error("password")]);			
						
		}
		else {
			$data["name"]=$this->input->post("name");
			$data["email"]=$this->input->post("email");
			$data["password"]=$this->input->post("password");
			$data["created"]=date("h:i:s a, d/m/y");
			$data["status"]=1;
			$this->HomeModel->signUp($data);		
			echo json_encode(["status"=>200,"data"=>"Register Successfully"]);			
		}
	}

	public function forgetPassword()
	{
		 $email=$this->input->post("email");		
		$otp=str_shuffle("1234567890");
		$otp=substr($otp , 0 , 6);
		$result=$this->HomeModel->forgetPassword($email);
		if(!empty($result))
		{					
			$this->HomeModel->forgetPassword($email);
			$this->sendData("200","Please Check Your Gmail OTP is send");
			$this->session->set_userdata("OTP",$otp);
			// $this->sendMail($email,"Your OTP",$otp);

		}else
		{
			$this->sendData("201","This Email IS not Exits Try Again...");
		}
	}

	public function sendotp()
	{
		$config['useragent'] = 'CodeIgniter';
		$config['protocol'] = 'smtp';
		//$config['mailpath'] = '/usr/sbin/sendmail';
		$config['smtp_host'] = "http://php.net/smtp-port";
		$config['smtp_user'] = 'smtpe498@gmail.com';
		$config['smtp_pass'] = 'kazim@786';
		$config['smtp_port'] = 25; 
		$config['smtp_timeout'] = 5;
		$config['wordwrap'] = TRUE;
		$config['wrapchars'] = 76;
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['validate'] = TRUE;
		$config['priority'] = 3;
		$config['crlf'] = "\r\n";
		$config['newline'] = "\r\n";

		$this->email->from('kazim.adaptabiz@gmail.com');
		$this->email->to('mohdkazim14@gmail.com');
		$this->email->subject('Test email from CI and Gmail');
		$this->email->message('This is a test.');
		$this->email->send();

	}

	public function changePassword()
	{

	}

	public function logout()
	{
		$this->session->unset_userdata("UID");
		redirect(base_url("auth/register"));
	}	
}
