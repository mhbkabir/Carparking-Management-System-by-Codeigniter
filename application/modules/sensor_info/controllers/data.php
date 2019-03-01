<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MX_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('sensor_info/sensor_info_model');
      }

	public function add_sensor()
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

		$data['result']= $this->sensor_info_model->dropdown_floor_list($gg);

		$data['result_controller_list']= $this->sensor_info_model->dropdown_controller_list($gg);

		$this->load->view('header');
		$this->load->view('add_sensor',$data);
		$this->load->view('footer');
	}

 	public function edit_sensor()
    {
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}

		$sensor_name = $this->input->post('sensor_name'); 
		$floor_id = $this->input->post('floor_id'); 
		
		 $set_sensor_id = $this->input->post('set_sensor_id'); 
		 $controller_id = $this->input->post('controller_id'); 

		$sid 		= $this->input->post('sid'); 

        $data= array('sid'=>$sid,'sname'=>$sensor_name,'floor_id'=>$floor_id, 'sensorID'=>$set_sensor_id, 'controllerid'=> $controller_id );

    	$this->sensor_info_model->edit_info($data);
    	
		redirect('sensor_info/data/sensor_list');
    }

	public function save_sensor(){

		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}
		
      $data['sensor_name']   = $this->input->post('sensorname'); 
      $data['set_sensor_id'] = $this->input->post('set_sensor_id'); 
      
      $data['floor_id']      = $this->input->post('floor_id'); 
      $data['controller_id'] = $this->input->post('controller_id'); 

	if(!empty($data))
	{

		$data=$this->sensor_info_model->save_sensor_info($data);
	
	}

		redirect('sensor_info/data/sensor_list');
	}

	public function sensor_list(){

		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}
		
		$data['sensor_list']=$this->sensor_info_model->view_sensor_list($flg);
		$data['result'] = $this->sensor_info_model->dropdown_floor_list();
		$data['result_controller_list']= $this->sensor_info_model->dropdown_controller_list($gg);

	 	$this->load->view('header');
		$this->load->view('sensor_list',$data);
		$this->load->view('footer');
	}
     
    public function delete($id)
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}
		$this->sensor_info_model->delete_info($id);
		redirect('sensor_info/data/sensor_list');
	}
	


 public function dropdown_floor_list(){

  	$query  = $this->db->query('SELECT * FROM tbl_floor');
	return  $query->result();
  }

/*Ajax Action*/
public function controller_list(){

 	$floor_id = $this->input->post('floorid');

 	$floor_id=$this->input->post('floorid');
		$data['ajax_controller_list']=$this->sensor_info_model->controller_info_view($floor_id);
		$this->load->view('controller_list_ajax',$data);
	
	
}

		
}
