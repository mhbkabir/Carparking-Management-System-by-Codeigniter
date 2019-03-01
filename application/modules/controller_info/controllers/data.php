<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MX_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('controller_info/controller_info_model');
      }

	public function add_controller()
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

        $data['result']= $this->controller_info_model->dropdown_floor_list($flg);

		$this->load->view('header');
		$this->load->view('add_controller', $data);
		$this->load->view('footer');
	}


public function save_controller()
{
	if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

    $data['floor_id']       = $this->input->post('floor_id'); 
	$data['controllername'] = $this->input->post('controllername'); 
	$data['controllerID']   = $this->input->post('controllerID'); 
	

	if(!empty($data))
	{

		$this->controller_info_model->save_controller_info($data);
	
	}

		redirect('controller_info/data/controller_list');
}


	public function controller_list()
	{

		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

        $data['result'] = $this->controller_info_model->dropdown_floor_list();
		$data['controller_list'] = $this->controller_info_model->view_controller_list();

		
   		$this->load->view('header');
		$this->load->view('controller_list',$data);
		$this->load->view('footer');
		
	}

    public function edit_controller()
    {

    	if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

		$floor_id        = $this->input->post('floor_id'); 

		$controller_name = $this->input->post('controller_name'); 

		$controllerID    = $this->input->post('controllerID'); 

		$cid 		     = $this->input->post('cid'); 

        $data= array('cid'=>$cid,'cname'=>$controller_name,'floor_id'=>$floor_id, 'controllerID'=>$controllerID);

    	$this->controller_info_model->edit_info($data);
    	
    	redirect('controller_info/data/controller_list');
    }

    

	public function delete($id)
	{

		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

		$check_sensor_table = $this->controller_info_model->sensor_table_info($id);

		if(!empty($check_sensor_table)){
		
			$this->controller_info_model->delete_sensor_info($id);
		}

		$this->controller_info_model->delete_controller_info($id);

		redirect('controller_info/data/controller_list');
	}
	
	
	
}
