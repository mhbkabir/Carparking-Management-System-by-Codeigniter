<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MX_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('floor_info/floor_info_model');
      }

	public function add_floor()
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

		

		$this->load->view('header');
		$this->load->view('add_floor');
		$this->load->view('footer');
	}
public function save_floor()
{
	if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

	$floor_name = $this->input->post('floorname'); 
	$floorID    = $this->input->post('floorID'); 
	

	if(!empty($floor_name) && !empty($floorID))
	{

	$data=$this->floor_info_model->save_floor_info($floor_name,$floorID);
	
	}

		redirect('floor_info/data/floor_list');
}
	public function floor_list()
	{
       if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}
		$data['floor_list']=$this->floor_info_model->view_floor_list($flg);

	 	$this->load->view('header');
		$this->load->view('floor_list',$data);
		$this->load->view('footer');
	}

    public function edit_floor()
    {
    	if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

		$floor_name = $this->input->post('floor_name'); 
		
		$floorID    = $this->input->post('floorID'); 

		$fid 		= $this->input->post('fid'); 

        $data       = array('fid'=>$fid,'fname'=>$floor_name,'floorID'=>$floorID);

    	$this->floor_info_model->edit_info($data);
    	
		redirect('floor_info/data/floor_list');
    }

	public function delete($id)
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}


		$check_status_table = $this->floor_info_model->status_table_info($id);

		$check_sensor_table = $this->floor_info_model->sensor_table_info($id);

		$check_controller_table = $this->floor_info_model->controller_table_info($id);

		if(!empty($check_status_table)){

			$this->floor_info_model->delete_floor_info($id);
			$this->floor_info_model->delete_controller_info($id);
			$this->floor_info_model->delete_sensor_info($id);
			$this->floor_info_model->delete_log_info($id);
			$this->floor_info_model->delete_sensor_info($id);
			$this->floor_info_model->delete_status_info($id);
		}
        else
        {

			if(!empty($check_sensor_table)){
            	$this->floor_info_model->delete_sensor_info($id);
				}

        	if(!empty($check_controller_table)){
				
				$this->floor_info_model->delete_controller_info($id);
			
			}
			
				$this->floor_info_model->delete_floor_info($id);
        }
		
		redirect('floor_info/data/floor_list');
	}
	
	
	
}
