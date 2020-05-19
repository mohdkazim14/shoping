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
			redirect(base_url("auth/register"));
		}
	}		

	public function sendData($status,$result)
	{
		echo json_encode(["status"=>$status,"result"=>$result]);
	}

	public function sendMail($toEmail,$subject,$massage)
	{
		$config['protocol']    = 'smtp';
	    $config['smtp_host']    = 'ssl://smtp.gmail.com';
	    $config['smtp_port']    = '465';
	    $config['smtp_timeout'] = '60';

	    $config['smtp_user']    = 'smtpe498@gmail.com';    //Important
	    $config['smtp_pass']    = 'kazim@786';  //Important

	    $config['charset']    = 'utf-8';
	    $config['newline']    = "\r\n";
	    $config['mailtype'] = 'html'; // or html
	    $config['validation'] = TRUE; // bool whether to validate email or not      

	    $this->email->initialize($config);
	    $this->email->set_mailtype("html");
	    $this->email->from("smtpe498@gmail.com");
	    $this->email->to($toEmail);
	    $this->email->subject($subject);
	    $this->email->message($massage);
	    $this->email->send();
	}

}
