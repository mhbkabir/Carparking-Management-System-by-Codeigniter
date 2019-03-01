<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

/****************************
#Log information view
****************************/

	public function log_information($input)
	{

		if(count($input)>0)
		{
          $sid=$input['sensor_id'] ;
          $fid=$input['floor_id'] ;
          $cid=$input['controller_id'] ;


      		$data=$this->db->query("SELECT f.floor_name,c.controller_name,se.sensor_name,tl.status from tbl_floor as f, tbl_log as tl,tbl_controller as c, tbl_sensor as se WHERE (f.floorID=tl.floor_id) AND (tl.controller_id=c.controllerID) AND (c.floor_id=tl.floor_id) AND (tl.sensor_id=se.sensorID) AND (tl.floor_id=se.floor_id) AND (tl.controller_id=se.controller_id) AND tl.sensor_id=$sid AND  tl.floor_id =$fid AND tl.controller_id=$cid  ORDER BY tl.status_id DESC");

		}
		else

			
	$data=$this->db->query("SELECT f.floor_name,c.controller_name,se.sensor_name,tl.status from tbl_floor as f, tbl_log as tl,tbl_controller as c, tbl_sensor as se WHERE (f.floorID=tl.floor_id) AND (tl.controller_id=c.controllerID) AND (c.floor_id=tl.floor_id) AND (tl.sensor_id=se.sensorID) AND (tl.floor_id=se.floor_id) AND (tl.controller_id=se.controller_id) ORDER BY c.controller_name,se.sensorID ASC");
	
		return $data->result();
	}
	
/****************************
#Status_info information view
****************************/
	
	public function status_info($input)
	{


		if(count($input)>0)   //This section for serach
		{
          $sid=$input['sensor_id'] ;
          $fid=$input['floor_id'] ;
          $cid=$input['controller_id'] ;

	$data=$this->db->query("SELECT f.floor_name,c.controller_name,se.sensor_name,st.status from tbl_floor as f, tbl_status as st,tbl_controller as c, tbl_sensor as se WHERE (f.floorID=st.floor_id) AND (st.controller_id=c.controllerID) AND (c.floor_id=st.floor_id) AND (st.sensor_id=se.sensorID) AND (st.floor_id=se.floor_id) AND st.sensor_id=$sid AND  st.floor_id =$fid AND st.controller_id=$cid  ORDER BY st.status_id DESC");


		}
		else
		{
		$data=$this->db->query("SELECT f.floor_name,c.controller_name,se.sensor_name,st.status from tbl_floor as f,  tbl_status as st,tbl_controller as c, tbl_sensor as se WHERE (f.floorID=st.floor_id) AND (st.controller_id=c.controllerID) AND (c.floor_id=st.floor_id) AND (st.sensor_id=se.sensorID) AND (st.floor_id=se.floor_id)  ORDER BY st.status_id DESC");
		
	}
	return $data->result();
}
/****************************
#Device information view
****************************/
	
	public function device_info()
	{
		$data=$this->db->query('SELECT se.sensor_name, c.controller_name,f.floor_name 
		                           FROM tbl_sensor as se, tbl_controller as c, tbl_floor as f
                                       WHERE se.controller_id=c.controllerID  AND se.floor_id=f.floorID');
		
		return $data->result();
	}
	
	

	public function dropdown_sensor_list(){

  	$query  = $this->db->query('SELECT * FROM tbl_sensor');
	return  $query->result();
  		}

	public function dropdown_floor_list(){

  	$query  = $this->db->query('SELECT * FROM tbl_floor');
	return  $query->result();
  		}
 	public function dropdown_controller_list(){

  	$query  = $this->db->query('SELECT * FROM tbl_controller');
	return  $query->result();
  	}

/*Ajax action for controller list under floor*/
    public function controller_info_view($fid){
    	
	$query  = $this->db->query("SELECT * FROM  tbl_controller WHERE floor_id=$fid");
	return  $query->result();

    }

    public function sensor_info_view($fid,$cid){
    	$query  = $this->db->query("SELECT * FROM tbl_sensor WHERE floor_id=$fid AND controller_id=$cid");
	return  $query->result();

    }

/*Bredcum*/
    public function single_floor_name($fid){
    	$query  = $this->db->query("SELECT 	floor_name FROM  tbl_floor WHERE floorID=$fid");
		return  $query->result();
    }
    public function single_controller_name($fid,$cid){
    	$query  = $this->db->query("SELECT 	controller_name FROM  tbl_controller WHERE floor_id=$fid AND controllerID=$cid");
		return  $query->result();
    }
    public function single_sensor_name($fid,$cid,$sid){
    	$query  = $this->db->query("SELECT 	sensor_name	 FROM   tbl_sensor WHERE floor_id=$fid AND controller_id=$cid AND sensorID=$sid");
		return  $query->result();
    }

   /*Device information  Query*/

   public function device_floor_list(){
   		$query  = $this->db->query("SELECT * FROM  tbl_floor ORDER BY floorID ASC");
	return  $query->result();

   }
	public function show_controller($id){

			$query  = $this->db->query("SELECT * FROM tbl_controller WHERE floor_id=$id");
		  return  $query->result();
	}

	public function show_sensor($fid,$cid){

		$query  = $this->db->query("SELECT * FROM tbl_sensor WHERE floor_id=$fid AND controller_id=$cid");
	  return  $query->result();
}



}
