<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Limit extends MX_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('parking_duration/duration_info_model');
      }

	public function add_limit()
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

		//$data['result'] = $this->duration_info_model->duration_title();

		$this->load->view('header');
		$this->load->view('add_limit');
		$this->load->view('footer');
	}

    public function save_duration_info()
	{
		  $data['duration_start']  = $this->input->post('duration_start'); 
		  $data['duration_end']    = $this->input->post('duration_end'); 

		  $data['duration_title'] = $this->input->post('duration_title'); 
		  
		  $data['duration_color']  = $this->input->post('duration_color'); 
		  
		if(!empty($data))
		{

			$data=$this->duration_info_model->save_duration_info($data);
		
		}

			redirect('parking_duration/limit/view_list');
	}
	
	public function view_list()
	{
		$data['result']=$this->duration_info_model->view_duration_info();
		$this->load->view('header');
		$this->load->view('duration_limit_view',$data);
		//$this->load->view('footer');
	}
	
	public function edit_limit($id)
	{
		

		$data['result_edit'] = $this->duration_info_model->edit_value($id);
		$data['id']          =$id;

		$this->load->view('header');
		$this->load->view('edit_limit', $data);
		$this->load->view('footer');
	}
	

	public function update_duration_info()
	{
      	  $data['duration_id']     = $this->input->post('duration_id');
          $data['duration_start']  = $this->input->post('duration_start'); 
		  $data['duration_end']    = $this->input->post('duration_end'); 
		  $data['duration_title']  = $this->input->post('duration_title'); 
		  $data['duration_color']  = $this->input->post('duration_color'); 
		  
		if(!empty($data))
		{

			$data=$this->duration_info_model->update_duration_info($data);
		
		}
		redirect('parking_duration/limit/view_list');
	}
	
	public function delete_duration($id){
		$this->duration_info_model->delete_duration_info($id);
		redirect('parking_duration/limit/view_list');
	} 


	/*Defualut color set for no car*/

	public function default_color(){

        $data['dfl_color']=$this->duration_info_model->default_color_info();
		$this->load->view('header');
		$this->load->view('default_color', $data);
		$this->load->view('footer');
	}

	public function update_color(){

		 $data['duration_color'] = $this->input->post('duration_color');
		 $this->duration_info_model->update_duration_default_color($data);
		 redirect('parking_duration/limit/default_color');
	}


}
