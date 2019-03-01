<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_info_model extends CI_Model {

/****************************
#Controller Info Add
****************************/

public function save_controller_info($controller)
{

	$data = array(
			'floor_id'        => $controller['floor_id'],	
		    'controller_name' => $controller['controllername'],	
		    'controllerID'    => $controller['controllerID']	
		      
		);
		$this->db->insert('tbl_controller', $data);
}

/****************************
#View Controller List
****************************/

 public function view_controller_list()
	{
	   $query  = $this->db->query("select c.controller_id, c.controller_name, c.controllerID, c.floor_id, 
	   f.floor_name from tbl_controller as c, tbl_floor as f
where c.floor_id=f.floorID");
	   return  $query->result();
	}	
	

	/****************************
#Edit Controller List
****************************/
public function edit_info($input)
	{

		if(!empty($input['cname']) && !empty($input['controllerID'])  && !empty($input['floor_id'])  && !empty($input['cid'])){
		$this->db->set('controller_name', $input['cname']);
		$this->db->set('controllerID', $input['controllerID']);
		
		$this->db->set('floor_id', $input['floor_id']);
		$this->db->where('controller_id', $input['cid']);
		$result = $this->db->update('tbl_controller');
	}
	
	}	

	public function delete_controller_info($id){

		$result=$this->db->query("DELETE FROM  tbl_controller WHERE controller_id = $id");
	}

  public function dropdown_floor_list(){

  	$query  = $this->db->query('SELECT * FROM tbl_floor');
	return  $query->result();
  }

    public function sensor_table_info($fid){
    	$query  = $this->db->query("SELECT * FROM tbl_sensor WHERE floor_id=$fid");
	    return  $query->result();
    }

    public function delete_sensor_info($id)
	{
		$result=$this->db->query("DELETE FROM  tbl_sensor WHERE floor_id = $id");
	}	


}
