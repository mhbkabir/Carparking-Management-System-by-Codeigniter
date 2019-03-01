<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class duration_info_model extends CI_Model {


/****************************
#Add duration 
****************************/

	public function save_duration_info($duration)
	{
		$data = array(
			'duration_start'  => $duration['duration_start'],
		    'duration_end'    => $duration['duration_end'],
		    'duration_title'  => $duration['duration_title'],
		    'duration_color'  => "#".$duration['duration_color']
		    
		);
		$this->db->insert('tbl_duration_limit', $data);
	}	

/****************************
#View Sensor List
****************************/

 public function view_duration_info()
	{
	   $query  = $this->db->query('select  * from tbl_duration_limit where duration_id!=8');
	   return  $query->result();
	}	

/****************************
#Delete duration
****************************/

	public function delete_duration_info($id)
	{
		$result=$this->db->query("DELETE FROM  tbl_duration_limit WHERE duration_id = $id");
	}	
/****************************
#Edit Sensor List
****************************/
// public function edit_info($input)
// 	{
// 		if(!empty($input)){

// 			$this->db->set('duration', $input['duration']);
// 			$this->db->set('duration_color', "#".$input['duration_color']);
// 			$this->db->where('duration_id', $input['duration_id']);
// 			$result = $this->db->update('tbl_duration_limit');
// 		}
// 	}	

 public function edit_value($id){

 	$sql=$this->db->query("SELECT * FROM tbl_duration_limit WHERE duration_id=$id");
	return $sql->result();
 }

public function update_duration_info($input)
{
	if(!empty($input)){
	 		
			$this->db->set('duration_start', $input['duration_start']);
			$this->db->set('duration_end', $input['duration_end']);
			$this->db->set('duration_title', $input['duration_title']);
			$this->db->set('duration_color', "#".$input['duration_color']);
			$this->db->where('duration_id', $input['duration_id']);
			$result = $this->db->update('tbl_duration_limit');
		}
}

/*Duration default color*/

public function default_color_info(){
$sql=$this->db->query("SELECT duration_color FROM  tbl_duration_limit where duration_id=8");
	return $sql->result();
}

public function update_duration_default_color($input)
{
    $this->db->set('duration_color', "#".$input['duration_color']);
    $this->db->where('duration_id',8);
	$result = $this->db->update('tbl_duration_limit');
}

}