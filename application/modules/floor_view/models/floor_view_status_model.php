<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Floor_view_status_model extends CI_Model {

public function duration_limit_value(){
	$query = $this->db->query("SELECT duration_start, duration_end, duration_color FROM tbl_duration_limit");
	return $query->result();
}


  public function last_status_time($input)
  {
  	
    $sensor_id = $input['sensor_id'];
    $floor_id  = $input['floor_id'];

  	$query = $this->db->query("SELECT start_date_time FROM tbl_status WHERE sensor_id=$sensor_id AND floor_id=$floor_id AND status=1 ORDER by status_id DESC limit 1");
	   return $query->result();

  }


  public function first_status_time($input)
  {

    $sensor_id = $input['sensor_id'];
    $floor_id  = $input['floor_id'];

  	$query = $this->db->query("SELECT start_date_time FROM tbl_log WHERE sensor_id=$sensor_id AND floor_id=$floor_id AND status=1  ORDER by status_id DESC limit 1");
	   return $query->result();
  }

   //*Default color for no car*

  public function duration_default_color(){
    $query = $this->db->query("SELECT duration_color FROM tbl_duration_limit where duration_id=8");
    return $query->result();
  }

  public function duration_title($input){
  $query = $this->db->query("SELECT duration_title FROM tbl_duration_limit WHERE duration_color='$input' ORDER BY duration_id DESC");
  return $query->result();


  }
   
   public function default_color_info(){
    $sql=$this->db->query("SELECT duration_color FROM  tbl_duration_limit where duration_id=8");
    return $sql->result();
}


}