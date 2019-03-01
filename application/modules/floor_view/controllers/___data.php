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
   
	 // //    if(!$this->car_parking_status(5)==' '){
		    
		    $data['sensor_5'] = $this->car_parking_status(5);
		// // }
		// // else
		// //  	$data['sensor_5']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 6
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(6)==' '){
		    
		      $data['sensor_6'] = $this->car_parking_status(6);
		// // }
		// // else
		// //  	$data['sensor_6']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 7
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(7)==' '){
		    
		     $data['sensor_7'] = $this->car_parking_status(7);
		// // }
		// // else
		// //  	$data['sensor_7']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 8
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(8)==' '){
		    
		      $data['sensor_8'] = $this->car_parking_status(8);
		// // }
		// // else
		// //  	$data['sensor_8']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 9
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(9)==' '){
		    
		     $data['sensor_9'] = $this->car_parking_status(9);
		// // }
		// // else
		// //  	$data['sensor_9']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 10
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(10)==' '){
		    
		     $data['sensor_10'] = $this->car_parking_status(10);
		// // }
		// // else
		// //  	$data['sensor_10']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 11
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(11)==' '){
		    
		     $data['sensor_11'] = $this->car_parking_status(11);
		// // }
		// // else
		// //  	$data['sensor_11']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 12
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(12)==' '){
		    
		    $data['sensor_12'] = $this->car_parking_status(12);
		// // }
		// // else
		// //  	$data['sensor_12']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 13
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(13)==' '){
		    
		    $data['sensor_13'] = $this->car_parking_status(13);
		// // }
		// // else
		// //  	$data['sensor_13']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 14
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(14)==' '){
		    
		     $data['sensor_14'] = $this->car_parking_status(14);

		// // }
		// // else
		// //  	$data['sensor_14']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 15
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(15)==' '){
		    
		     $data['sensor_15'] = $this->car_parking_status(15);
		// // }
		// // else
		// //  	$data['sensor_15']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 16
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(16)==' '){
		    
		     $data['sensor_16'] = $this->car_parking_status(16);
		// // }
		// // else
		// //  	$data['sensor_16']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 17
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(17)==' '){
		    
		      $data['sensor_17'] = $this->car_parking_status(17);
		// // }
		// // else
		// //  	$data['sensor_17']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 18
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(18)==' '){
		    
		      $data['sensor_18'] = $this->car_parking_status(18);
		// // }
		// // else
		// //  	$data['sensor_18']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 19
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(19)==' '){
		    
		     $data['sensor_19'] = $this->car_parking_status(19);
		// // }
		// // else
		// //  	$data['sensor_19']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 20
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(20)==' '){
		    
		    $data['sensor_20'] = $this->car_parking_status(20);
		// // }
		// // else
		// //  	$data['sensor_20']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 21
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(21)==' '){
		    
		    $data['sensor_21'] = $this->car_parking_status(21);
		// // }
		// // else
		// //  	$data['sensor_21']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 22
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(22)==' '){
		    
		      $data['sensor_22'] = $this->car_parking_status(22);
		// // }
		// // else
		// //  	$data['sensor_22']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 23
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(23)==' '){
		    
		      $data['sensor_23'] = $this->car_parking_status(23);
		// // }
		// // else
		// //  	$data['sensor_23']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 24
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(24)==' '){
		    
	     $data['sensor_24'] = $this->car_parking_status(24);
		// // }
		// // else
		// //  	$data['sensor_24']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 25
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(25)==' '){
		    
		      $data['sensor_25'] = $this->car_parking_status(25);
		// // }
		// // else
		// //  	$data['sensor_25']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 26
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(26)==' '){
		    
		     $data['sensor_26'] = $this->car_parking_status(26);
		// // }
		// // else
		// //  	$data['sensor_26']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 27
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(27)==' '){
		    
		     $data['sensor_27'] = $this->car_parking_status(27);
		// // }
		// // else
		// //  	$data['sensor_27']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 28
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(28)==' '){
		    
		      $data['sensor_28'] = $this->car_parking_status(28);
		// // }
		// // else
		// //  	$data['sensor_28']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 29
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(29)==' '){
		    
		    $data['sensor_29'] = $this->car_parking_status(29);
		// // }
		// // else
		// //  	$data['sensor_29']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 30
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(30)==' '){
		    
	     $data['sensor_30'] = $this->car_parking_status(30);
		// // }
		// // else
		// //  	$data['sensor_30']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 31
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(31)==' '){
		    
		     $data['sensor_31'] = $this->car_parking_status(31);
		// // }
		// // else
		// //  	$data['sensor_31']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 32
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(32)==' '){
		    
		      $data['sensor_32'] = $this->car_parking_status(32);
		// // }
		// // else
		// //  	$data['sensor_32']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 33
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(10)==' '){
		    
		    $data['sensor_1'] = $this->car_parking_status(33);
		// // }
		// // else
		// //  	$data['sensor_1']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 34
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(34)==' '){
		    
		     $data['sensor_34'] = $this->car_parking_status(34);
		// // }
		// // else
		// //  	$data['sensor_34']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 35
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(35)==' '){
		    
		     $data['sensor_35'] = $this->car_parking_status(35);
		// // }
		// // else
		// //  	$data['sensor_35']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 36
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(36)==' '){
		    
		     $data['sensor_36'] = $this->car_parking_status(36);
		// // }
		// // else
		// //  	$data['sensor_36']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 37
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(37)==' '){
		    
	      $data['sensor_37'] = $this->car_parking_status(37);
		// // }
		// // else
		// //  	$data['sensor_37']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 38
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(38)==' '){
		    
		     $data['sensor_38'] = $this->car_parking_status(38);
		// // }
		// // else
		// //  	$data['sensor_38']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 39
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(39)==' '){
		    
		    $data['sensor_39'] = $this->car_parking_status(39);
		// // }
		// // else
		// //  	$data['sensor_39']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 40
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(40)==' '){
		    
		   $data['sensor_40'] = $this->car_parking_status(40);
		// // }
		// // else
		// //  	$data['sensor_40']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 41
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(41)==' '){
		    
		     $data['sensor_41'] = $this->car_parking_status(41);
		// // }
		// // else
		// //  	$data['sensor_41']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 42
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(42)==' '){
		    
		     $data['sensor_42'] = $this->car_parking_status(42);
		// // }
		// // else
		// //  	$data['sensor_42']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 43
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(43)==' '){
		    
		      $data['sensor_43'] = $this->car_parking_status(43);
		// // }
		// // else
		// //  	$data['sensor_43']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 44
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(44)==' '){
		    
		     $data['sensor_44'] = $this->car_parking_status(44);
		// // }
		// // else
		// //  	$data['sensor_44']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 45
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(45)==' '){
		    
	      $data['sensor_45'] = $this->car_parking_status(45);
		// // }
		// // else
		// //  	$data['sensor_45']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 46
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(46)==' '){
		    
		      $data['sensor_46'] = $this->car_parking_status(46);
		// // }
		// // else
		// //  	$data['sensor_46']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 47
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(47)==' '){
		    
		    $data['sensor_47'] = $this->car_parking_status(47);
		// // }
		// // else
		// //  	$data['sensor_47']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 48
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(48)==' '){
		    
		    $data['sensor_48'] = $this->car_parking_status(48);
		// // }
		// // else
		// //  	$data['sensor_48']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 49
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(49)==' '){
		    
	      $data['sensor_49'] = $this->car_parking_status(49);
		// // }
		// // else
		// //  	$data['sensor_49'] = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 50
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(50)==' '){
		    
		     $data['sensor_50'] = $this->car_parking_status(50);
		// // }
		// // else
		// //  	$data['sensor_50']  = "<div class=circle style=background:$default_color></div>";
			
			
			

  // //       /********************************
		// // SENSOR ID 51
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(51)==' '){
		    
		     $data['sensor_51'] = $this->car_parking_status(51);
		// // }
		// // else
		// //  	$data['sensor_51']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 52
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(52)==' '){
		    
		     $data['sensor_52'] = $this->car_parking_status(52);
		// // }
		// // else
		// //  	$data['sensor_52']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 53
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(53)==' '){
		    
		     $data['sensor_53'] = $this->car_parking_status(53);
		// // }
		// // else
		// //  	$data['sensor_53']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 54
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(54)==' '){
		    
		      $data['sensor_54'] = $this->car_parking_status(54);
		// // }
		// // else
		// //  	$data['sensor_54']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 55
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(55)==' '){
		    
		    $data['sensor_55'] = $this->car_parking_status(55);
		// // }
		// // else
		// //  	$data['sensor_55']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 56
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(56)==' '){
		    
		     $data['sensor_56'] = $this->car_parking_status(56);
		// // }
		// // else
		// //  	$data['sensor_56']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 57
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(10)==' '){
		    
		      $data['sensor_57'] = $this->car_parking_status(10);
		// // }
		// // else
		// //  	$data['sensor_57']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 58
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(58)==' '){
		    
		      $data['sensor_58'] = $this->car_parking_status(58);
		// // }
		// // else
		// //  	$data['sensor_58']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 59
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(59)==' '){
		    
		      $data['sensor_59'] = $this->car_parking_status(59);
		// // }
		// // else
		// //  	$data['sensor_59']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 60
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(60)==' '){
		    
		      $data['sensor_60'] = $this->car_parking_status(60);
		// // }
		// // else
		// //  	$data['sensor_60']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 61
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(61)==' '){
		    
		     $data['sensor_61'] = $this->car_parking_status(61);
		// // }
		// // else
		// //  	$data['sensor_61']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 62
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(62)==' '){
		    
		     $data['sensor_62'] = $this->car_parking_status(62);
		// // }
		// // else
		// //  	$data['sensor_62']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 63
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(63)==' '){
		    
		    $data['sensor_63'] = $this->car_parking_status(63);
		// // }
		// // else
		// //  	$data['sensor_63']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 64
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(64)==' '){
		    
		     $data['sensor_64'] = $this->car_parking_status(64);
		// // }
		// // else
		// //  	$data['sensor_64']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 65
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(65)==' '){
		    
		    $data['sensor_65'] = $this->car_parking_status(65);
		// // }
		// // else
		// //  	$data['sensor_65']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 66
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(66)==' '){
		    
		     $data['sensor_66'] = $this->car_parking_status(66);
		// // }
		// // else
		// //  	$data['sensor_66']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 67
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(67)==' '){
		    
		     $data['sensor_67'] = $this->car_parking_status(67);
		// // }
		// // else
		// //  	$data['sensor_67']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 68
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(68)==' '){
		    
		    $data['sensor_68'] = $this->car_parking_status(68);
		// // }
		// // else
		// //  	$data['sensor_68']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 69
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(69)==' '){
		    
	      $data['sensor_69'] = $this->car_parking_status(69);
		// // }
		// // else
		// //  	$data['sensor_69']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 70
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(70)==' '){
		    
		    $data['sensor_70'] = $this->car_parking_status(70);
		// // }
		// // else
		// //  	$data['sensor_70']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 71
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(71)==' '){
		    
		     $data['sensor_71'] = $this->car_parking_status(71);
		// // }
		// // else
		// //  	$data['sensor_71']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 72
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(72)==' '){
		    
		    $data['sensor_72'] = $this->car_parking_status(72);
		// // }
		// // else
		// //  	$data['sensor_72'] = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 73
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(73)==' '){
		    
		     $data['sensor_73'] = $this->car_parking_status(73);
		// // }
		// // else
		// //  	$data['sensor_73']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 74
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(74)==' '){
		    
	      $data['sensor_74'] = $this->car_parking_status(74);
		// // }
		// // else
		// //  	$data['sensor_74']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 75
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(75)==' '){
		    
		     $data['sensor_75'] = $this->car_parking_status(75);
		// // }
		// // else
		// //  	$data['sensor_75']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 76
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(76)==' '){
		    
		     $data['sensor_76'] = $this->car_parking_status(76);
		// // }
		// // else
		// //  	$data['sensor_76']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 77
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(77)==' '){
		    
		     $data['sensor_77'] = $this->car_parking_status(77);
		// // }
		// // else
		// //  	$data['sensor_77']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 78
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(78)==' '){
		    
		     $data['sensor_78'] = $this->car_parking_status(78);
		// // }
		// // else
		// //  	$data['sensor_78']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 79
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(79)==' '){
		    
		     $data['sensor_79'] = $this->car_parking_status(79);
		// // }
		// // else
		// //  	$data['sensor_79']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 80
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(80)==' '){
		    
		     $data['sensor_80'] = $this->car_parking_status(80);
		// // }
		// // else
		// //  	$data['sensor_80']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 81
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(81)==' '){
		    
		      $data['sensor_81'] = $this->car_parking_status(81);
		// // }
		// // else
		// //  	$data['sensor_81']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 82
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(82)==' '){
		    
		      $data['sensor_82'] = $this->car_parking_status(82);
		// // }
		// // else
		// //  	$data['sensor_82']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 83
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(83)==' '){
		    
		     $data['sensor_83'] = $this->car_parking_status(83);
		// // }
		// // else
		// //  	$data['sensor_83']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 84
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(84)==' '){
		    
		     $data['sensor_84'] = $this->car_parking_status(84);
		// // }
		// // else
		// //  	$data['sensor_84']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 85
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(85)==' '){
		    
		     $data['sensor_85'] = $this->car_parking_status(85);
		// // }
		// // else
		// //  	$data['sensor_85']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 86
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(86)==' '){
		    
		      $data['sensor_86'] = $this->car_parking_status(86);
		// // }
		// // else
		// //  	$data['sensor_86']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 87
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(87)==' '){
		    
		    $data['sensor_87'] = $this->car_parking_status(87);
		// // }
		// // else
		// //  	$data['sensor_87']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 88
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(88)==' '){
		    
		     $data['sensor_88'] = $this->car_parking_status(88);
		// // }
		// // else
		// //  	$data['sensor_88']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 89
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(89)==' '){
		    
		     $data['sensor_89'] = $this->car_parking_status(89);
		// // }
		// // else
		// //  	$data['sensor_89']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 90
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(90)==' '){
		    
		      $data['sensor_90'] = $this->car_parking_status(90);
		// // }
		// // else
		// //  	$data['sensor_90']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 91
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(91)==' '){
		    
		     $data['sensor_91']  = $this->car_parking_status(91);
		// // }
		// // else
		// //  	$data['sensor_91']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 92
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(92)==' '){
		    
		     $data['sensor_92'] = $this->car_parking_status(92);
		// // }
		// // else
		// //  	$data['sensor_92']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 93
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(93)==' '){
		    
		     $data['sensor_93'] = $this->car_parking_status(93);
		// // }
		// // else
		// //  	$data['sensor_93']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 94
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(94)==' '){
		    
		     $data['sensor_94'] = $this->car_parking_status(94);
		// // }
		// // else
		// //  	$data['sensor_94']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 95
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(95)==' '){
		    
		      $data['sensor_95'] = $this->car_parking_status(95);
		// // }
		// // else
		// //  	$data['sensor_95']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 96
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(96)==' '){
		    
		      $data['sensor_96'] = $this->car_parking_status(96);
		// // }
		// // else
		// //  	$data['sensor_96']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 97
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(97)==' '){
		    
		     $data['sensor_97'] = $this->car_parking_status(97);
		// // }
		// // else
		// //  	$data['sensor_97']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 98
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(98)==' '){
		    
		      $data['sensor_98'] = $this->car_parking_status(98);
		// // }
		// // else
		// //  	$data['sensor_98']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 99
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(99)==' '){
		    
		     $data['sensor_99'] = $this->car_parking_status(99);
		// // }
		// // else
		// //  	$data['sensor_99']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 100
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(100)==' '){
		    
		     $data['sensor_100'] = $this->car_parking_status(100);
		// // }
		// // else
		// //  	$data['sensor_100']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 101
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(101)==' '){
		    
		     $data['sensor_101'] = $this->car_parking_status(101);
		// // }
		// // else
		// //  	$data['sensor_101']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 102
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(102)==' '){
		    
		     $data['sensor_102'] = $this->car_parking_status(102);
		// // }
		// // else
		// //  	$data['sensor_102']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 103
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(103)==' '){
		    
		      $data['sensor_103'] = $this->car_parking_status(103);
		// // }
		// // else
		// //  	$data['sensor_103']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 104
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(104)==' '){
		    
		    $data['sensor_104'] = $this->car_parking_status(104);
		// // }
		// // else
		// //  	$data['sensor_104']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 105
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(105)==' '){
		    
		     $data['sensor_105'] = $this->car_parking_status(105);
		// // }
		// // else
		// //  	$data['sensor_105']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 106
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(106)==' '){
		    
		     $data['sensor_106'] = $this->car_parking_status(106);
		// // }
		// // else
		// //  	$data['sensor_106']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 107
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(107)==' '){
		    
		     $data['sensor_107'] = $this->car_parking_status(107);
		// // }
		// // else
		// //  	$data['sensor_107']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 108
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(108)==' '){
		    
		     $data['sensor_108'] = $this->car_parking_status(108);
		// // }
		// // else
		// //  	$data['sensor_108']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 109
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(109)==' '){
		    
		     $data['sensor_109'] = $this->car_parking_status(109);
		// // }
		// // else
		// //  	$data['sensor_109']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 110
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(110)==' '){
		    
		     $data['sensor_110'] = $this->car_parking_status(110);
		// // }
		// // else
		// //  	$data['sensor_110']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 111
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(111)==' '){
		    
		    $data['sensor_111'] = $this->car_parking_status(111);
		// // }
		// // else
		// //  	$data['sensor_111']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 112
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(112)==' '){
		    
		     $data['sensor_112'] = $this->car_parking_status(112);
		// // }
		// // else
		// //  	$data['sensor_112']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 113
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(113)==' '){
		    
		      $data['sensor_113'] = $this->car_parking_status(113);
		// // }
		// // else
		// //  	$data['sensor_113']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 114
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(114)==' '){
		    
	     $data['sensor_114'] = $this->car_parking_status(114);
		// // }
		// // else
		// //  	$data['sensor_114']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 115
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(115)==' '){
		    
		    $data['sensor_115'] = $this->car_parking_status(115);
		// // }
		// // else
		// //  	$data['sensor_115']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 116
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(116)==' '){
		    
	      $data['sensor_116'] = $this->car_parking_status(116);
		// // }
		// // else
		// //  	$data['sensor_116']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 117
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(117)==' '){
		    
		    $data['sensor_117'] = $this->car_parking_status(117);
		// // }
		// // else
		// //  	$data['sensor_117']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 118
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(118)==' '){
		    
		    $data['sensor_118'] = $this->car_parking_status(118);
		// // }
		// // else
		// //  	$data['sensor_118']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 119
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(119)==' '){
		    
		     $data['sensor_119'] = $this->car_parking_status(119);
		// // }
		// // else
		// //  	$data['sensor_119']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 120
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(120)==' '){
		    
		    $data['sensor_120'] = $this->car_parking_status(120);
		// // }
		// // else
		// //  	$data['sensor_120']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 121
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(121)==' '){
		    
		      $data['sensor_121'] = $this->car_parking_status(121);
		// // }
		// // else
		// //  	$data['sensor_121']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 122
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(122)==' '){
		    
		     $data['sensor_122'] = $this->car_parking_status(122);
		// // }
		// // else
		// //  	$data['sensor_122']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 123
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(123)==' '){
		    
	     $data['sensor_123'] = $this->car_parking_status(123);
		// // }
		// // else
		// //  	$data['sensor_123']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 124
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(124)==' '){
		    
		     $data['sensor_124'] = $this->car_parking_status(124);
		// // }
		// // else
		// //  	$data['sensor_124']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 125
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(125)==' '){
		    
		     $data['sensor_125'] = $this->car_parking_status(125);
		// // }
		// // else
		// //  	$data['sensor_125']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 126
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(126)==' '){
		    
		      $data['sensor_126'] = $this->car_parking_status(126);
		// // }
		// // else
		// //  	$data['sensor_126']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 127
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(127)==' '){
		    
		     $data['sensor_127'] = $this->car_parking_status(127);
		// // }
		// // else
		// //  	$data['sensor_127']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 128
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(128)==' '){
		    
		    $data['sensor_128'] = $this->car_parking_status(128);
		// // }
		// // else
		// //  	$data['sensor_128']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 129
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(129)==' '){
		    
		     $data['sensor_129'] = $this->car_parking_status(129);
		// // }
		// // else
		// //  	$data['sensor_129']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 130
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(130)==' '){
		    
		     $data['sensor_130'] = $this->car_parking_status(130);
		// // }
		// // else
		// //  	$data['sensor_130']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 131
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(131)==' '){
		    
		     $data['sensor_131'] = $this->car_parking_status(131);
		// // }
		// // else
		// //  	$data['sensor_131']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 132
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(132)==' '){
		    
		     $data['sensor_132'] = $this->car_parking_status(132);
		// // }
		// // else
		// //  	$data['sensor_132']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 133
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(133)==' '){
		    
		     $data['sensor_133'] = $this->car_parking_status(133);
		// // }
		// // else
		// //  	$data['sensor_133']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 134
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(134)==' '){
		    
		     $data['sensor_134'] = $this->car_parking_status(134);
		// // }
		// // else
		// //  	$data['sensor_134']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 135
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(135)==' '){
		    
		     $data['sensor_135'] = $this->car_parking_status(135);
		// // }
		// // else
		// //  	$data['sensor_135']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 136
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(136)==' '){
		    
		     $data['sensor_136'] = $this->car_parking_status(136);
		// // }
		// // else
		// //  	$data['sensor_136']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 137
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(137)==' '){
		    
		     $data['sensor_137'] = $this->car_parking_status(137);
		// // }
		// // else
		// //  	$data['sensor_137']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 138
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(138)==' '){
		    
		      $data['sensor_138'] = $this->car_parking_status(138);
		// // }
		// // else
		// //  	$data['sensor_138']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 139
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(139)==' '){
		    
		     $data['sensor_139'] = $this->car_parking_status(139);
		// // }
		// // else
		// //  	$data['sensor_139']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 140
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(140)==' '){
		    
		      $data['sensor_140'] = $this->car_parking_status(140);
		// // }
		// // else
		// //  	$data['sensor_140']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 141
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(141)==' '){
		    
		     $data['sensor_141'] = $this->car_parking_status(141);
		// // }
		// // else
		// //  	$data['sensor_141']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 142
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(142)==' '){
		    
		    $data['sensor_142'] = $this->car_parking_status(142);
		// // }
		// // else
		// //  	$data['sensor_142']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 143
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(143)==' '){
		    
		     $data['sensor_143'] = $this->car_parking_status(143);
		// // }
		// // else
		// //  	$data['sensor_143']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 144
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(144)==' '){
		    
		      $data['sensor_144'] = $this->car_parking_status(144);
		// // }
		// // else
		// //  	$data['sensor_144']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 145
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(145)==' '){
		    
		      $data['sensor_145'] = $this->car_parking_status(145);
		// // }
		// // else
		// //  	$data['sensor_145']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 146
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(146)==' '){
		    
		     $data['sensor_146'] = $this->car_parking_status(146);
		// // }
		// // else
		// //  	$data['sensor_146']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 147
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(147)==' '){
		    
		     $data['sensor_147'] = $this->car_parking_status(147);
		// // }
		// // else
		// //  	$data['sensor_147']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 148
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(148)==' '){
		    
		     $data['sensor_148'] = $this->car_parking_status(148);
		// // }
		// // else
		// //  	$data['sensor_148']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 149
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(149)==' '){
		    
		     $data['sensor_149'] = $this->car_parking_status(149);
		// // }
		// // else
		// //  	$data['sensor_149']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 150
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(150)==' '){
		    
		    $data['sensor_150'] = $this->car_parking_status(150);
		// // }
		// // else
		// //  	$data['sensor_150']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 151
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(151)==' '){
		    
		     $data['sensor_151'] = $this->car_parking_status(151);
		// // }
		// // else
		// //  	$data['sensor_151']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 152
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(152)==' '){
		    
		    $data['sensor_152'] = $this->car_parking_status(152);
		// // }
		// // else
		// //  	$data['sensor_152']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 153
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(153)==' '){
		    
		      $data['sensor_153'] = $this->car_parking_status(153);
		// // }
		// // else
		// //  	$data['sensor_153']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 154
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(154)==' '){
		    
		    $data['sensor_154'] = $this->car_parking_status(154);
		// // }
		// // else
		// //  	$data['sensor_154']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 155
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(155)==' '){
		    
		      $data['sensor_155'] = $this->car_parking_status(155);
		// // }
		// // else
		// //  	$data['sensor_155']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 156
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(156)==' '){
		    
		    $data['sensor_156'] = $this->car_parking_status(156);
		// // }
		// // else
		// //  	$data['sensor_156']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 157
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(157)==' '){
		    
		      $data['sensor_157'] = $this->car_parking_status(157);
		// // }
		// // else
		// //  	$data['sensor_157']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 158
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(158)==' '){
		    
		     $data['sensor_158'] = $this->car_parking_status(158);
		// // }
		// // else
		// //  	$data['sensor_158']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 159
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(159)==' '){
		    
		     $data['sensor_159'] = $this->car_parking_status(159);
		// // }
		// // else
		// //  	$data['sensor_159']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 160
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(160)==' '){
		    
	      $data['sensor_160'] = $this->car_parking_status(160);
		// // }
		// // else
		// //  	$data['sensor_160']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 161
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(161)==' '){
		    
		    $data['sensor_161'] = $this->car_parking_status(161);
		// // }
		// // else
		// //  	$data['sensor_161']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 162
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(162)==' '){
		    
		     $data['sensor_162'] = $this->car_parking_status(162);
		// // }
		// // else
		// //  	$data['sensor_162']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 163
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(163)==' '){
		    
		     $data['sensor_163'] = $this->car_parking_status(163);
		// // }
		// // else
		// //  	$data['sensor_163']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 164
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(164)==' '){
		    
		      $data['sensor_164'] = $this->car_parking_status(164);
		// // }
		// // else
		// //  	$data['sensor_164']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 165
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(165)==' '){
		    
		    $data['sensor_165'] = $this->car_parking_status(165);
		// // }
		// // else
		// //  	$data['sensor_165']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 166
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(166)==' '){
		    
		      $data['sensor_166'] = $this->car_parking_status(166);
		// // }
		// // else
		// //  	$data['sensor_166']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 167
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(167)==' '){
		    
		     $data['sensor_167'] = $this->car_parking_status(167);
		// // }
		// // else
		// //  	$data['sensor_167']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 168
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(168)==' '){
		    
		     $data['sensor_168'] = $this->car_parking_status(168);
		// // }
		// // else
		// //  	$data['sensor_168']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 169
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(169)==' '){
		    
		    $data['sensor_169'] = $this->car_parking_status(169);
		// // }
		// // else
		// //  	$data['sensor_169']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 170
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(170)==' '){
		    
		      $data['sensor_170'] = $this->car_parking_status(170);
		// // }
		// // else
		// //  	$data['sensor_170']  = "<div class=circle style=background:$default_color></div>";



  // //       /********************************
		// // SENSOR ID 171
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(171)==' '){
		    
		     $data['sensor_171'] = $this->car_parking_status(171);
		// // }
		// // else
		// //  	$data['sensor_171']  = "<div class=circle style=background:$default_color></div>";


  // //       /********************************
		// // SENSOR ID 172
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(172)==' '){
		    
		     $data['sensor_172'] = $this->car_parking_status(172);
		// // }
		// // else
		// //  	$data['sensor_172']  = "<div class=circle style=background:$default_color></div>";

		// // /********************************
		// // SENSOR ID 173
		// // ********************************/
   
	 // //    if(!$this->car_parking_status(173)==' '){
		    
		     $data['sensor_173'] = $this->car_parking_status(173);
		// // }
		// // else
		// //  	$data['sensor_173']  = "<div class=circle style=background:$default_color></div>";



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


 	//   	$timestamp1          = strtotime($single_status_time_last);

 		//   	$timestamp2          = strtotime($single_status_time_first);

			// $last_time  = date('H:i', $timestamp1); // HH:ss

			// $first_time = date('H:i', $timestamp2); // HH:ss

    $data = "";
    
    $default_color='red'; // Default Color

   if(empty($first_status_time)){

   		$data  = "<div class=circle style=background:$default_color></div>";
   }

   else{
    
     $duration = strtotime($this->get_time_difference($single_status_time_first, $single_status_time_last));
   
     foreach ( $duration_limit as $duration_limit_value) {
     
	    $limit_start  =	strtotime($duration_limit_value->duration_start);
	    $limit_end    =	strtotime($duration_limit_value->duration_end);
        
      	$color = $duration_limit_value->duration_color;
        
	      if(($limit_start <= $duration) && ($limit_end >= $duration)) {
	      
	     	$data  = "<div class=circle style=background:$color></div>";
	
	      }
	      else
	      {
	      	if($duration <= strtotime('0.01'))
	      	 $data  = "<div class=circle style=background:#ddd></div>";
	      }
	       
     }
}
 
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
 	$final_our = $new_hours+$hours;
 }
 else {

 	 $final_our=$hours;
 }


 // return $final_our;

   return	$data=($final_our.":".$minutes);
}

}
