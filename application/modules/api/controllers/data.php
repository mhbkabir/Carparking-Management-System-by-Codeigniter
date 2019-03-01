<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MX_Controller {

	function _remap($method, $args)
	{

	   if (method_exists($this, $method))
	   {
		   $this->$method($args);
	   }
	   else
	   {
			$this->Index($method, $args);
	   }
	}

	public function index()
	{
			
		$str       = $_SERVER['REQUEST_URI'];	
		
		$array_str = (explode("/",$str));
		
		if (!in_array("floor", $array_str))
		{
			echo "Invalid url";
		}
		else if (!in_array("controller", $array_str))
		{
			echo "Invalid url";
		}
		else if (!in_array("sensor", $array_str))
		{
			echo "Invalid url";
		}
		else if (!in_array("status", $array_str))
		{
			echo "Invalid url";
		}
		else
		{
			$this->load->model('api_model');
			$get = $this->uri->uri_to_assoc();	

			$sensor_hex=$this->dec2hex($get['sensor']);
			
			$now = date('Y-m-d H:i:s');
			$data = array(
				'floor_id'        =>$get['floor'],
				'controller_id'   =>$get['controller'],
				'sensor_id'       =>$sensor_hex,
				'status'          =>$get['status'],
				'start_date_time' =>$now
			  );
		    
			if($get['floor']=='controller')
			{
				echo "Floor parameter is empty";
				
			}
			else if($get['controller']=='sensor')
			{
				echo "Controller parameter is empty";
			}
			else if($get['sensor']=='status')
			{
				echo "Sensor parameter is empty";
			}
			else
			{
			    
				$check_floor_log      = $this->check_log_information($get['floor'],'floor');
				$check_controller_log = $this->check_log_information($get['controller'],'controller');
				$check_sensor_log     = $this->check_log_information($sensor_hex,'sensor');
				
				if(empty($check_floor_log))
				{
					echo "Floor Not Found";
				}
				else if(empty($check_controller_log))
				{
					echo "Controller Not Found";
				}
				else if(empty($check_sensor_log))
				{
					echo "Sensor Not Found";
				}
				else
				{
                    
					$statusValue = $this->check_exist_data($data);
					
					if(!empty($statusValue))
					{
					   $statusID = $statusValue[0]->status_id;
 					   $status = $statusValue[0]->status; 
 					  

					   $this->api_model->update($statusID, $get['status'], $status);
					}
					else
					{
						$info_store=$this->api_model->insert_into_log_talbe($data);
					}
					
					$info_store=$this->api_model->insert($data);
						
					if($info_store==1)
					{
						echo "<span style='color:green;'>Successfully inserted</span>";
					}
					else
						echo "<span style='color:red;'>Data insert has Failed</span>";
					
				}
			
			}
	    }
	}
	
	public function check_exist_data($data)
	{
		return $this->api_model->check_data($data);
	}
	
	public function check_log_information($value, $param)
	{
		return $this->api_model->check_log($value, $param);
	}

	public function dec2hex($dec) {

		  $hex = ($dec == 0 ? '0' : '');

		  while ($dec > 0) {
		    $hex = ($dec - floor($dec / 16) * 16) . $hex;
		    $dec = floor($dec / 16);
		  }

		  return $hex;
	}

}
