<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {

	public function insert($data)
	{
		
		$data=$this->db->insert('tbl_status', $data);
		if($data)
			return 1;
	}
	
	public function insert_into_log_talbe($data)
	{
		$data=$this->db->insert('tbl_log', $data);
	}
	
	public function update($data, $status, $exist_status)
	{
		$now = date('Y-m-d H:i:s');
		$this->db->set('status', $status);
		if($exist_status==0)
		$this->db->set('start_date_time', $now);
		
		$this->db->where('status_id', $data);
		$data=$this->db->update('tbl_log');
	}
	
	public function check_data($data)
	{
		$floor      = $data['floor_id'];
		$controller = $data['controller_id'];
		$sensor     = $data['sensor_id'];
		//$date       = date('Y-m-d');
		
		$data=$this->db->query("SELECT status_id,status 
		                           FROM tbl_log 
                                       WHERE floor_id=$floor AND controller_id=$controller AND sensor_id=$sensor");

		return $data->result();
	}
	
	//  AND date(start_date_time)='$date'
	public function check_log($value,$param)
	{
		if($param=='floor')
		{
			$data=$this->db->query("SELECT floor_name FROM tbl_floor WHERE floorID=$value");
		}
		else if($param=='controller')
		{
			$data=$this->db->query("SELECT controller_name FROM tbl_controller WHERE controllerID=$value");
		}
		else if($param=='sensor')
		{
			$data=$this->db->query("SELECT sensor_name FROM tbl_sensor WHERE sensorID=$value");
		}
		
		return $data->result();
	}
	
}
