<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {


     public function __construct(){
        parent::__construct();
        $this->load->model('dashboard_model');
      }

	
	public function info($fid="",$cid="",$sid="")
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}
	

		$sensor_id     = $sid;
		$controller_id = $cid;
		$floor_id      = $fid;

		if(!empty($sensor_id) && !empty($controller_id) && !empty($floor_id))
		{

			$input['sensor_id']     = $sensor_id;
	        $input['controller_id'] = $controller_id; 
	        $input['floor_id']      = $floor_id; 
			$data['dashboard_data']     = $this->dashboard_model->log_information($input);

        }
		else{

		    $data['dashboard_data']         = $this->dashboard_model->log_information($prm);
		}

        $data['fid']=$floor_id;
		$data['result_sensor_list']     = $this->dashboard_model->dropdown_sensor_list();
		$data['result']                 = $this->dashboard_model->dropdown_floor_list();
		$data['result_controller_list'] = $this->dashboard_model->dropdown_controller_list();

		/*Bredcum*/
		/*Floor name*/
		if(!empty($floor_id) && (!empty($controller_id)) && (!empty($sensor_id))){

		$singlefloor=$this->dashboard_model->single_floor_name($floor_id);
		$singlecontroller=$this->dashboard_model->single_controller_name($floor_id,$controller_id);
		$singlesensor=$this->dashboard_model->single_sensor_name($floor_id,$controller_id,$sensor_id);


		$data['single_floor_name']     =$singlefloor[0]->floor_name;
		$data['single_controller_name']=$singlecontroller[0]->controller_name;
		$data['single_sensor_name']    =$singlesensor[0]->sensor_name;

		}
			
		$this->load->view('header');
		$this->load->view('dashboard', $data);
		$this->load->view('footer');
	}

	public function search(){
		
		$sensor_id     = $this->input->post('sensor_id');
		$controller_id = $this->input->post('controller_id');
		$floor_id      = $this->input->post('floor_id');

		$prm=$this->input->post('param');

		if($prm=='st')
		{
		 redirect("/dashboard/status/$floor_id/$controller_id/$sensor_id");	
		}
		else
        redirect("/dashboard/info/$floor_id/$controller_id/$sensor_id");
	}
	
	public function status($fid="",$cid="",$sid="")
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}
		
		//$this->load->model('dashboard_model');


		// $sensor_id     = $this->input->post('sensor_id');
		// $controller_id = $this->input->post('controller_id');
		// $floor_id      =  $this->input->post('floor_id');
		$sensor_id     = $sid;
		$controller_id = $cid;
		$floor_id      = $fid;



		if(!empty($sensor_id) && !empty($controller_id) && !empty($floor_id))
		{

		$input['sensor_id']     = $sensor_id;
        $input['controller_id'] = $controller_id; 
        $input['floor_id']      = $floor_id; 
       
			$data['status_data'] = $this->dashboard_model->status_info($input);

        }
		else{

		    $data['status_data']=$this->dashboard_model->status_info($input);

		}

		/*Bredcum*/
		/*Floor name*/
		if(!empty($floor_id) && (!empty($controller_id)) && (!empty($sensor_id))){

		$singlefloor=$this->dashboard_model->single_floor_name($floor_id);
		$singlecontroller=$this->dashboard_model->single_controller_name($floor_id,$controller_id);
		$singlesensor=$this->dashboard_model->single_sensor_name($floor_id,$controller_id,$sensor_id);


		$data['single_floor_name']     =$singlefloor[0]->floor_name;
		$data['single_controller_name']=$singlecontroller[0]->controller_name;
		$data['single_sensor_name']    =$singlesensor[0]->sensor_name;

		}
			

		$data['result_sensor_list']     = $this->dashboard_model->dropdown_sensor_list();
		$data['result']                 = $this->dashboard_model->dropdown_floor_list();
		$data['result_controller_list'] = $this->dashboard_model->dropdown_controller_list();
		
		$this->load->view('header');
		$this->load->view('status', $data);
		$this->load->view('footer');
	}
	
	public function deviceinfo()
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}
		
		
		//$data['dashboard_data']=$this->dashboard_model->device_info();

		$data['floor_list']= $this->dashboard_model->device_floor_list();
		
		
		$this->load->view('header');
		$this->load->view('device-info', $data);
		$this->load->view('footer');
	}	

/****Ajax Action function****/
	public function controller_list(){
		$floor_id=$this->input->post('floorid');
		$data['ajax_controller_list']=$this->dashboard_model->controller_info_view($floor_id);
		$this->load->view('controller_list_ajax',$data);
	}

	public function sensor_list(){
		$floor_id=$this->input->post('floorid');
		$controller_id = $this->input->post('controllerid');
		$data['ajax_sensor_list']=$this->dashboard_model->sensor_info_view($floor_id, $controller_id);
		$this->load->view('sensor_list_ajax',$data);
	}
}
