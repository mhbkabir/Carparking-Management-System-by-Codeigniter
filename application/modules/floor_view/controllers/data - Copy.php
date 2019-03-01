<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MX_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('floor_view/floor_view_status_model');
        
      }

	public function floor_info()
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}


		/********************************
		SENSOR ID SET HERE
		********************************/


		/********************************
		SENSOR ID 1
		********************************/
   
		$data['sensor_1'] = $this->car_parking_status(1);
	
        /********************************
		    SENSOR ID 2
		********************************/
   
		$data['sensor_2'] = $this->car_parking_status(2);
		
        /********************************
			SENSOR ID 3
		********************************/
	    $data['sensor_3'] = $this->car_parking_status(3);
		
       /********************************
		 	SENSOR ID 4
	    ********************************/
   	    $data['sensor_4'] = $this->car_parking_status(4);

   	    /********************************
		    SENSOR ID 5
		********************************/
		$data['sensor_5'] = $this->car_parking_status(5);

		/********************************
			SENSOR ID 6
		********************************/
		$data['sensor_6'] = $this->car_parking_status(6);


        /********************************
		SENSOR ID 7
		********************************/
		
		$data['sensor_7'] = $this->car_parking_status(7);
	
        /********************************
		 SENSOR ID 8
		********************************/
      
		$data['sensor_8'] = $this->car_parking_status(8);
		 
         /********************************
		 SENSOR ID 9
		 ********************************/
		
		$data['sensor_9'] = $this->car_parking_status(9);
	
   
		





		/********************************
		SENSOR ID SET HERE END
		********************************/

		$this->load->view('header');
		$this->load->view('view_floor',$data);
		$this->load->view('footer');
	}
    

  public function car_parking_status($id)
  {
  
    $sensor_id          = $id; 
    
    $duration_limit     = $this->floor_view_status_model->duration_limit_value(); // tbl_duration_limit 

    $last_status_time   = $this->floor_view_status_model->last_status_time($sensor_id); // tbl_status table time

   	$first_status_time  = $this->floor_view_status_model->first_status_time($sensor_id); // tbl_log table time

 	$single_status_time_last  = $last_status_time[0]->start_date_time;

  	$single_status_time_first = $first_status_time[0]->start_date_time;

    $data  = " ";

    $data_count=array();
    $c="";
   	$i=1+$i;
   	if(count($first_status_time)>0){
    
    $duration = strtotime($this->get_time_difference($single_status_time_first, $single_status_time_last)); 
   
     foreach ($duration_limit as $duration_limit_value) {
     
	    $limit_start  =	strtotime($duration_limit_value->duration_start);
	    $limit_end    =	strtotime($duration_limit_value->duration_end);
        
      	$color = $duration_limit_value->duration_color;
        
	    if(($limit_start <= $duration) && ($limit_end >= $duration)) {
	    	$data  = "<div class=circle style=background:$color></div>";

	    	$c=$color;

	    //	$color_array=explode(" ", $c);
	  // echo $c;
	
	     }
	       else
	      {
	       	if($duration <= strtotime('0.01')) { 
	       		$data  = "<div class=circle style=background:#ccc></div>";
	       	}
	       	
	      }
	      $i++;
     }

 
}

echo $c;

$dd=$c;

echo($c);

//print_r($color_array);

//$vals = array_count_values($data_count);

//echo count($vals);

    return $data;


  }


public function get_time_difference($first_time, $last_time){

	// Declare and define two dates 
$date1 = strtotime($first_time);  
$date2 = strtotime($last_time);  
$final_our="";

// Formulate the Difference between two dates 
$diff = abs($date2 - $date1);  
  

// To get the year divide the resultant date into 
// total seconds in a year (365*60*60*24) 
$years = floor($diff / (365*60*60*24));  
  
  
// To get the month, subtract it with years and 
// divide the resultant date into 
// total seconds in a month (30*60*60*24) 
$months = floor(($diff - $years * 365*60*60*24) 
                               / (30*60*60*24));  
  
  
// To get the day, subtract it with years and  
// months and divide the resultant date into 
// total seconds in a days (60*60*24) 
$days = floor(($diff - $years * 365*60*60*24 -  
             $months*30*60*60*24)/ (60*60*24)); 
  
  
// To get the hour, subtract it with years,  
// months & seconds and divide the resultant 
// date into total seconds in a hours (60*60) 
$hours = floor(($diff - $years * 365*60*60*24  
       - $months*30*60*60*24 - $days*60*60*24) 
                                   / (60*60));  
  
  
// To get the minutes, subtract it with years, 
// months, seconds and hours and divide the  
// resultant date into total seconds i.e. 60 
$minutes = floor(($diff - $years * 365*60*60*24  
         - $months*30*60*60*24 - $days*60*60*24  
                          - $hours*60*60)/ 60);  
 			 
	//return	 $data=($days." days ".$hours. " hours ". $minutes. " minutes");

 if($days>0){

 	$new_hours = $days*24;
 	$final_hour = $new_hours+$hours;
 }
 else {

 	 $final_hour=$hours;
 }


 // return $final_our;

   return	$data=($final_hour.":".$minutes);
}

}
