<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function render($view,$result)
	{		

		 $this->load->view("header/header");
		 // $this->load->view("header/frontendsidenav");
		$this->load->view($view,$result);
		$this->load->view("header/footer");	
	}

	public function validUser()
	{
		if(($this->session->userdata("UID")==''))
		{
			redirect(base_url("home/register"));
		}
	}	

	public function logout()
	{
		$this->session->unset_userdata("UID");
		redirect(base_url("home/register"));
	}

	public function sendData($status,$result)
	{
		echo json_encode(["status"=>$status,"result"=>$result]);
	}
	

}
