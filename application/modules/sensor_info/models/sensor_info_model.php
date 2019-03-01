<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sensor_info_model extends CI_Model {

/****************************
#Add Sensor name
****************************/

	public function save_sensor_info($sensor)
	{
		$data = array(
			'sensorID'      => $sensor['set_sensor_id'],
		    'sensor_name'   => $sensor['sensor_name'],
		    'floor_id'      => $sensor['floor_id'],
		    'controller_id' => $sensor['controller_id']	   
		);
		$this->db->insert('tbl_sensor', $data);
	}	

/****************************
#View Sensor List
****************************/

 public function view_sensor_list($sensor)
	{
	   $query  = $this->db->query('select c.controllerID, s.floor_id , s.sensor_id, c.controller_name, f.floor_name, s.sensor_name,s.sensorID from tbl_controller as c, tbl_floor as f, tbl_sensor as s where (s.floor_id=f.floorID) AND (s.floor_id=c.floor_id) AND (s.controller_id=c.controllerID) ORDER BY controllerID,s.sensorID ASC');
	   return  $query->result();
	}	

/****************************
#Delete Sensor List
****************************/

	public function delete_info($id)
	{
		$result=$this->db->query("DELETE FROM  tbl_sensor WHERE sensor_id = $id");
	}	
/****************************
#Edit Sensor List
****************************/
public function edit_info($input)
	{
		if(!empty($input)){

		$this->db->set('sensor_name', $input['sname']);
		$this->db->set('sensorID', $input['sensorID']);
		$this->db->set('controller_id', $input['controllerid']);
		$this->db->set('floor_id', $input['floor_id']);

		$this->db->where('sensor_id', $input['sid']);
		$result = $this->db->update('tbl_sensor');
	}
	
	}	
 public function dropdown_floor_list(){

  	$query  = $this->db->query('SELECT * FROM tbl_floor');
	return  $query->result();
  }
 public function dropdown_controller_list(){

  	$query  = $this->db->query('SELECT * FROM tbl_controller');
	return  $query->result();
  }

/*Ajax action*/

    public function controller_info_view($fid){
    	
	$query  = $this->db->query("SELECT * FROM  tbl_controller WHERE floor_id=$fid");
	return  $query->result();

    }



}