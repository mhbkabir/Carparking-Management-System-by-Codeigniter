<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	public function index()
	{
		if($this->session->userdata('loggedIn')==TRUE)
		{
			redirect('dashboard');	
		}
		
		$data['msg']="";
		
		$this->load->model('admin_model');
		
		
		if(!empty($this->input->post('submit'))){
			
			$userInput['username']  = $this->db->escape_str($this->input->post('your-name'));
			$userInput['userpass']  = $this->db->escape_str($this->input->post('your-password"'));
			
			$result = $this->admin_model->login($userInput);
		
			 if(empty($result))
			{
				$data['msg']= "<div class='alert alert-success' style=margin-bottom:15px;text-align:center;color:red;>Name Or Password is Incorrect!</div>";
			}
			else 
			{
				redirect("dashboard/info");
			}   
		}
		
		$this->load->view('header');
		$this->load->view('login', $data);
		$this->load->view('footer');
	}
}
