<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Floor_info_model extends CI_Model {

/****************************
#Add Floor name
****************************/

	public function save_floor_info($floor, $floorid)
	{
		$data = array(
		    'floor_name' => $floor,
		    'floorID' => $floorid		    
		);
		$this->db->insert('tbl_floor', $data);
	}	

/****************************
#View Floor List
****************************/

 public function view_floor_list($floor)
	{
	   $query  = $this->db->query('SELECT * FROM tbl_floor ORDER BY floor_id DESC');
	   return  $query->result();
	}	

/****************************
#Delete Floor List
****************************/

	public function delete_floor_info($id)
	{
		$result=$this->db->query("DELETE FROM  tbl_floor WHERE floorID = $id");
	}	

	public function delete_controller_info($id)
	{
		$result=$this->db->query("DELETE FROM  tbl_controller WHERE floor_id = $id");
	}	

	public function delete_sensor_info($id)
	{
		$result=$this->db->query("DELETE FROM  tbl_sensor WHERE floor_id = $id");
	}	

	public function delete_log_info($id)
	{
		$result=$this->db->query("DELETE FROM  tbl_log WHERE floor_id = $id");
	}

	public function delete_status_info($id)
	{
		$result=$this->db->query("DELETE FROM  tbl_status WHERE floor_id = $id");
	}
	


	
/****************************
#Edit Floor List
****************************/
public function edit_info($input)
	{
		if(!empty($input['fname']) && !empty($input['floorID'])){
		$this->db->set('floor_name', $input['fname']);
		$this->db->set('floorID', $input['floorID']);
		$this->db->where('floor_id', $input['fid']);
		$result = $this->db->update('tbl_floor');
	}
	
	}	


//////////////////////////// ********* Delete Process Start *********/////////////////////////

	//Check exist information

	public function status_table_info($fid){
        
        $query  = $this->db->query("SELECT * FROM tbl_status WHERE floor_id=$fid");
	    return  $query->result();
	}

   public function controller_table_info($fid){
   		$query  = $this->db->query("SELECT * FROM tbl_controller WHERE floor_id=$fid");
	    return  $query->result();
   }
    
    public function sensor_table_info($fid){
    	$query  = $this->db->query("SELECT * FROM tbl_sensor WHERE floor_id=$fid");
	    return  $query->result();
    }

}