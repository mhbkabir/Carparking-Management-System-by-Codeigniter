<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MX_Controller {
	public static $instance;
	
	public function __construct(){

        parent::__construct();
        self::$instance || self::$instance =& $this;
        $this->load->model('floor_view/floor_view_status_model');
        
      }

	public function floor_info()
	{
		if($this->session->userdata('loggedIn')==FALSE)
		{
			redirect('admin/login');	
		}


		$floor_id = 1;

       	$temp=array();
		/********************************
		SENSOR ID SET HERE
		********************************/


		/********************************
			SENSOR ID 1
		********************************/
   		$color1 = $this->car_parking_status(1, $floor_id);

		$temp[] = $color1;

		$data['sensor_1'] = "<div class=circle style=background:$color1></div>";

        /********************************
		    SENSOR ID 2
		********************************/
   
   		$color2 = $this->car_parking_status(2, $floor_id);

		$temp[] = $color2;

		$data['sensor_2'] = "<div class=circle style=background:$color2></div>";

        /********************************
			SENSOR ID 3
		********************************/

		$color3 = $this->car_parking_status(3, $floor_id);

		$temp[] = $color3;

		$data['sensor_3'] = "<div class=circle style=background:$color3></div>";

		/********************************
			SENSOR ID 4
		********************************/

		$color4 = $this->car_parking_status(4, $floor_id);

		$temp[] = $color4;

		$data['sensor_4'] = "<div class=circle style=background:$color4></div>";
		
		/********************************
			SENSOR ID 5
		********************************/

		$color5 = $this->car_parking_status(5, $floor_id);

		$temp[] = $color5;

		$data['sensor_5'] = "<div class=circle style=background:$color5></div>";

		/********************************
			SENSOR ID 6
		********************************/

		$color6 = $this->car_parking_status(6, $floor_id);

		$temp[] = $color6;

		$data['sensor_6'] = "<div class=circle style=background:$color6></div>";

		/********************************
			SENSOR ID 7
		********************************/

		$color7 = $this->car_parking_status(7, $floor_id);

		$temp[] = $color7;

		$data['sensor_7'] = "<div class=circle style=background:$color7></div>";

		/********************************
			SENSOR ID 8
		********************************/

		$color8 = $this->car_parking_status(8, $floor_id);

		$temp[] = $color8;

		$data['sensor_8'] = "<div class=circle style=background:$color8></div>";

        /********************************
			SENSOR ID 9
		********************************/

		$color9 = $this->car_parking_status(9, $floor_id);

		$temp[] = $color9;

		$data['sensor_9'] = "<div class=circle style=background:$color9></div>";

		/********************************
			SENSOR ID 10
		********************************/

		$color10 = $this->car_parking_status(10, $floor_id);

		$temp[]  = $color10;

		$data['sensor_10'] = "<div class=circle style=background:$color10></div>";

		/********************************
			SENSOR ID 11
		********************************/

		$color11 = $this->car_parking_status(11, $floor_id);

		$temp[]  = $color11;

		$data['sensor_11'] = "<div class=circle style=background:$color11></div>";

		/********************************
			SENSOR ID 12
		********************************/

		$color12 = $this->car_parking_status(12, $floor_id);

		$temp[]  = $color12;

		$data['sensor_12'] = "<div class=circle style=background:$color12></div>";

		/********************************
			SENSOR ID 13
		********************************/

		$color13 = $this->car_parking_status(13, $floor_id);

		$temp[]  = $color13;

		$data['sensor_13'] = "<div class=circle style=background:$color13></div>";

		/********************************
			SENSOR ID 14
		********************************/

		$color14 = $this->car_parking_status(14, $floor_id);

		$temp[]  = $color14;

		$data['sensor_14'] = "<div class=circle style=background:$color14></div>";

		/********************************
			SENSOR ID 15
		********************************/

		$color15 = $this->car_parking_status(15, $floor_id);

		$temp[]  = $color15;

		$data['sensor_15'] = "<div class=circle style=background:$color15></div>";

		/********************************
			SENSOR ID 16
		********************************/

		$color16 = $this->car_parking_status(16, $floor_id);

		$temp[]  = $color16;

		$data['sensor_16'] = "<div class=circle style=background:$color16></div>";

		/********************************
			SENSOR ID 17
		********************************/

		$color17 = $this->car_parking_status(17, $floor_id);

		$temp[]  = $color17;

		$data['sensor_17'] = "<div class=circle style=background:$color17></div>";

		/********************************
			SENSOR ID 18
		********************************/

		$color18 = $this->car_parking_status(18, $floor_id);

		$temp[]  = $color18;

		$data['sensor_18'] = "<div class=circle style=background:$color18></div>";

		/********************************
			SENSOR ID 19
		********************************/

		$color19 = $this->car_parking_status(19, $floor_id);

		$temp[]  = $color19;

		$data['sensor_19'] = "<div class=circle style=background:$color19></div>";

		/********************************
			SENSOR ID 20
		********************************/

		$color20 = $this->car_parking_status(20, $floor_id);

		$temp[]  = $color20;

		$data['sensor_20'] = "<div class=circle style=background:$color20></div>";

		/********************************
			SENSOR ID 21
		********************************/

		$color21 = $this->car_parking_status(21, $floor_id);

		$temp[]  = $color21;

		$data['sensor_21'] = "<div class=circle style=background:$color21></div>";

		/********************************
			SENSOR ID 22
		********************************/

		$color22 = $this->car_parking_status(22, $floor_id);

		$temp[]  = $color22;

		$data['sensor_22'] = "<div class=circle style=background:$color22></div>";

		/********************************
			SENSOR ID 23
		********************************/

		$color23 = $this->car_parking_status(23, $floor_id);

		$temp[]  = $color23;

		$data['sensor_23'] = "<div class=circle style=background:$color23></div>";

		/********************************
			SENSOR ID 24
		********************************/

		$color24 = $this->car_parking_status(24, $floor_id);

		$temp[]  = $color24;

		$data['sensor_24'] = "<div class=circle style=background:$color24></div>";

		/********************************
			SENSOR ID 25
		********************************/

		$color25 = $this->car_parking_status(25, $floor_id);

		$temp[] = $color25;

		$data['sensor_25'] = "<div class=circle style=background:$color25></div>";

		/********************************
			SENSOR ID 26
		********************************/

		$color26 = $this->car_parking_status(26, $floor_id);

		$temp[]  = $color26;

		$data['sensor_26'] = "<div class=circle style=background:$color26></div>";

		/********************************
			SENSOR ID 27
		********************************/

		$color27 = $this->car_parking_status(27, $floor_id);

		$temp[] = $color27;

		$data['sensor_27'] = "<div class=circle style=background:$color27></div>";

		/********************************
			SENSOR ID 28
		********************************/

		$color28 = $this->car_parking_status(28, $floor_id);

		$temp[] = $color28;

		$data['sensor_28'] = "<div class=circle style=background:$color28></div>";

		/********************************
			SENSOR ID 29
		********************************/

		$color29 = $this->car_parking_status(29, $floor_id);

		$temp[]  = $color29;

		$data['sensor_29'] = "<div class=circle style=background:$color29></div>";

		/********************************
			SENSOR ID 30
		********************************/

		$color30 = $this->car_parking_status(30, $floor_id);

		$temp[]  = $color30;

		$data['sensor_30'] = "<div class=circle style=background:$color30></div>";

		/********************************
			SENSOR ID 31
		********************************/

		$color31 = $this->car_parking_status(31, $floor_id);

		$temp[] = $color31;

		$data['sensor_31'] = "<div class=circle style=background:$color31></div>";

		/********************************
			SENSOR ID 32
		********************************/

		$color32 = $this->car_parking_status(32, $floor_id);

		$temp[]  = $color32;

		$data['sensor_32'] = "<div class=circle style=background:$color32></div>";

		/********************************
			SENSOR ID 33
		********************************/

		$color33 = $this->car_parking_status(33, $floor_id);

		$temp[]  = $color33;

		$data['sensor_33'] = "<div class=circle style=background:$color33></div>";

		/********************************
			SENSOR ID 34
		********************************/

		$color34 = $this->car_parking_status(34, $floor_id);

		$temp[]  = $color34;

		$data['sensor_34'] = "<div class=circle style=background:$color34></div>";

		/********************************
			SENSOR ID 35
		********************************/

		$color35 = $this->car_parking_status(35, $floor_id);

		$temp[]  = $color35;

		$data['sensor_35'] = "<div class=circle style=background:$color35></div>";

		/********************************
			SENSOR ID 36
		********************************/

		$color36 = $this->car_parking_status(36, $floor_id);

		$temp[]  = $color36;

		$data['sensor_36'] = "<div class=circle style=background:$color36></div>";

		/********************************
			SENSOR ID 37
		********************************/

		$color37 = $this->car_parking_status(37, $floor_id);

		$temp[]  = $color37;

		$data['sensor_37'] = "<div class=circle style=background:$color37></div>";

		/********************************
			SENSOR ID 38
		********************************/

		$color38 = $this->car_parking_status(38, $floor_id);

		$temp[]  = $color38;

		$data['sensor_38'] = "<div class=circle style=background:$color38></div>";

		/********************************
			SENSOR ID 39
		********************************/

		$color39 = $this->car_parking_status(39, $floor_id);

		$temp[]  = $color39;

		$data['sensor_39'] = "<div class=circle style=background:$color39></div>";

		/********************************
			SENSOR ID 40
		********************************/

		$color40 = $this->car_parking_status(40, $floor_id);

		$temp[]  = $color40;

		$data['sensor_40'] = "<div class=circle style=background:$color40></div>";

		/********************************
			SENSOR ID 41
		********************************/

		$color41 = $this->car_parking_status(41, $floor_id);

		$temp[]  = $color41;

		$data['sensor_41'] = "<div class=circle style=background:$color41></div>";

		/********************************
			SENSOR ID 42
		********************************/

		$color42 = $this->car_parking_status(42, $floor_id);

		$temp[]  = $color42;

		$data['sensor_42'] = "<div class=circle style=background:$color42></div>";

		/********************************
			SENSOR ID 43
		********************************/

		$color43 = $this->car_parking_status(43, $floor_id);

		$temp[] = $color43;

		$data['sensor_43'] = "<div class=circle style=background:$color43></div>";

		/********************************
			SENSOR ID 44
		********************************/

		$color44 = $this->car_parking_status(44, $floor_id);

		$temp[]  = $color44;

		$data['sensor_44'] = "<div class=circle style=background:$color44></div>";

		/********************************
			SENSOR ID 45
		********************************/

		$color45 = $this->car_parking_status(45, $floor_id);

		$temp[]  = $color45;

		$data['sensor_45'] = "<div class=circle style=background:$color45></div>";

		/********************************
			SENSOR ID 46
		********************************/

		$color46 = $this->car_parking_status(46, $floor_id);

		$temp[]  = $color46;

		$data['sensor_46'] = "<div class=circle style=background:$color46></div>";

		/********************************
			SENSOR ID 47
		********************************/

		$color47 = $this->car_parking_status(47, $floor_id);

		$temp[]  = $color47;

		$data['sensor_47'] = "<div class=circle style=background:$color47></div>";

		/********************************
			SENSOR ID 48
		********************************/

		$color48 = $this->car_parking_status(48, $floor_id);

		$temp[]  = $color48;

		$data['sensor_48'] = "<div class=circle style=background:$color48></div>";

		/********************************
			SENSOR ID 49
		********************************/

		$color49 = $this->car_parking_status(49, $floor_id);

		$temp[]  = $color49;

		$data['sensor_49'] = "<div class=circle style=background:$color49></div>";

		/********************************
			SENSOR ID 50
		********************************/

		$color50 = $this->car_parking_status(50, $floor_id);

		$temp[]  = $color50;

		$data['sensor_50'] = "<div class=circle style=background:$color50></div>";

		/********************************
			SENSOR ID 51
		********************************/

		$color51 = $this->car_parking_status(51, $floor_id);

		$temp[]  = $color51;

		$data['sensor_51'] = "<div class=circle style=background:$color51></div>";

		/********************************
			SENSOR ID 52
		********************************/

		$color52 = $this->car_parking_status(52, $floor_id);

		$temp[]  = $color52;

		$data['sensor_52'] = "<div class=circle style=background:$color52></div>";

		/********************************
			SENSOR ID 53
		********************************/

		$color53 = $this->car_parking_status(53, $floor_id);

		$temp[]  = $color53;

		$data['sensor_53'] = "<div class=circle style=background:$color53></div>";

		/********************************
			SENSOR ID 54
		********************************/

		$color54 = $this->car_parking_status(54, $floor_id);

		$temp[]  = $color54;

		$data['sensor_54'] = "<div class=circle style=background:$color54></div>";

		/********************************
			SENSOR ID 55
		********************************/

		$color55 = $this->car_parking_status(55, $floor_id);

		$temp[]  = $color55;

		$data['sensor_55'] = "<div class=circle style=background:$color55></div>";

		/********************************
			SENSOR ID 56
		********************************/

		$color56 = $this->car_parking_status(56, $floor_id);

		$temp[]  = $color56;

		$data['sensor_56'] = "<div class=circle style=background:$color56></div>";

		/********************************
			SENSOR ID 57
		********************************/

		$color57 = $this->car_parking_status(57, $floor_id);

		$temp[]  = $color57;

		$data['sensor_57'] = "<div class=circle style=background:$color57></div>";

		/********************************
			SENSOR ID 58
		********************************/

		$color58 = $this->car_parking_status(58, $floor_id);

		$temp[]  = $color58;

		$data['sensor_58'] = "<div class=circle style=background:$color58></div>";

		/********************************
			SENSOR ID 59
		********************************/

		$color59 = $this->car_parking_status(59, $floor_id);

		$temp[]  = $color59;

		$data['sensor_59'] = "<div class=circle style=background:$color59></div>";

		/********************************
			SENSOR ID 60
		********************************/

		$color60 = $this->car_parking_status(60, $floor_id);

		$temp[] = $color60;

		$data['sensor_60'] = "<div class=circle style=background:$color60></div>";

		/********************************
			SENSOR ID 61
		********************************/

		$color61 = $this->car_parking_status(61, $floor_id);

		$temp[]  = $color61;

		$data['sensor_61'] = "<div class=circle style=background:$color61></div>";

		/********************************
			SENSOR ID 62
		********************************/

		$color62 = $this->car_parking_status(62, $floor_id);

		$temp[]  = $color62;

		$data['sensor_62'] = "<div class=circle style=background:$color62></div>";

		/********************************
			SENSOR ID 63
		********************************/

		$color63 = $this->car_parking_status(63, $floor_id);

		$temp[]  = $color63;

		$data['sensor_63'] = "<div class=circle style=background:$color63></div>";

		/********************************
			SENSOR ID 64
		********************************/

		$color64 = $this->car_parking_status(64, $floor_id);

		$temp[]  = $color64;

		$data['sensor_64'] = "<div class=circle style=background:$color64></div>";

		/********************************
			SENSOR ID 65
		********************************/

		$color65 = $this->car_parking_status(65, $floor_id);

		$temp[] = $color65;

		$data['sensor_65'] = "<div class=circle style=background:$color65></div>";

		/********************************
			SENSOR ID 66
		********************************/

		$color66 = $this->car_parking_status(66, $floor_id);

		$temp[]  = $color66;

		$data['sensor_66'] = "<div class=circle style=background:$color66></div>";

		/********************************
			SENSOR ID 67
		********************************/

		$color67 = $this->car_parking_status(67, $floor_id);

		$temp[]  = $color67;

		$data['sensor_67'] = "<div class=circle style=background:$color67></div>";

		/********************************
			SENSOR ID 68
		********************************/

		$color68 = $this->car_parking_status(68, $floor_id);

		$temp[]  = $color68;

		$data['sensor_68'] = "<div class=circle style=background:$color68></div>";

		/********************************
			SENSOR ID 69
		********************************/

		$color69 = $this->car_parking_status(69, $floor_id);

		$temp[]  = $color69;

		$data['sensor_69'] = "<div class=circle style=background:$color69></div>";

		/********************************
			SENSOR ID 70
		********************************/

		$color70 = $this->car_parking_status(70, $floor_id);

		$temp[]  = $color70;

		$data['sensor_70'] = "<div class=circle style=background:$color70></div>";

		/********************************
			SENSOR ID 71
		********************************/

		$color71 = $this->car_parking_status(71, $floor_id);

		$temp[]  = $color71;

		$data['sensor_71'] = "<div class=circle style=background:$color71></div>";

		/********************************
			SENSOR ID 72
		********************************/

		$color72 = $this->car_parking_status(72, $floor_id);

		$temp[]  = $color72;

		$data['sensor_72'] = "<div class=circle style=background:$color72></div>";

		/********************************
			SENSOR ID 73
		********************************/

		$color73 = $this->car_parking_status(73, $floor_id);

		$temp[]  = $color73;

		$data['sensor_73'] = "<div class=circle style=background:$color73></div>";

		/********************************
			SENSOR ID 74
		********************************/

		$color74 = $this->car_parking_status(74, $floor_id);

		$temp[]  = $color74;

		$data['sensor_74'] = "<div class=circle style=background:$color74></div>";

		/********************************
			SENSOR ID 75
		********************************/

		$color75 = $this->car_parking_status(75, $floor_id);

		$temp[]  = $color75;

		$data['sensor_75'] = "<div class=circle style=background:$color75></div>";

		/********************************
			SENSOR ID 76
		********************************/

		$color76 = $this->car_parking_status(76, $floor_id);

		$temp[]  = $color76;

		$data['sensor_76'] = "<div class=circle style=background:$color76></div>";

		/********************************
			SENSOR ID 77
		********************************/

		$color77 = $this->car_parking_status(77, $floor_id);

		$temp[]  = $color77;

		$data['sensor_77'] = "<div class=circle style=background:$color77></div>";

		/********************************
			SENSOR ID 78
		********************************/

		$color78 = $this->car_parking_status(78, $floor_id);

		$temp[]  = $color78;

		$data['sensor_78'] = "<div class=circle style=background:$color78></div>";

		/********************************
			SENSOR ID 79
		********************************/

		$color79 = $this->car_parking_status(79, $floor_id);

		$temp[]  = $color79;

		$data['sensor_79'] = "<div class=circle style=background:$color79></div>";

		/********************************
			SENSOR ID 80
		********************************/

		$color80 = $this->car_parking_status(80, $floor_id);

		$temp[]  = $color80;

		$data['sensor_80'] = "<div class=circle style=background:$color80></div>";

		/********************************
			SENSOR ID 81
		********************************/

		$color81 = $this->car_parking_status(81, $floor_id);

		$temp[]  = $color81;

		$data['sensor_81'] = "<div class=circle style=background:$color81></div>";

		/********************************
			SENSOR ID 82
		********************************/

		$color82 = $this->car_parking_status(82, $floor_id);

		$temp[]  = $color82;

		$data['sensor_82'] = "<div class=circle style=background:$color82></div>";

		/********************************
			SENSOR ID 83
		********************************/

		$color83 = $this->car_parking_status(83, $floor_id);

		$temp[]  = $color83;

		$data['sensor_83'] = "<div class=circle style=background:$color83></div>";

		/********************************
			SENSOR ID 84
		********************************/

		$color84 = $this->car_parking_status(84, $floor_id);

		$temp[] = $color84;

		$data['sensor_84'] = "<div class=circle style=background:$color84></div>";

		/********************************
			SENSOR ID 85
		********************************/

		$color85 = $this->car_parking_status(85, $floor_id);

		$temp[] = $color85;

		$data['sensor_85'] = "<div class=circle style=background:$color85></div>";

		/********************************
			SENSOR ID 86
		********************************/

		$color86 = $this->car_parking_status(86, $floor_id);

		$temp[]  = $color86;

		$data['sensor_86'] = "<div class=circle style=background:$color86></div>";

		/********************************
			SENSOR ID 87
		********************************/

		$color87 = $this->car_parking_status(87, $floor_id);

		$temp[]  = $color87;

		$data['sensor_87'] = "<div class=circle style=background:$color87></div>";

		/********************************
			SENSOR ID 88
		********************************/

		$color88 = $this->car_parking_status(88, $floor_id);

		$temp[]  = $color88;

		$data['sensor_88'] = "<div class=circle style=background:$color88></div>";

		/********************************
			SENSOR ID 89
		********************************/

		$color89 = $this->car_parking_status(89, $floor_id);

		$temp[] = $color89;

		$data['sensor_89'] = "<div class=circle style=background:$color89></div>";

		/********************************
			SENSOR ID 90
		********************************/

		$color90 = $this->car_parking_status(90, $floor_id);

		$temp[]  = $color90;

		$data['sensor_90'] = "<div class=circle style=background:$color90></div>";

		/********************************
			SENSOR ID 91
		********************************/

		$color91 = $this->car_parking_status(91, $floor_id);

		$temp[]  = $color91;

		$data['sensor_91'] = "<div class=circle style=background:$color91></div>";

		/********************************
			SENSOR ID 92
		********************************/

		$color92 = $this->car_parking_status(92, $floor_id);

		$temp[]  = $color92;

		$data['sensor_92'] = "<div class=circle style=background:$color92></div>";

		/********************************
			SENSOR ID 93
		********************************/

		$color93 = $this->car_parking_status(93, $floor_id);

		$temp[]  = $color93;

		$data['sensor_93'] = "<div class=circle style=background:$color93></div>";

		/********************************
			SENSOR ID 94
		********************************/

		$color94 = $this->car_parking_status(94, $floor_id);

		$temp[]  = $color94;

		$data['sensor_94'] = "<div class=circle style=background:$color94></div>";

		/********************************
			SENSOR ID 95
		********************************/

		$color95 = $this->car_parking_status(95, $floor_id);

		$temp[] = $color95;

		$data['sensor_95'] = "<div class=circle style=background:$color95></div>";

		/********************************
			SENSOR ID 96
		********************************/

		$color96 = $this->car_parking_status(96, $floor_id);

		$temp[] = $color96;

		$data['sensor_96'] = "<div class=circle style=background:$color96></div>";

		/********************************
			SENSOR ID 97
		********************************/

		$color97 = $this->car_parking_status(97, $floor_id);

		$temp[] = $color97;

		$data['sensor_97'] = "<div class=circle style=background:$color97></div>";

		/********************************
			SENSOR ID 98
		********************************/

		$color98 = $this->car_parking_status(98, $floor_id);

		$temp[]  = $color98;

		$data['sensor_98'] = "<div class=circle style=background:$color98></div>";

		/********************************
			SENSOR ID 99
		********************************/

		$color99 = $this->car_parking_status(99, $floor_id);

		$temp[]  = $color99;

		$data['sensor_99'] = "<div class=circle style=background:$color99></div>";

		/********************************
			SENSOR ID 100
		********************************/

		$color100 = $this->car_parking_status(100, $floor_id);

		$temp[]   = $color100;

		$data['sensor_100'] = "<div class=circle style=background:$color100></div>";

		/********************************
			SENSOR ID 101
		********************************/

		$color101 = $this->car_parking_status(101, $floor_id);

		$temp[]   = $color101;

		$data['sensor_101'] = "<div class=circle style=background:$color101></div>";

		/********************************
			SENSOR ID 102
		********************************/

		$color102 = $this->car_parking_status(102, $floor_id);

		$temp[]   = $color102;

		$data['sensor_102'] = "<div class=circle style=background:$color102></div>";

		/********************************
			SENSOR ID 103
		********************************/

		$color103 = $this->car_parking_status(103, $floor_id);

		$temp[]   = $color103;

		$data['sensor_103'] = "<div class=circle style=background:$color103></div>";

		/********************************
			SENSOR ID 104
		********************************/

		$color104 = $this->car_parking_status(104, $floor_id);

		$temp[]   = $color104;

		$data['sensor_104'] = "<div class=circle style=background:$color104></div>";

		/********************************
			SENSOR ID 105
		********************************/

		$color105 = $this->car_parking_status(105, $floor_id);

		$temp[]   = $color105;

		$data['sensor_105'] = "<div class=circle style=background:$color105></div>";

		/********************************
			SENSOR ID 106
		********************************/

		$color106 = $this->car_parking_status(106, $floor_id);

		$temp[]   = $color106;

		$data['sensor_106'] = "<div class=circle style=background:$color106></div>";

		/********************************
			SENSOR ID 107
		********************************/

		$color107 = $this->car_parking_status(107, $floor_id);

		$temp[]   = $color107;

		$data['sensor_107'] = "<div class=circle style=background:$color107></div>";

		/********************************
			SENSOR ID 108
		********************************/

		$color108 = $this->car_parking_status(108, $floor_id);

		$temp[]   = $color108;

		$data['sensor_108'] = "<div class=circle style=background:$color108></div>";

		/********************************
			SENSOR ID 109
		********************************/

		$color109 = $this->car_parking_status(109, $floor_id);

		$temp[]   = $color109;

		$data['sensor_109'] = "<div class=circle style=background:$color109></div>";

		/********************************
			SENSOR ID 110
		********************************/

		$color110 = $this->car_parking_status(110, $floor_id);

		$temp[]   = $color110;

		$data['sensor_110'] = "<div class=circle style=background:$color110></div>";

		/********************************
			SENSOR ID 111
		********************************/

		$color111 = $this->car_parking_status(111, $floor_id);

		$temp[]   = $color111;

		$data['sensor_111'] = "<div class=circle style=background:$color111></div>";

		/********************************
			SENSOR ID 112
		********************************/

		$color112 = $this->car_parking_status(112, $floor_id);

		$temp[]   = $color112;

		$data['sensor_112'] = "<div class=circle style=background:$color112></div>";

		/********************************
			SENSOR ID 113
		********************************/

		$color113 = $this->car_parking_status(113, $floor_id);

		$temp[]   = $color113;

		$data['sensor_113'] = "<div class=circle style=background:$color113></div>";

		/********************************
			SENSOR ID 114
		********************************/

		$color114 = $this->car_parking_status(114, $floor_id);

		$temp[]   = $color114;

		$data['sensor_114'] = "<div class=circle style=background:$color114></div>";

		/********************************
			SENSOR ID 115
		********************************/

		$color115 = $this->car_parking_status(115, $floor_id);

		$temp[]   = $color115;

		$data['sensor_115'] = "<div class=circle style=background:$color115></div>";

		/********************************
			SENSOR ID 116
		********************************/

		$color116 = $this->car_parking_status(116, $floor_id);

		$temp[]   = $color116;

		$data['sensor_116'] = "<div class=circle style=background:$color116></div>";

        /********************************
			SENSOR ID 117
		********************************/

		$color117 = $this->car_parking_status(117, $floor_id);

		$temp[]   = $color117;

		$data['sensor_117'] = "<div class=circle style=background:$color117></div>";

		/********************************
			SENSOR ID 118
		********************************/

		$color118 = $this->car_parking_status(118, $floor_id);

		$temp[]   = $color118;

		$data['sensor_118'] = "<div class=circle style=background:$color118></div>";

		/********************************
			SENSOR ID 119
		********************************/

		$color119 = $this->car_parking_status(119, $floor_id);

		$temp[]   = $color119;

		$data['sensor_119'] = "<div class=circle style=background:$color119></div>";

		/********************************
			SENSOR ID 120
		********************************/

		$color120 = $this->car_parking_status(120, $floor_id);

		$temp[]   = $color120;

		$data['sensor_120'] = "<div class=circle style=background:$color120></div>";

		/********************************
			SENSOR ID 121
		********************************/

		$color121 = $this->car_parking_status(121, $floor_id);

		$temp[]   = $color121;

		$data['sensor_121'] = "<div class=circle style=background:$color121></div>";

		/********************************
			SENSOR ID 122
		********************************/

		$color122 = $this->car_parking_status(122, $floor_id);

		$temp[]   = $color122;

		$data['sensor_122'] = "<div class=circle style=background:$color122></div>";

		/********************************
			SENSOR ID 123
		********************************/

		$color123 = $this->car_parking_status(123, $floor_id);

		$temp[]   = $color123;

		$data['sensor_123'] = "<div class=circle style=background:$color123></div>";

		/********************************
			SENSOR ID 124
		********************************/

		$color124 = $this->car_parking_status(124, $floor_id);

		$temp[]   = $color124;

		$data['sensor_124'] = "<div class=circle style=background:$color124></div>";

		/********************************
			SENSOR ID 125
		********************************/

		$color125 = $this->car_parking_status(125, $floor_id);

		$temp[]   = $color125;

		$data['sensor_125'] = "<div class=circle style=background:$color125></div>";

		/********************************
			SENSOR ID 126
		********************************/

		$color126 = $this->car_parking_status(126, $floor_id);

		$temp[]   = $color126;

		$data['sensor_126'] = "<div class=circle style=background:$color126></div>";

		/********************************
			SENSOR ID 127
		********************************/

		$color127 = $this->car_parking_status(127, $floor_id);

		$temp[]   = $color127;

		$data['sensor_127'] = "<div class=circle style=background:$color127></div>";

		/********************************
			SENSOR ID 128
		********************************/

		$color128 = $this->car_parking_status(128, $floor_id);

		$temp[] = $color128;

		$data['sensor_128'] = "<div class=circle style=background:$color128></div>";

		/********************************
			SENSOR ID 129
		********************************/

		$color129 = $this->car_parking_status(129, $floor_id);

		$temp[]   = $color129;

		$data['sensor_129'] = "<div class=circle style=background:$color129></div>";

		/********************************
			SENSOR ID 130
		********************************/

		$color130 = $this->car_parking_status(130, $floor_id);

		$temp[]   = $color130;

		$data['sensor_130'] = "<div class=circle style=background:$color130></div>";

		/********************************
			SENSOR ID 131
		********************************/

		$color131 = $this->car_parking_status(131, $floor_id);

		$temp[]   = $color131;

		$data['sensor_131'] = "<div class=circle style=background:$color131></div>";

		/********************************
			SENSOR ID 132
		********************************/

		$color132 = $this->car_parking_status(132, $floor_id);

		$temp[]   = $color132;

		$data['sensor_132'] = "<div class=circle style=background:$color132></div>";

        /********************************
			SENSOR ID 133
		********************************/

		$color133 = $this->car_parking_status(133, $floor_id);

		$temp[]   = $color133;

		$data['sensor_133'] = "<div class=circle style=background:$color133></div>";

        /********************************
			SENSOR ID 134
		********************************/

		$color134 = $this->car_parking_status(134, $floor_id);

		$temp[]   = $color134;

		$data['sensor_134'] = "<div class=circle style=background:$color134></div>";

		/********************************
			SENSOR ID 135
		********************************/

		$color135 = $this->car_parking_status(135, $floor_id);

		$temp[]   = $color135;

		$data['sensor_135'] = "<div class=circle style=background:$color135></div>";

		/********************************
			SENSOR ID 136
		********************************/

		$color136 = $this->car_parking_status(136, $floor_id);

		$temp[]   = $color136;

		$data['sensor_136'] = "<div class=circle style=background:$color136></div>";

		/********************************
			SENSOR ID 137
		********************************/

		$color137 = $this->car_parking_status(137, $floor_id);

		$temp[]   = $color137;

		$data['sensor_137'] = "<div class=circle style=background:$color137></div>";

		/********************************
			SENSOR ID 138
		********************************/

		$color138 = $this->car_parking_status(138, $floor_id);

		$temp[]   = $color138;

		$data['sensor_138'] = "<div class=circle style=background:$color138></div>";

		/********************************
			SENSOR ID 139
		********************************/

		$color139 = $this->car_parking_status(139, $floor_id);

		$temp[]   = $color139;

		$data['sensor_139'] = "<div class=circle style=background:$color139></div>";

		/********************************
			SENSOR ID 140
		********************************/

		$color140 = $this->car_parking_status(140, $floor_id);

		$temp[]   = $color140;

		$data['sensor_140'] = "<div class=circle style=background:$color140></div>";

		/********************************
			SENSOR ID 141
		********************************/

		$color141 = $this->car_parking_status(141, $floor_id);

		$temp[]   = $color141;

		$data['sensor_141'] = "<div class=circle style=background:$color141></div>";

		/********************************
			SENSOR ID 142
		********************************/

		$color142 = $this->car_parking_status(142, $floor_id);

		$temp[]   = $color142;

		$data['sensor_142'] = "<div class=circle style=background:$color142></div>";

		/********************************
			SENSOR ID 143
		********************************/

		$color143 = $this->car_parking_status(143, $floor_id);

		$temp[]   = $color143;

		$data['sensor_143'] = "<div class=circle style=background:$color143></div>";

       /********************************
			SENSOR ID 144
		********************************/

		$color144 = $this->car_parking_status(144, $floor_id);

		$temp[]   = $color144;

		$data['sensor_144'] = "<div class=circle style=background:$color144></div>";

        /********************************
			SENSOR ID 145
		********************************/

		$color145 = $this->car_parking_status(145, $floor_id);

		$temp[]   = $color145;

		$data['sensor_145'] = "<div class=circle style=background:$color145></div>";

		/********************************
			SENSOR ID 146
		********************************/

		$color146 = $this->car_parking_status(146, $floor_id);

		$temp[]   = $color146;

		$data['sensor_146'] = "<div class=circle style=background:$color146></div>";

		/********************************
			SENSOR ID 147
		********************************/

		$color147 = $this->car_parking_status(147, $floor_id);

		$temp[] = $color147;

		$data['sensor_147'] = "<div class=circle style=background:$color147></div>";

		/********************************
			SENSOR ID 148
		********************************/

		$color148 = $this->car_parking_status(148, $floor_id);

		$temp[]   = $color148;

		$data['sensor_148'] = "<div class=circle style=background:$color148></div>";

		/********************************
			SENSOR ID 149
		********************************/

		$color149 = $this->car_parking_status(149, $floor_id);

		$temp[] = $color149;

		$data['sensor_149'] = "<div class=circle style=background:$color149></div>";

		/********************************
			SENSOR ID 150
		********************************/

		$color150 = $this->car_parking_status(150, $floor_id);

		$temp[]   = $color150;

		$data['sensor_150'] = "<div class=circle style=background:$color150></div>";

		/********************************
			SENSOR ID 151
		********************************/

		$color151 = $this->car_parking_status(151, $floor_id);

		$temp[]   = $color151;

		$data['sensor_151'] = "<div class=circle style=background:$color151></div>";

		/********************************
			SENSOR ID 152
		********************************/

		$color152 = $this->car_parking_status(152, $floor_id);

		$temp[]   = $color152;

		$data['sensor_152'] = "<div class=circle style=background:$color152></div>";

		/********************************
			SENSOR ID 153
		********************************/

		$color153 = $this->car_parking_status(153, $floor_id);

		$temp[]   = $color153;

		$data['sensor_153'] = "<div class=circle style=background:$color153></div>";

		/********************************
			SENSOR ID 154
		********************************/

		$color154 = $this->car_parking_status(154, $floor_id);

		$temp[]   = $color154;

		$data['sensor_154'] = "<div class=circle style=background:$color154></div>";

		/********************************
			SENSOR ID 155
		********************************/

		$color155 = $this->car_parking_status(155, $floor_id);

		$temp[]   = $color155;

		$data['sensor_155'] = "<div class=circle style=background:$color155></div>";

		/********************************
			SENSOR ID 156
		********************************/

		$color156 = $this->car_parking_status(156, $floor_id);

		$temp[]   = $color156;

		$data['sensor_156'] = "<div class=circle style=background:$color156></div>";

		/********************************
			SENSOR ID 157
		********************************/

		$color157 = $this->car_parking_status(157, $floor_id);

		$temp[]   = $color157;

		$data['sensor_157'] = "<div class=circle style=background:$color157></div>";

		/********************************
			SENSOR ID 158
		********************************/

		$color158 = $this->car_parking_status(158, $floor_id);

		$temp[]   = $color158;

		$data['sensor_158'] = "<div class=circle style=background:$color158></div>";

		/********************************
			SENSOR ID 159
		********************************/

		$color159 = $this->car_parking_status(159, $floor_id);

		$temp[]   = $color159;

		$data['sensor_159'] = "<div class=circle style=background:$color159></div>";

		/********************************
			SENSOR ID 160
		********************************/

		$color160 = $this->car_parking_status(160, $floor_id);

		$temp[]   = $color160;

		$data['sensor_160'] = "<div class=circle style=background:$color160></div>";

		/********************************
			SENSOR ID 161
		********************************/

		$color161 = $this->car_parking_status(161, $floor_id);

		$temp[]   = $color161;

		$data['sensor_161'] = "<div class=circle style=background:$color161></div>";

		/********************************
			SENSOR ID 162
		********************************/

		$color162 = $this->car_parking_status(162, $floor_id);

		$temp[]   = $color162;

		$data['sensor_162'] = "<div class=circle style=background:$color162></div>";

		/********************************
			SENSOR ID 163
		********************************/

		$color163 = $this->car_parking_status(163, $floor_id);

		$temp[] = $color163;

		$data['sensor_163'] = "<div class=circle style=background:$color163></div>";

		/********************************
			SENSOR ID 164
		********************************/

		$color164 = $this->car_parking_status(164, $floor_id);

		$temp[]   = $color164;

		$data['sensor_164'] = "<div class=circle style=background:$color164></div>";

		/********************************
			SENSOR ID 165
		********************************/

		$color165 = $this->car_parking_status(165, $floor_id);

		$temp[]   = $color165;

		$data['sensor_165'] = "<div class=circle style=background:$color165></div>";

		/********************************
			SENSOR ID 166
		********************************/

		$color166 = $this->car_parking_status(166, $floor_id);

		$temp[] = $color166;

		$data['sensor_166'] = "<div class=circle style=background:$color166></div>";

		/********************************
			SENSOR ID 167
		********************************/

		$color167 = $this->car_parking_status(167, $floor_id);

		$temp[]   = $color167;

		$data['sensor_167'] = "<div class=circle style=background:$color167></div>";

		/********************************
			SENSOR ID 168
		********************************/

		$color168 = $this->car_parking_status(168, $floor_id);

		$temp[] = $color168;

		$data['sensor_168'] = "<div class=circle style=background:$color168></div>";

		/********************************
			SENSOR ID 169
		********************************/

		$color169 = $this->car_parking_status(169, $floor_id);

		$temp[]   = $color169;

		$data['sensor_169'] = "<div class=circle style=background:$color169></div>";

		/********************************
			SENSOR ID 170
		********************************/

		$color170 = $this->car_parking_status(170, $floor_id);

		$temp[]   = $color170;

		$data['sensor_170'] = "<div class=circle style=background:$color170></div>";

		/********************************
			SENSOR ID 171
		********************************/

		$color171 = $this->car_parking_status(171, $floor_id);

		$temp[]   = $color171;

		$data['sensor_171'] = "<div class=circle style=background:$color171></div>";

		/********************************
			SENSOR ID 172
		********************************/

		$color172 = $this->car_parking_status(172, $floor_id);

		$temp[]   = $color172;

		$data['sensor_172'] = "<div class=circle style=background:$color172></div>";


	 	/********************************
			SENSOR ID 173
		********************************/

		$color173 = $this->car_parking_status(173, $floor_id);

		$temp[] = $color173;

		$data['sensor_173'] = "<div class=circle style=background:$color173></div>";


		/********************************
		SENSOR ID SET HERE END
		********************************/

		$this->load->view('header');
		$this->load->view('view_floor',$data);
		$this->load->view('footer');
	}
    

/************************************
   Parking 3 Start
*************************************/

public function floor_info_3(){
 
 if($this->session->userdata('loggedIn')==FALSE)
	{
		redirect('admin/login');	
	}

       	$temp=array();

       	
       	$floor_id = 2; /*Set your floor or parking id*/
       
		/********************************
		SENSOR ID SET HERE
		********************************/


		/********************************
			SENSOR ID 1
		********************************/
   		$color1 = $this->car_parking_status(1, $floor_id);

		$temp[] = $color1;

		$data['sensor_1'] = "<div class=circle style=background:$color1></div>";

        /********************************
		    SENSOR ID 2
		********************************/
   
   		$color2 = $this->car_parking_status(2, $floor_id);

		$temp[] = $color2;

		$data['sensor_2'] = "<div class=circle style=background:$color2></div>";

        /********************************
			SENSOR ID 3
		********************************/

		$color3 = $this->car_parking_status(3, $floor_id);

		$temp[] = $color3;

		$data['sensor_3'] = "<div class=circle style=background:$color3></div>";

		/********************************
			SENSOR ID 4
		********************************/

		$color4 = $this->car_parking_status(4, $floor_id);

		$temp[] = $color4;

		$data['sensor_4'] = "<div class=circle style=background:$color4></div>";
		
		/********************************
			SENSOR ID 5
		********************************/

		$color5 = $this->car_parking_status(5, $floor_id);

		$temp[] = $color5;

		$data['sensor_5'] = "<div class=circle style=background:$color5></div>";

		/********************************
			SENSOR ID 6
		********************************/

		$color6 = $this->car_parking_status(6, $floor_id);

		$temp[] = $color6;

		$data['sensor_6'] = "<div class=circle style=background:$color6></div>";

		/********************************
			SENSOR ID 7
		********************************/

		$color7 = $this->car_parking_status(7, $floor_id);

		$temp[] = $color7;

		$data['sensor_7'] = "<div class=circle style=background:$color7></div>";

		/********************************
			SENSOR ID 8
		********************************/

		$color8 = $this->car_parking_status(8, $floor_id);

		$temp[] = $color8;

		$data['sensor_8'] = "<div class=circle style=background:$color8></div>";

        /********************************
			SENSOR ID 9
		********************************/

		$color9 = $this->car_parking_status(9, $floor_id);

		$temp[] = $color9;

		$data['sensor_9'] = "<div class=circle style=background:$color9></div>";

		/********************************
			SENSOR ID 10
		********************************/

		$color10 = $this->car_parking_status(10, $floor_id);

		$temp[]  = $color10;

		$data['sensor_10'] = "<div class=circle style=background:$color10></div>";

		/********************************
			SENSOR ID 11
		********************************/

		$color11 = $this->car_parking_status(11, $floor_id);

		$temp[]  = $color11;

		$data['sensor_11'] = "<div class=circle style=background:$color11></div>";

		/********************************
			SENSOR ID 12
		********************************/

		$color12 = $this->car_parking_status(12, $floor_id);

		$temp[]  = $color12;

		$data['sensor_12'] = "<div class=circle style=background:$color12></div>";

		/********************************
			SENSOR ID 13
		********************************/

		$color13 = $this->car_parking_status(13, $floor_id);

		$temp[]  = $color13;

		$data['sensor_13'] = "<div class=circle style=background:$color13></div>";

		/********************************
			SENSOR ID 14
		********************************/

		$color14 = $this->car_parking_status(14, $floor_id);

		$temp[]  = $color14;

		$data['sensor_14'] = "<div class=circle style=background:$color14></div>";

		/********************************
			SENSOR ID 15
		********************************/

		$color15 = $this->car_parking_status(15, $floor_id);

		$temp[]  = $color15;

		$data['sensor_15'] = "<div class=circle style=background:$color15></div>";

		/********************************
			SENSOR ID 16
		********************************/

		$color16 = $this->car_parking_status(16, $floor_id);

		$temp[]  = $color16;

		$data['sensor_16'] = "<div class=circle style=background:$color16></div>";

		/********************************
			SENSOR ID 17
		********************************/

		$color17 = $this->car_parking_status(17, $floor_id);

		$temp[]  = $color17;

		$data['sensor_17'] = "<div class=circle style=background:$color17></div>";

		/********************************
			SENSOR ID 18
		********************************/

		$color18 = $this->car_parking_status(18, $floor_id);

		$temp[]  = $color18;

		$data['sensor_18'] = "<div class=circle style=background:$color18></div>";

		/********************************
			SENSOR ID 19
		********************************/

		$color19 = $this->car_parking_status(19, $floor_id);

		$temp[]  = $color19;

		$data['sensor_19'] = "<div class=circle style=background:$color19></div>";

		/********************************
			SENSOR ID 20
		********************************/

		$color20 = $this->car_parking_status(20, $floor_id);

		$temp[]  = $color20;

		$data['sensor_20'] = "<div class=circle style=background:$color20></div>";

		/********************************
			SENSOR ID 21
		********************************/

		$color21 = $this->car_parking_status(21, $floor_id);

		$temp[]  = $color21;

		$data['sensor_21'] = "<div class=circle style=background:$color21></div>";

		/********************************
			SENSOR ID 22
		********************************/

		$color22 = $this->car_parking_status(22, $floor_id);

		$temp[]  = $color22;

		$data['sensor_22'] = "<div class=circle style=background:$color22></div>";

		/********************************
			SENSOR ID 23
		********************************/

		$color23 = $this->car_parking_status(23, $floor_id);

		$temp[]  = $color23;

		$data['sensor_23'] = "<div class=circle style=background:$color23></div>";

		/********************************
			SENSOR ID 24
		********************************/

		$color24 = $this->car_parking_status(24, $floor_id);

		$temp[]  = $color24;

		$data['sensor_24'] = "<div class=circle style=background:$color24></div>";


		/********************************
			SENSOR ID 25
		********************************/

		$color25 = $this->car_parking_status(25, $floor_id);

		$temp[] = $color25;

		$data['sensor_25'] = "<div class=circle style=background:$color25></div>";

		/********************************
			SENSOR ID 26
		********************************/

		$color26 = $this->car_parking_status(26, $floor_id);

		$temp[]  = $color26;

		$data['sensor_26'] = "<div class=circle style=background:$color26></div>";

		/********************************
			SENSOR ID 27
		********************************/

		$color27 = $this->car_parking_status(27, $floor_id);

		$temp[] = $color27;

		$data['sensor_27'] = "<div class=circle style=background:$color27></div>";

		/********************************
			SENSOR ID 28
		********************************/

		$color28 = $this->car_parking_status(28, $floor_id);

		$temp[] = $color28;

		$data['sensor_28'] = "<div class=circle style=background:$color28></div>";

		/********************************
			SENSOR ID 29
		********************************/

		$color29 = $this->car_parking_status(29, $floor_id);

		$temp[]  = $color29;

		$data['sensor_29'] = "<div class=circle style=background:$color29></div>";

		/********************************
			SENSOR ID 30
		********************************/

		$color30 = $this->car_parking_status(30, $floor_id);

		$temp[]  = $color30;

		$data['sensor_30'] = "<div class=circle style=background:$color30></div>";

		/********************************
			SENSOR ID 31
		********************************/

		$color31 = $this->car_parking_status(31, $floor_id);

		$temp[] = $color31;

		$data['sensor_31'] = "<div class=circle style=background:$color31></div>";

		/********************************
			SENSOR ID 32
		********************************/

		$color32 = $this->car_parking_status(32, $floor_id);

		$temp[]  = $color32;

		$data['sensor_32'] = "<div class=circle style=background:$color32></div>";

		/********************************
			SENSOR ID 33
		********************************/

		$color33 = $this->car_parking_status(33, $floor_id);

		$temp[]  = $color33;

		$data['sensor_33'] = "<div class=circle style=background:$color33></div>";

		/********************************
			SENSOR ID 34
		********************************/

		$color34 = $this->car_parking_status(34, $floor_id);

		$temp[]  = $color34;

		$data['sensor_34'] = "<div class=circle style=background:$color34></div>";

		/********************************
			SENSOR ID 35
		********************************/

		$color35 = $this->car_parking_status(35, $floor_id);

		$temp[]  = $color35;

		$data['sensor_35'] = "<div class=circle style=background:$color35></div>";

		/********************************
			SENSOR ID 36
		********************************/

		$color36 = $this->car_parking_status(36, $floor_id);

		$temp[]  = $color36;

		$data['sensor_36'] = "<div class=circle style=background:$color36></div>";

		/********************************
			SENSOR ID 37
		********************************/

		$color37 = $this->car_parking_status(37, $floor_id);

		$temp[]  = $color37;

		$data['sensor_37'] = "<div class=circle style=background:$color37></div>";

		/********************************
			SENSOR ID 38
		********************************/

		$color38 = $this->car_parking_status(38, $floor_id);

		$temp[]  = $color38;

		$data['sensor_38'] = "<div class=circle style=background:$color38></div>";

		/********************************
			SENSOR ID 39
		********************************/

		$color39 = $this->car_parking_status(39, $floor_id);

		$temp[]  = $color39;

		$data['sensor_39'] = "<div class=circle style=background:$color39></div>";

		/********************************
			SENSOR ID 40
		********************************/

		$color40 = $this->car_parking_status(40, $floor_id);

		$temp[]  = $color40;

		$data['sensor_40'] = "<div class=circle style=background:$color40></div>";

		/********************************
			SENSOR ID 41
		********************************/

		$color41 = $this->car_parking_status(41, $floor_id);

		$temp[]  = $color41;

		$data['sensor_41'] = "<div class=circle style=background:$color41></div>";

		/********************************
			SENSOR ID 42
		********************************/

		$color42 = $this->car_parking_status(42, $floor_id);

		$temp[]  = $color42;

		$data['sensor_42'] = "<div class=circle style=background:$color42></div>";

		/********************************
			SENSOR ID 43
		********************************/

		$color43 = $this->car_parking_status(43, $floor_id);

		$temp[] = $color43;

		$data['sensor_43'] = "<div class=circle style=background:$color43></div>";

		/********************************
			SENSOR ID 44
		********************************/

		$color44 = $this->car_parking_status(44, $floor_id);

		$temp[]  = $color44;

		$data['sensor_44'] = "<div class=circle style=background:$color44></div>";

		/********************************
			SENSOR ID 45
		********************************/

		$color45 = $this->car_parking_status(45, $floor_id);

		$temp[]  = $color45;

		$data['sensor_45'] = "<div class=circle style=background:$color45></div>";

		/********************************
			SENSOR ID 46
		********************************/

		$color46 = $this->car_parking_status(46, $floor_id);

		$temp[]  = $color46;

		$data['sensor_46'] = "<div class=circle style=background:$color46></div>";

		/********************************
			SENSOR ID 47
		********************************/

		$color47 = $this->car_parking_status(47, $floor_id);

		$temp[]  = $color47;

		$data['sensor_47'] = "<div class=circle style=background:$color47></div>";

		/********************************
			SENSOR ID 48
		********************************/

		$color48 = $this->car_parking_status(48, $floor_id);

		$temp[]  = $color48;

		$data['sensor_48'] = "<div class=circle style=background:$color48></div>";

		/********************************
			SENSOR ID 49
		********************************/

		$color49 = $this->car_parking_status(49, $floor_id);

		$temp[]  = $color49;

		$data['sensor_49'] = "<div class=circle style=background:$color49></div>";

		/********************************
			SENSOR ID 50
		********************************/

		$color50 = $this->car_parking_status(50, $floor_id);

		$temp[]  = $color50;

		$data['sensor_50'] = "<div class=circle style=background:$color50></div>";

		/********************************
			SENSOR ID 51
		********************************/

		$color51 = $this->car_parking_status(51, $floor_id);

		$temp[]  = $color51;

		$data['sensor_51'] = "<div class=circle style=background:$color51></div>";

		/********************************
			SENSOR ID 52
		********************************/

		$color52 = $this->car_parking_status(52, $floor_id);

		$temp[]  = $color52;

		$data['sensor_52'] = "<div class=circle style=background:$color52></div>";

		/********************************
			SENSOR ID 53
		********************************/

		$color53 = $this->car_parking_status(53, $floor_id);

		$temp[]  = $color53;

		$data['sensor_53'] = "<div class=circle style=background:$color53></div>";

		/********************************
			SENSOR ID 54
		********************************/

		$color54 = $this->car_parking_status(54, $floor_id);

		$temp[]  = $color54;

		$data['sensor_54'] = "<div class=circle style=background:$color54></div>";

		/********************************
			SENSOR ID 55
		********************************/

		$color55 = $this->car_parking_status(55, $floor_id);

		$temp[]  = $color55;

		$data['sensor_55'] = "<div class=circle style=background:$color55></div>";

		/********************************
			SENSOR ID 56
		********************************/

		$color56 = $this->car_parking_status(56, $floor_id);

		$temp[]  = $color56;

		$data['sensor_56'] = "<div class=circle style=background:$color56></div>";

		/********************************
			SENSOR ID 57
		********************************/

		$color57 = $this->car_parking_status(57, $floor_id);

		$temp[]  = $color57;

		$data['sensor_57'] = "<div class=circle style=background:$color57></div>";

		/********************************
			SENSOR ID 58
		********************************/

		$color58 = $this->car_parking_status(58, $floor_id);

		$temp[]  = $color58;

		$data['sensor_58'] = "<div class=circle style=background:$color58></div>";

		/********************************
			SENSOR ID 59
		********************************/

		$color59 = $this->car_parking_status(59, $floor_id);

		$temp[]  = $color59;

		$data['sensor_59'] = "<div class=circle style=background:$color59></div>";

		/********************************
			SENSOR ID 60
		********************************/

		$color60 = $this->car_parking_status(60, $floor_id);

		$temp[] = $color60;

		$data['sensor_60'] = "<div class=circle style=background:$color60></div>";

		/********************************
			SENSOR ID 61
		********************************/

		$color61 = $this->car_parking_status(61, $floor_id);

		$temp[]  = $color61;

		$data['sensor_61'] = "<div class=circle style=background:$color61></div>";

		/********************************
			SENSOR ID 62
		********************************/

		$color62 = $this->car_parking_status(62, $floor_id);

		$temp[]  = $color62;

		$data['sensor_62'] = "<div class=circle style=background:$color62></div>";

		/********************************
			SENSOR ID 63
		********************************/

		$color63 = $this->car_parking_status(63, $floor_id);

		$temp[]  = $color63;

		$data['sensor_63'] = "<div class=circle style=background:$color63></div>";

		/********************************
			SENSOR ID 64
		********************************/

		$color64 = $this->car_parking_status(64, $floor_id);

		$temp[]  = $color64;

		$data['sensor_64'] = "<div class=circle style=background:$color64></div>";

		/********************************
			SENSOR ID 65
		********************************/

		$color65 = $this->car_parking_status(65, $floor_id);

		$temp[] = $color65;

		$data['sensor_65'] = "<div class=circle style=background:$color65></div>";

		/********************************
			SENSOR ID 66
		********************************/

		$color66 = $this->car_parking_status(66, $floor_id);

		$temp[]  = $color66;

		$data['sensor_66'] = "<div class=circle style=background:$color66></div>";

		/********************************
			SENSOR ID 67
		********************************/

		$color67 = $this->car_parking_status(67, $floor_id);

		$temp[]  = $color67;

		$data['sensor_67'] = "<div class=circle style=background:$color67></div>";

		/********************************
			SENSOR ID 68
		********************************/

		$color68 = $this->car_parking_status(68, $floor_id);

		$temp[]  = $color68;

		$data['sensor_68'] = "<div class=circle style=background:$color68></div>";

		/********************************
			SENSOR ID 69
		********************************/

		$color69 = $this->car_parking_status(69, $floor_id);

		$temp[]  = $color69;

		$data['sensor_69'] = "<div class=circle style=background:$color69></div>";

		/********************************
			SENSOR ID 70
		********************************/

		$color70 = $this->car_parking_status(70, $floor_id);

		$temp[]  = $color70;

		$data['sensor_70'] = "<div class=circle style=background:$color70></div>";

		/********************************
			SENSOR ID 71
		********************************/

		$color71 = $this->car_parking_status(71, $floor_id);

		$temp[]  = $color71;

		$data['sensor_71'] = "<div class=circle style=background:$color71></div>";

		/********************************
			SENSOR ID 72
		********************************/

		$color72 = $this->car_parking_status(72, $floor_id);

		$temp[]  = $color72;

		$data['sensor_72'] = "<div class=circle style=background:$color72></div>";

		/********************************
			SENSOR ID 73
		********************************/

		$color73 = $this->car_parking_status(73, $floor_id);

		$temp[]  = $color73;

		$data['sensor_73'] = "<div class=circle style=background:$color73></div>";

		/********************************
			SENSOR ID 74
		********************************/

		$color74 = $this->car_parking_status(74, $floor_id);

		$temp[]  = $color74;

		$data['sensor_74'] = "<div class=circle style=background:$color74></div>";

		/********************************
			SENSOR ID 75
		********************************/

		$color75 = $this->car_parking_status(75, $floor_id);

		$temp[]  = $color75;

		$data['sensor_75'] = "<div class=circle style=background:$color75></div>";

		/********************************
			SENSOR ID 76
		********************************/

		$color76 = $this->car_parking_status(76, $floor_id);

		$temp[]  = $color76;

		$data['sensor_76'] = "<div class=circle style=background:$color76></div>";

		/********************************
			SENSOR ID 77
		********************************/

		$color77 = $this->car_parking_status(77, $floor_id);

		$temp[]  = $color77;

		$data['sensor_77'] = "<div class=circle style=background:$color77></div>";

		/********************************
			SENSOR ID 78
		********************************/

		$color78 = $this->car_parking_status(78, $floor_id);

		$temp[]  = $color78;

		$data['sensor_78'] = "<div class=circle style=background:$color78></div>";

		/********************************
			SENSOR ID 79
		********************************/

		$color79 = $this->car_parking_status(79, $floor_id);

		$temp[]  = $color79;

		$data['sensor_79'] = "<div class=circle style=background:$color79></div>";

		/********************************
			SENSOR ID 80
		********************************/

		$color80 = $this->car_parking_status(80, $floor_id);

		$temp[]  = $color80;

		$data['sensor_80'] = "<div class=circle style=background:$color80></div>";

		/********************************
			SENSOR ID 81
		********************************/

		$color81 = $this->car_parking_status(81, $floor_id);

		$temp[]  = $color81;

		$data['sensor_81'] = "<div class=circle style=background:$color81></div>";

		/********************************
			SENSOR ID 82
		********************************/

		$color82 = $this->car_parking_status(82, $floor_id);

		$temp[]  = $color82;

		$data['sensor_82'] = "<div class=circle style=background:$color82></div>";

		/********************************
			SENSOR ID 83
		********************************/

		$color83 = $this->car_parking_status(83, $floor_id);

		$temp[]  = $color83;

		$data['sensor_83'] = "<div class=circle style=background:$color83></div>";

		/********************************
			SENSOR ID 84
		********************************/

		$color84 = $this->car_parking_status(84, $floor_id);

		$temp[] = $color84;

		$data['sensor_84'] = "<div class=circle style=background:$color84></div>";

		/********************************
			SENSOR ID 85
		********************************/

		$color85 = $this->car_parking_status(85, $floor_id);

		$temp[] = $color85;

		$data['sensor_85'] = "<div class=circle style=background:$color85></div>";

		/********************************
			SENSOR ID 86
		********************************/

		$color86 = $this->car_parking_status(86, $floor_id);

		$temp[]  = $color86;

		$data['sensor_86'] = "<div class=circle style=background:$color86></div>";

		/********************************
			SENSOR ID 87
		********************************/

		$color87 = $this->car_parking_status(87, $floor_id);

		$temp[]  = $color87;

		$data['sensor_87'] = "<div class=circle style=background:$color87></div>";

		/********************************
			SENSOR ID 88
		********************************/

		$color88 = $this->car_parking_status(88, $floor_id);

		$temp[]  = $color88;

		$data['sensor_88'] = "<div class=circle style=background:$color88></div>";

		/********************************
			SENSOR ID 89
		********************************/

		$color89 = $this->car_parking_status(89, $floor_id);

		$temp[] = $color89;

		$data['sensor_89'] = "<div class=circle style=background:$color89></div>";

		/********************************
			SENSOR ID 90
		********************************/

		$color90 = $this->car_parking_status(90, $floor_id);

		$temp[]  = $color90;

		$data['sensor_90'] = "<div class=circle style=background:$color90></div>";

		/********************************
			SENSOR ID 91
		********************************/

		$color91 = $this->car_parking_status(91, $floor_id);

		$temp[]  = $color91;

		$data['sensor_91'] = "<div class=circle style=background:$color91></div>";

		/********************************
			SENSOR ID 92
		********************************/

		$color92 = $this->car_parking_status(92, $floor_id);

		$temp[]  = $color92;

		$data['sensor_92'] = "<div class=circle style=background:$color92></div>";

		/********************************
			SENSOR ID 93
		********************************/

		$color93 = $this->car_parking_status(93, $floor_id);

		$temp[]  = $color93;

		$data['sensor_93'] = "<div class=circle style=background:$color93></div>";

		/********************************
			SENSOR ID 94
		********************************/

		$color94 = $this->car_parking_status(94, $floor_id);

		$temp[]  = $color94;

		$data['sensor_94'] = "<div class=circle style=background:$color94></div>";

		/********************************
			SENSOR ID 95
		********************************/

		$color95 = $this->car_parking_status(95, $floor_id);

		$temp[] = $color95;

		$data['sensor_95'] = "<div class=circle style=background:$color95></div>";

		/********************************
			SENSOR ID 96
		********************************/

		$color96 = $this->car_parking_status(96, $floor_id);

		$temp[] = $color96;

		$data['sensor_96'] = "<div class=circle style=background:$color96></div>";

		/********************************
			SENSOR ID 97
		********************************/

		$color97 = $this->car_parking_status(97, $floor_id);

		$temp[] = $color97;

		$data['sensor_97'] = "<div class=circle style=background:$color97></div>";

		/********************************
			SENSOR ID 98
		********************************/

		$color98 = $this->car_parking_status(98, $floor_id);

		$temp[]  = $color98;

		$data['sensor_98'] = "<div class=circle style=background:$color98></div>";

		/********************************
			SENSOR ID 99
		********************************/

		$color99 = $this->car_parking_status(99, $floor_id);

		$temp[]  = $color99;

		$data['sensor_99'] = "<div class=circle style=background:$color99></div>";

		/********************************
			SENSOR ID 100
		********************************/

		$color100 = $this->car_parking_status(100, $floor_id);

		$temp[]   = $color100;

		$data['sensor_100'] = "<div class=circle style=background:$color100></div>";

		/********************************
			SENSOR ID 101
		********************************/

		$color101 = $this->car_parking_status(101, $floor_id);

		$temp[]   = $color101;

		$data['sensor_101'] = "<div class=circle style=background:$color101></div>";

		/********************************
			SENSOR ID 102
		********************************/

		$color102 = $this->car_parking_status(102, $floor_id);

		$temp[]   = $color102;

		$data['sensor_102'] = "<div class=circle style=background:$color102></div>";

		/********************************
			SENSOR ID 103
		********************************/

		$color103 = $this->car_parking_status(103, $floor_id);

		$temp[]   = $color103;

		$data['sensor_103'] = "<div class=circle style=background:$color103></div>";

		/********************************
			SENSOR ID 104
		********************************/

		$color104 = $this->car_parking_status(104, $floor_id);

		$temp[]   = $color104;

		$data['sensor_104'] = "<div class=circle style=background:$color104></div>";

		/********************************
			SENSOR ID 105
		********************************/

		$color105 = $this->car_parking_status(105, $floor_id);

		$temp[]   = $color105;

		$data['sensor_105'] = "<div class=circle style=background:$color105></div>";

		/********************************
			SENSOR ID 106
		********************************/

		$color106 = $this->car_parking_status(106, $floor_id);

		$temp[]   = $color106;

		$data['sensor_106'] = "<div class=circle style=background:$color106></div>";

		/********************************
			SENSOR ID 107
		********************************/

		$color107 = $this->car_parking_status(107, $floor_id);

		$temp[]   = $color107;

		$data['sensor_107'] = "<div class=circle style=background:$color107></div>";

		/********************************
			SENSOR ID 108
		********************************/

		$color108 = $this->car_parking_status(108, $floor_id);

		$temp[]   = $color108;

		$data['sensor_108'] = "<div class=circle style=background:$color108></div>";

		/********************************
			SENSOR ID 109
		********************************/

		$color109 = $this->car_parking_status(109, $floor_id);

		$temp[]   = $color109;

		$data['sensor_109'] = "<div class=circle style=background:$color109></div>";

		/********************************
			SENSOR ID 110
		********************************/

		$color110 = $this->car_parking_status(110, $floor_id);

		$temp[]   = $color110;

		$data['sensor_110'] = "<div class=circle style=background:$color110></div>";

		/********************************
			SENSOR ID 111
		********************************/

		$color111 = $this->car_parking_status(111, $floor_id);

		$temp[]   = $color111;

		$data['sensor_111'] = "<div class=circle style=background:$color111></div>";

		/********************************
			SENSOR ID 112
		********************************/

		$color112 = $this->car_parking_status(112, $floor_id);

		$temp[]   = $color112;

		$data['sensor_112'] = "<div class=circle style=background:$color112></div>";

		/********************************
			SENSOR ID 113
		********************************/

		$color113 = $this->car_parking_status(113, $floor_id);

		$temp[]   = $color113;

		$data['sensor_113'] = "<div class=circle style=background:$color113></div>";

		/********************************
			SENSOR ID 114
		********************************/

		$color114 = $this->car_parking_status(114, $floor_id);

		$temp[]   = $color114;

		$data['sensor_114'] = "<div class=circle style=background:$color114></div>";

		/********************************
			SENSOR ID 115
		********************************/

		$color115 = $this->car_parking_status(115, $floor_id);

		$temp[]   = $color115;

		$data['sensor_115'] = "<div class=circle style=background:$color115></div>";

		/********************************
			SENSOR ID 116
		********************************/

		$color116 = $this->car_parking_status(116, $floor_id);

		$temp[]   = $color116;

		$data['sensor_116'] = "<div class=circle style=background:$color116></div>";

        /********************************
			SENSOR ID 117
		********************************/

		$color117 = $this->car_parking_status(117, $floor_id);

		$temp[]   = $color117;

		$data['sensor_117'] = "<div class=circle style=background:$color117></div>";

		/********************************
			SENSOR ID 118
		********************************/

		$color118 = $this->car_parking_status(118, $floor_id);

		$temp[]   = $color118;

		$data['sensor_118'] = "<div class=circle style=background:$color118></div>";

		/********************************
			SENSOR ID 119
		********************************/

		$color119 = $this->car_parking_status(119, $floor_id);

		$temp[]   = $color119;

		$data['sensor_119'] = "<div class=circle style=background:$color119></div>";

		/********************************
			SENSOR ID 120
		********************************/

		$color120 = $this->car_parking_status(120, $floor_id);

		$temp[]   = $color120;

		$data['sensor_120'] = "<div class=circle style=background:$color120></div>";

		/********************************
			SENSOR ID 121
		********************************/

		$color121 = $this->car_parking_status(121, $floor_id);

		$temp[]   = $color121;

		$data['sensor_121'] = "<div class=circle style=background:$color121></div>";

		/********************************
			SENSOR ID 122
		********************************/

		$color122 = $this->car_parking_status(122, $floor_id);

		$temp[]   = $color122;

		$data['sensor_122'] = "<div class=circle style=background:$color122></div>";

		/********************************
			SENSOR ID 123
		********************************/

		$color123 = $this->car_parking_status(123, $floor_id);

		$temp[]   = $color123;

		$data['sensor_123'] = "<div class=circle style=background:$color123></div>";

		/********************************
			SENSOR ID 124
		********************************/

		$color124 = $this->car_parking_status(124, $floor_id);

		$temp[]   = $color124;

		$data['sensor_124'] = "<div class=circle style=background:$color124></div>";

		/********************************
			SENSOR ID 125
		********************************/

		$color125 = $this->car_parking_status(125, $floor_id);

		$temp[]   = $color125;

		$data['sensor_125'] = "<div class=circle style=background:$color125></div>";

		/********************************
			SENSOR ID 126
		********************************/

		$color126 = $this->car_parking_status(126, $floor_id);

		$temp[]   = $color126;

		$data['sensor_126'] = "<div class=circle style=background:$color126></div>";

		/********************************
			SENSOR ID 127
		********************************/

		$color127 = $this->car_parking_status(127, $floor_id);

		$temp[]   = $color127;

		$data['sensor_127'] = "<div class=circle style=background:$color127></div>";

		/********************************
			SENSOR ID 128
		********************************/

		$color128 = $this->car_parking_status(128, $floor_id);

		$temp[] = $color128;

		$data['sensor_128'] = "<div class=circle style=background:$color128></div>";

		/********************************
			SENSOR ID 129
		********************************/

		$color129 = $this->car_parking_status(129, $floor_id);

		$temp[]   = $color129;

		$data['sensor_129'] = "<div class=circle style=background:$color129></div>";

		/********************************
			SENSOR ID 130
		********************************/

		$color130 = $this->car_parking_status(130, $floor_id);

		$temp[]   = $color130;

		$data['sensor_130'] = "<div class=circle style=background:$color130></div>";

		/********************************
			SENSOR ID 131
		********************************/

		$color131 = $this->car_parking_status(131, $floor_id);

		$temp[]   = $color131;

		$data['sensor_131'] = "<div class=circle style=background:$color131></div>";

		/********************************
			SENSOR ID 132
		********************************/

		$color132 = $this->car_parking_status(132, $floor_id);

		$temp[]   = $color132;

		$data['sensor_132'] = "<div class=circle style=background:$color132></div>";

        /********************************
			SENSOR ID 133
		********************************/

		$color133 = $this->car_parking_status(133, $floor_id);

		$temp[]   = $color133;

		$data['sensor_133'] = "<div class=circle style=background:$color133></div>";

        /********************************
			SENSOR ID 134
		********************************/

		$color134 = $this->car_parking_status(134, $floor_id);

		$temp[]   = $color134;

		$data['sensor_134'] = "<div class=circle style=background:$color134></div>";

		/********************************
			SENSOR ID 135
		********************************/

		$color135 = $this->car_parking_status(135, $floor_id);

		$temp[]   = $color135;

		$data['sensor_135'] = "<div class=circle style=background:$color135></div>";

		/********************************
			SENSOR ID 136
		********************************/

		$color136 = $this->car_parking_status(136, $floor_id);

		$temp[]   = $color136;

		$data['sensor_136'] = "<div class=circle style=background:$color136></div>";

		/********************************
			SENSOR ID 137
		********************************/

		$color137 = $this->car_parking_status(137, $floor_id);

		$temp[]   = $color137;

		$data['sensor_137'] = "<div class=circle style=background:$color137></div>";

		/********************************
			SENSOR ID 138
		********************************/

		$color138 = $this->car_parking_status(138, $floor_id);

		$temp[]   = $color138;

		$data['sensor_138'] = "<div class=circle style=background:$color138></div>";

		/********************************
			SENSOR ID 139
		********************************/

		$color139 = $this->car_parking_status(139, $floor_id);

		$temp[]   = $color139;

		$data['sensor_139'] = "<div class=circle style=background:$color139></div>";

		/********************************
			SENSOR ID 140
		********************************/

		$color140 = $this->car_parking_status(140, $floor_id);

		$temp[]   = $color140;

		$data['sensor_140'] = "<div class=circle style=background:$color140></div>";

		/********************************
			SENSOR ID 141
		********************************/

		$color141 = $this->car_parking_status(141, $floor_id);

		$temp[]   = $color141;

		$data['sensor_141'] = "<div class=circle style=background:$color141></div>";

		/********************************
			SENSOR ID 142
		********************************/

		$color142 = $this->car_parking_status(142, $floor_id);

		$temp[]   = $color142;

		$data['sensor_142'] = "<div class=circle style=background:$color142></div>";

		/********************************
			SENSOR ID 143
		********************************/

		$color143 = $this->car_parking_status(143, $floor_id);

		$temp[]   = $color143;

		$data['sensor_143'] = "<div class=circle style=background:$color143></div>";


		$this->load->view('header');
		$this->load->view('view_floor_ 3', $data);
		$this->load->view('footer');
}

/************************************
  Parking 3 End
*************************************/




public function summary(){

		$this->load->view('header');
		$this->load->view('summary_view_floor');
		$this->load->view('footer');
}


/*Using for summary view count information Start*/


public function count_view_dashboard($floor_id){

	    $temp=array();
		/********************************
		SENSOR ID SET HERE
		********************************/


		/********************************
			SENSOR ID 1
		********************************/
   		$color1 = $this->car_parking_status(1, $floor_id);

		$temp[] = $color1;

		$data['sensor_1'] = "<div class=circle style=background:$color1></div>";

        /********************************
		    SENSOR ID 2
		********************************/
   
   		$color2 = $this->car_parking_status(2, $floor_id);

		$temp[] = $color2;

		$data['sensor_2'] = "<div class=circle style=background:$color2></div>";

        /********************************
			SENSOR ID 3
		********************************/

		$color3 = $this->car_parking_status(3, $floor_id);

		$temp[] = $color3;

		$data['sensor_3'] = "<div class=circle style=background:$color3></div>";

		/********************************
			SENSOR ID 4
		********************************/

		$color4 = $this->car_parking_status(4, $floor_id);

		$temp[] = $color4;

		$data['sensor_4'] = "<div class=circle style=background:$color4></div>";
		
		/********************************
			SENSOR ID 5
		********************************/

		$color5 = $this->car_parking_status(5, $floor_id);

		$temp[] = $color5;

		$data['sensor_5'] = "<div class=circle style=background:$color5></div>";

		/********************************
			SENSOR ID 6
		********************************/

		$color6 = $this->car_parking_status(6, $floor_id);

		$temp[] = $color6;

		$data['sensor_6'] = "<div class=circle style=background:$color6></div>";

		/********************************
			SENSOR ID 7
		********************************/

		$color7 = $this->car_parking_status(7, $floor_id);

		$temp[] = $color7;

		$data['sensor_7'] = "<div class=circle style=background:$color7></div>";

		/********************************
			SENSOR ID 8
		********************************/

		$color8 = $this->car_parking_status(8, $floor_id);

		$temp[] = $color8;

		$data['sensor_8'] = "<div class=circle style=background:$color8></div>";

        /********************************
			SENSOR ID 9
		********************************/

		$color9 = $this->car_parking_status(9, $floor_id);

		$temp[] = $color9;

		$data['sensor_9'] = "<div class=circle style=background:$color9></div>";

		/********************************
			SENSOR ID 10
		********************************/

		$color10 = $this->car_parking_status(10, $floor_id);

		$temp[]  = $color10;

		$data['sensor_10'] = "<div class=circle style=background:$color10></div>";

		/********************************
			SENSOR ID 11
		********************************/

		$color11 = $this->car_parking_status(11, $floor_id);

		$temp[]  = $color11;

		$data['sensor_11'] = "<div class=circle style=background:$color11></div>";

		/********************************
			SENSOR ID 12
		********************************/

		$color12 = $this->car_parking_status(12, $floor_id);

		$temp[]  = $color12;

		$data['sensor_12'] = "<div class=circle style=background:$color12></div>";

		/********************************
			SENSOR ID 13
		********************************/

		$color13 = $this->car_parking_status(13, $floor_id);

		$temp[]  = $color13;

		$data['sensor_13'] = "<div class=circle style=background:$color13></div>";

		/********************************
			SENSOR ID 14
		********************************/

		$color14 = $this->car_parking_status(14, $floor_id);

		$temp[]  = $color14;

		$data['sensor_14'] = "<div class=circle style=background:$color14></div>";

		/********************************
			SENSOR ID 15
		********************************/

		$color15 = $this->car_parking_status(15, $floor_id);

		$temp[]  = $color15;

		$data['sensor_15'] = "<div class=circle style=background:$color15></div>";

		/********************************
			SENSOR ID 16
		********************************/

		$color16 = $this->car_parking_status(16, $floor_id);

		$temp[]  = $color16;

		$data['sensor_16'] = "<div class=circle style=background:$color16></div>";

		/********************************
			SENSOR ID 17
		********************************/

		$color17 = $this->car_parking_status(17, $floor_id);

		$temp[]  = $color17;

		$data['sensor_17'] = "<div class=circle style=background:$color17></div>";

		/********************************
			SENSOR ID 18
		********************************/

		$color18 = $this->car_parking_status(18, $floor_id);

		$temp[]  = $color18;

		$data['sensor_18'] = "<div class=circle style=background:$color18></div>";

		/********************************
			SENSOR ID 19
		********************************/

		$color19 = $this->car_parking_status(19, $floor_id);

		$temp[]  = $color19;

		$data['sensor_19'] = "<div class=circle style=background:$color19></div>";

		/********************************
			SENSOR ID 20
		********************************/

		$color20 = $this->car_parking_status(20, $floor_id);

		$temp[]  = $color20;

		$data['sensor_20'] = "<div class=circle style=background:$color20></div>";

		/********************************
			SENSOR ID 21
		********************************/

		$color21 = $this->car_parking_status(21, $floor_id);

		$temp[]  = $color21;

		$data['sensor_21'] = "<div class=circle style=background:$color21></div>";

		/********************************
			SENSOR ID 22
		********************************/

		$color22 = $this->car_parking_status(22, $floor_id);

		$temp[]  = $color22;

		$data['sensor_22'] = "<div class=circle style=background:$color22></div>";

		/********************************
			SENSOR ID 23
		********************************/

		$color23 = $this->car_parking_status(23, $floor_id);

		$temp[]  = $color23;

		$data['sensor_23'] = "<div class=circle style=background:$color23></div>";

		/********************************
			SENSOR ID 24
		********************************/

		$color24 = $this->car_parking_status(24, $floor_id);

		$temp[]  = $color24;

		$data['sensor_24'] = "<div class=circle style=background:$color24></div>";

		/********************************
			SENSOR ID 25
		********************************/

		$color25 = $this->car_parking_status(25, $floor_id);

		$temp[] = $color25;

		$data['sensor_25'] = "<div class=circle style=background:$color25></div>";

		/********************************
			SENSOR ID 26
		********************************/

		$color26 = $this->car_parking_status(26, $floor_id);

		$temp[]  = $color26;

		$data['sensor_26'] = "<div class=circle style=background:$color26></div>";

		/********************************
			SENSOR ID 27
		********************************/

		$color27 = $this->car_parking_status(27, $floor_id);

		$temp[] = $color27;

		$data['sensor_27'] = "<div class=circle style=background:$color27></div>";

		/********************************
			SENSOR ID 28
		********************************/

		$color28 = $this->car_parking_status(28, $floor_id);

		$temp[] = $color28;

		$data['sensor_28'] = "<div class=circle style=background:$color28></div>";

		/********************************
			SENSOR ID 29
		********************************/

		$color29 = $this->car_parking_status(29, $floor_id);

		$temp[]  = $color29;

		$data['sensor_29'] = "<div class=circle style=background:$color29></div>";

		/********************************
			SENSOR ID 30
		********************************/

	    $color30 = $this->car_parking_status(30, $floor_id);

		$temp[]  = $color30;

		$data['sensor_30'] = "<div class=circle style=background:$color30></div>";

		/********************************
			SENSOR ID 31
		********************************/

		$color31 = $this->car_parking_status(31, $floor_id);

		$temp[] = $color31;

		$data['sensor_31'] = "<div class=circle style=background:$color31></div>";

		/********************************
			SENSOR ID 32
		********************************/

		$color32 = $this->car_parking_status(32, $floor_id);

		$temp[]  = $color32;

		$data['sensor_32'] = "<div class=circle style=background:$color32></div>";

		/********************************
			SENSOR ID 33
		********************************/

		$color33 = $this->car_parking_status(33, $floor_id);

		$temp[]  = $color33;

		$data['sensor_33'] = "<div class=circle style=background:$color33></div>";

		/********************************
			SENSOR ID 34
		********************************/

		$color34 = $this->car_parking_status(34, $floor_id);

		$temp[]  = $color34;

		$data['sensor_34'] = "<div class=circle style=background:$color34></div>";

		/********************************
			SENSOR ID 35
		********************************/

		$color35 = $this->car_parking_status(35, $floor_id);

		$temp[]  = $color35;

		$data['sensor_35'] = "<div class=circle style=background:$color35></div>";

		/********************************
			SENSOR ID 36
		********************************/

		$color36 = $this->car_parking_status(36, $floor_id);

		$temp[]  = $color36;

		$data['sensor_36'] = "<div class=circle style=background:$color36></div>";

		/********************************
			SENSOR ID 37
		********************************/

		$color37 = $this->car_parking_status(37, $floor_id);

		$temp[]  = $color37;

		$data['sensor_37'] = "<div class=circle style=background:$color37></div>";

		/********************************
			SENSOR ID 38
		********************************/

		$color38 = $this->car_parking_status(38, $floor_id);

		$temp[]  = $color38;

		$data['sensor_38'] = "<div class=circle style=background:$color38></div>";

		/********************************
			SENSOR ID 39
		********************************/

		$color39 = $this->car_parking_status(39, $floor_id);

		$temp[]  = $color39;

		$data['sensor_39'] = "<div class=circle style=background:$color39></div>";

		/********************************
			SENSOR ID 40
		********************************/

		$color40 = $this->car_parking_status(40, $floor_id);

		$temp[]  = $color40;

		$data['sensor_40'] = "<div class=circle style=background:$color40></div>";

		/********************************
			SENSOR ID 41
		********************************/

		$color41 = $this->car_parking_status(41, $floor_id);

		$temp[]  = $color41;

		$data['sensor_41'] = "<div class=circle style=background:$color41></div>";

		/********************************
			SENSOR ID 42
		********************************/

		$color42 = $this->car_parking_status(42, $floor_id);

		$temp[]  = $color42;

		$data['sensor_42'] = "<div class=circle style=background:$color42></div>";

		/********************************
			SENSOR ID 43
		********************************/

		$color43 = $this->car_parking_status(43, $floor_id);

		$temp[] = $color43;

		$data['sensor_43'] = "<div class=circle style=background:$color43></div>";

		/********************************
			SENSOR ID 44
		********************************/

		$color44 = $this->car_parking_status(44, $floor_id);

		$temp[]  = $color44;

		$data['sensor_44'] = "<div class=circle style=background:$color44></div>";

		/********************************
			SENSOR ID 45
		********************************/

		$color45 = $this->car_parking_status(45, $floor_id);

		$temp[]  = $color45;

		$data['sensor_45'] = "<div class=circle style=background:$color45></div>";

		/********************************
			SENSOR ID 46
		********************************/

		$color46 = $this->car_parking_status(46, $floor_id);

		$temp[]  = $color46;

		$data['sensor_46'] = "<div class=circle style=background:$color46></div>";

		/********************************
			SENSOR ID 47
		********************************/

		$color47 = $this->car_parking_status(47, $floor_id);

		$temp[]  = $color47;

		$data['sensor_47'] = "<div class=circle style=background:$color47></div>";

		/********************************
			SENSOR ID 48
		********************************/

		$color48 = $this->car_parking_status(48, $floor_id);

		$temp[]  = $color48;

		$data['sensor_48'] = "<div class=circle style=background:$color48></div>";

		/********************************
			SENSOR ID 49
		********************************/

		$color49 = $this->car_parking_status(49, $floor_id);

		$temp[]  = $color49;

		$data['sensor_49'] = "<div class=circle style=background:$color49></div>";

		/********************************
			SENSOR ID 50
		********************************/

		$color50 = $this->car_parking_status(50, $floor_id);

		$temp[]  = $color50;

		$data['sensor_50'] = "<div class=circle style=background:$color50></div>";

		/********************************
			SENSOR ID 51
		********************************/

		$color51 = $this->car_parking_status(51, $floor_id);

		$temp[]  = $color51;

		$data['sensor_51'] = "<div class=circle style=background:$color51></div>";

		/********************************
			SENSOR ID 52
		********************************/

		$color52 = $this->car_parking_status(52, $floor_id);

		$temp[]  = $color52;

		$data['sensor_52'] = "<div class=circle style=background:$color52></div>";

		/********************************
			SENSOR ID 53
		********************************/

		$color53 = $this->car_parking_status(53, $floor_id);

		$temp[]  = $color53;

		$data['sensor_53'] = "<div class=circle style=background:$color53></div>";

		/********************************
			SENSOR ID 54
		********************************/

		$color54 = $this->car_parking_status(54, $floor_id);

		$temp[]  = $color54;

		$data['sensor_54'] = "<div class=circle style=background:$color54></div>";

		/********************************
			SENSOR ID 55
		********************************/

		$color55 = $this->car_parking_status(55, $floor_id);

		$temp[]  = $color55;

		$data['sensor_55'] = "<div class=circle style=background:$color55></div>";

		/********************************
			SENSOR ID 56
		********************************/

		$color56 = $this->car_parking_status(56, $floor_id);

		$temp[]  = $color56;

		$data['sensor_56'] = "<div class=circle style=background:$color56></div>";

		/********************************
			SENSOR ID 57
		********************************/

		$color57 = $this->car_parking_status(57, $floor_id);

		$temp[]  = $color57;

		$data['sensor_57'] = "<div class=circle style=background:$color57></div>";

		/********************************
			SENSOR ID 58
		********************************/

		$color58 = $this->car_parking_status(58, $floor_id);

		$temp[]  = $color58;

		$data['sensor_58'] = "<div class=circle style=background:$color58></div>";

		/********************************
			SENSOR ID 59
		********************************/

		$color59 = $this->car_parking_status(59, $floor_id);

		$temp[]  = $color59;

		$data['sensor_59'] = "<div class=circle style=background:$color59></div>";

		/********************************
			SENSOR ID 60
		********************************/

		$color60 = $this->car_parking_status(60, $floor_id);

		$temp[] = $color60;

		$data['sensor_60'] = "<div class=circle style=background:$color60></div>";

		/********************************
			SENSOR ID 61
		********************************/

		$color61 = $this->car_parking_status(61, $floor_id);

		$temp[]  = $color61;

		$data['sensor_61'] = "<div class=circle style=background:$color61></div>";

		/********************************
			SENSOR ID 62
		********************************/

		$color62 = $this->car_parking_status(62, $floor_id);

		$temp[]  = $color62;

		$data['sensor_62'] = "<div class=circle style=background:$color62></div>";

		/********************************
			SENSOR ID 63
		********************************/

		$color63 = $this->car_parking_status(63, $floor_id);

		$temp[]  = $color63;

		$data['sensor_63'] = "<div class=circle style=background:$color63></div>";

		/********************************
			SENSOR ID 64
		********************************/

		$color64 = $this->car_parking_status(64, $floor_id);

		$temp[]  = $color64;

		$data['sensor_64'] = "<div class=circle style=background:$color64></div>";

		/********************************
			SENSOR ID 65
		********************************/

		$color65 = $this->car_parking_status(65, $floor_id);

		$temp[] = $color65;

		$data['sensor_65'] = "<div class=circle style=background:$color65></div>";

		/********************************
			SENSOR ID 66
		********************************/

		$color66 = $this->car_parking_status(66, $floor_id);

		$temp[]  = $color66;

		$data['sensor_66'] = "<div class=circle style=background:$color66></div>";

		/********************************
			SENSOR ID 67
		********************************/

		$color67 = $this->car_parking_status(67, $floor_id);

		$temp[]  = $color67;

		$data['sensor_67'] = "<div class=circle style=background:$color67></div>";

		/********************************
			SENSOR ID 68
		********************************/

		$color68 = $this->car_parking_status(68, $floor_id);

		$temp[]  = $color68;

		$data['sensor_68'] = "<div class=circle style=background:$color68></div>";

		/********************************
			SENSOR ID 69
		********************************/

		$color69 = $this->car_parking_status(69, $floor_id);

		$temp[]  = $color69;

		$data['sensor_69'] = "<div class=circle style=background:$color69></div>";

		/********************************
			SENSOR ID 70
		********************************/

		$color70 = $this->car_parking_status(70, $floor_id);

		$temp[]  = $color70;

		$data['sensor_70'] = "<div class=circle style=background:$color70></div>";

		/********************************
			SENSOR ID 71
		********************************/

		$color71 = $this->car_parking_status(71, $floor_id);

		$temp[]  = $color71;

		$data['sensor_71'] = "<div class=circle style=background:$color71></div>";

		/********************************
			SENSOR ID 72
		********************************/

		$color72 = $this->car_parking_status(72, $floor_id);

		$temp[]  = $color72;

		$data['sensor_72'] = "<div class=circle style=background:$color72></div>";

		/********************************
			SENSOR ID 73
		********************************/

		$color73 = $this->car_parking_status(73, $floor_id);

		$temp[]  = $color73;

		$data['sensor_73'] = "<div class=circle style=background:$color73></div>";

		/********************************
			SENSOR ID 74
		********************************/

		$color74 = $this->car_parking_status(74, $floor_id);

		$temp[]  = $color74;

		$data['sensor_74'] = "<div class=circle style=background:$color74></div>";

		/********************************
			SENSOR ID 75
		********************************/

		$color75 = $this->car_parking_status(75, $floor_id);

		$temp[]  = $color75;

		$data['sensor_75'] = "<div class=circle style=background:$color75></div>";

		/********************************
			SENSOR ID 76
		********************************/

		$color76 = $this->car_parking_status(76, $floor_id);

		$temp[]  = $color76;

		$data['sensor_76'] = "<div class=circle style=background:$color76></div>";

		/********************************
			SENSOR ID 77
		********************************/

		$color77 = $this->car_parking_status(77, $floor_id);

		$temp[]  = $color77;

		$data['sensor_77'] = "<div class=circle style=background:$color77></div>";

		/********************************
			SENSOR ID 78
		********************************/

		$color78 = $this->car_parking_status(78, $floor_id);

		$temp[]  = $color78;

		$data['sensor_78'] = "<div class=circle style=background:$color78></div>";

		/********************************
			SENSOR ID 79
		********************************/

		$color79 = $this->car_parking_status(79, $floor_id);

		$temp[]  = $color79;

		$data['sensor_79'] = "<div class=circle style=background:$color79></div>";

		/********************************
			SENSOR ID 80
		********************************/

		$color80 = $this->car_parking_status(80, $floor_id);

		$temp[]  = $color80;

		$data['sensor_80'] = "<div class=circle style=background:$color80></div>";

		/********************************
			SENSOR ID 81
		********************************/

		$color81 = $this->car_parking_status(81, $floor_id);

		$temp[]  = $color81;

		$data['sensor_81'] = "<div class=circle style=background:$color81></div>";

		/********************************
			SENSOR ID 82
		********************************/

		$color82 = $this->car_parking_status(82, $floor_id);

		$temp[]  = $color82;

		$data['sensor_82'] = "<div class=circle style=background:$color82></div>";

		/********************************
			SENSOR ID 83
		********************************/

		$color83 = $this->car_parking_status(83, $floor_id);

		$temp[]  = $color83;

		$data['sensor_83'] = "<div class=circle style=background:$color83></div>";

		/********************************
			SENSOR ID 84
		********************************/

		$color84 = $this->car_parking_status(84, $floor_id);

		$temp[] = $color84;

		$data['sensor_84'] = "<div class=circle style=background:$color84></div>";

		/********************************
			SENSOR ID 85
		********************************/

		$color85 = $this->car_parking_status(85, $floor_id);

		$temp[] = $color85;

		$data['sensor_85'] = "<div class=circle style=background:$color85></div>";

		/********************************
			SENSOR ID 86
		********************************/

		$color86 = $this->car_parking_status(86, $floor_id);

		$temp[]  = $color86;

		$data['sensor_86'] = "<div class=circle style=background:$color86></div>";

		/********************************
			SENSOR ID 87
		********************************/

		$color87 = $this->car_parking_status(87, $floor_id);

		$temp[]  = $color87;

		$data['sensor_87'] = "<div class=circle style=background:$color87></div>";

		/********************************
			SENSOR ID 88
		********************************/

		$color88 = $this->car_parking_status(88, $floor_id);

		$temp[]  = $color88;

		$data['sensor_88'] = "<div class=circle style=background:$color88></div>";

		/********************************
			SENSOR ID 89
		********************************/

		$color89 = $this->car_parking_status(89, $floor_id);

		$temp[] = $color89;

		$data['sensor_89'] = "<div class=circle style=background:$color89></div>";

		/********************************
			SENSOR ID 90
		********************************/

		$color90 = $this->car_parking_status(90, $floor_id);

		$temp[]  = $color90;

		$data['sensor_90'] = "<div class=circle style=background:$color90></div>";

		/********************************
			SENSOR ID 91
		********************************/

		$color91 = $this->car_parking_status(91, $floor_id);

		$temp[]  = $color91;

		$data['sensor_91'] = "<div class=circle style=background:$color91></div>";

		/********************************
			SENSOR ID 92
		********************************/

		$color92 = $this->car_parking_status(92, $floor_id);

		$temp[]  = $color92;

		$data['sensor_92'] = "<div class=circle style=background:$color92></div>";

		/********************************
			SENSOR ID 93
		********************************/

		$color93 = $this->car_parking_status(93, $floor_id);

		$temp[]  = $color93;

		$data['sensor_93'] = "<div class=circle style=background:$color93></div>";

		/********************************
			SENSOR ID 94
		********************************/

		$color94 = $this->car_parking_status(94, $floor_id);

		$temp[]  = $color94;

		$data['sensor_94'] = "<div class=circle style=background:$color94></div>";

		/********************************
			SENSOR ID 95
		********************************/

		$color95 = $this->car_parking_status(95, $floor_id);

		$temp[] = $color95;

		$data['sensor_95'] = "<div class=circle style=background:$color95></div>";

		/********************************
			SENSOR ID 96
		********************************/

		$color96 = $this->car_parking_status(96, $floor_id);

		$temp[] = $color96;

		$data['sensor_96'] = "<div class=circle style=background:$color96></div>";

		/********************************
			SENSOR ID 97
		********************************/

		$color97 = $this->car_parking_status(97, $floor_id);

		$temp[] = $color97;

		$data['sensor_97'] = "<div class=circle style=background:$color97></div>";

		/********************************
			SENSOR ID 98
		********************************/

		$color98 = $this->car_parking_status(98, $floor_id);

		$temp[]  = $color98;

		$data['sensor_98'] = "<div class=circle style=background:$color98></div>";

		/********************************
			SENSOR ID 99
		********************************/

		$color99 = $this->car_parking_status(99, $floor_id);

		$temp[]  = $color99;

		$data['sensor_99'] = "<div class=circle style=background:$color99></div>";

		/********************************
			SENSOR ID 100
		********************************/

		$color100 = $this->car_parking_status(100, $floor_id);

		$temp[]   = $color100;

		$data['sensor_100'] = "<div class=circle style=background:$color100></div>";

		/********************************
			SENSOR ID 101
		********************************/

		$color101 = $this->car_parking_status(101, $floor_id);

		$temp[]   = $color101;

		$data['sensor_101'] = "<div class=circle style=background:$color101></div>";

		/********************************
			SENSOR ID 102
		********************************/

		$color102 = $this->car_parking_status(102, $floor_id);

		$temp[]   = $color102;

		$data['sensor_102'] = "<div class=circle style=background:$color102></div>";

		/********************************
			SENSOR ID 103
		********************************/

		$color103 = $this->car_parking_status(103, $floor_id);

		$temp[]   = $color103;

		$data['sensor_103'] = "<div class=circle style=background:$color103></div>";

		/********************************
			SENSOR ID 104
		********************************/

		$color104 = $this->car_parking_status(104, $floor_id);

		$temp[]   = $color104;

		$data['sensor_104'] = "<div class=circle style=background:$color104></div>";

		/********************************
			SENSOR ID 105
		********************************/

		$color105 = $this->car_parking_status(105, $floor_id);

		$temp[]   = $color105;

		$data['sensor_105'] = "<div class=circle style=background:$color105></div>";

		/********************************
			SENSOR ID 106
		********************************/

		$color106 = $this->car_parking_status(106, $floor_id);

		$temp[]   = $color106;

		$data['sensor_106'] = "<div class=circle style=background:$color106></div>";

		/********************************
			SENSOR ID 107
		********************************/

		$color107 = $this->car_parking_status(107, $floor_id);

		$temp[]   = $color107;

		$data['sensor_107'] = "<div class=circle style=background:$color107></div>";

		/********************************
			SENSOR ID 108
		********************************/

		$color108 = $this->car_parking_status(108, $floor_id);

		$temp[]   = $color108;

		$data['sensor_108'] = "<div class=circle style=background:$color108></div>";

		/********************************
			SENSOR ID 109
		********************************/

		$color109 = $this->car_parking_status(109, $floor_id);

		$temp[]   = $color109;

		$data['sensor_109'] = "<div class=circle style=background:$color109></div>";

		/********************************
			SENSOR ID 110
		********************************/

		$color110 = $this->car_parking_status(110, $floor_id);

		$temp[]   = $color110;

		$data['sensor_110'] = "<div class=circle style=background:$color110></div>";

		/********************************
			SENSOR ID 111
		********************************/

		$color111 = $this->car_parking_status(111, $floor_id);

		$temp[]   = $color111;

		$data['sensor_111'] = "<div class=circle style=background:$color111></div>";

		/********************************
			SENSOR ID 112
		********************************/

		$color112 = $this->car_parking_status(112, $floor_id);

		$temp[]   = $color112;

		$data['sensor_112'] = "<div class=circle style=background:$color112></div>";

		/********************************
			SENSOR ID 113
		********************************/

		$color113 = $this->car_parking_status(113, $floor_id);

		$temp[]   = $color113;

		$data['sensor_113'] = "<div class=circle style=background:$color113></div>";

		/********************************
			SENSOR ID 114
		********************************/

		$color114 = $this->car_parking_status(114, $floor_id);

		$temp[]   = $color114;

		$data['sensor_114'] = "<div class=circle style=background:$color114></div>";

		/********************************
			SENSOR ID 115
		********************************/

		$color115 = $this->car_parking_status(115, $floor_id);

		$temp[]   = $color115;

		$data['sensor_115'] = "<div class=circle style=background:$color115></div>";

		/********************************
			SENSOR ID 116
		********************************/

		$color116 = $this->car_parking_status(116, $floor_id);

		$temp[]   = $color116;

		$data['sensor_116'] = "<div class=circle style=background:$color116></div>";

        /********************************
			SENSOR ID 117
		********************************/

		$color117 = $this->car_parking_status(117, $floor_id);

		$temp[]   = $color117;

		$data['sensor_117'] = "<div class=circle style=background:$color117></div>";

		/********************************
			SENSOR ID 118
		********************************/

		$color118 = $this->car_parking_status(118, $floor_id);

		$temp[]   = $color118;

		$data['sensor_118'] = "<div class=circle style=background:$color118></div>";

		/********************************
			SENSOR ID 119
		********************************/

		$color119 = $this->car_parking_status(119, $floor_id);

		$temp[]   = $color119;

		$data['sensor_119'] = "<div class=circle style=background:$color119></div>";

		/********************************
			SENSOR ID 120
		********************************/

		$color120 = $this->car_parking_status(120, $floor_id);

		$temp[]   = $color120;

		$data['sensor_120'] = "<div class=circle style=background:$color120></div>";

		/********************************
			SENSOR ID 121
		********************************/

		$color121 = $this->car_parking_status(121, $floor_id);

		$temp[]   = $color121;

		$data['sensor_121'] = "<div class=circle style=background:$color121></div>";

		/********************************
			SENSOR ID 122
		********************************/

		$color122 = $this->car_parking_status(122, $floor_id);

		$temp[]   = $color122;

		$data['sensor_122'] = "<div class=circle style=background:$color122></div>";

		/********************************
			SENSOR ID 123
		********************************/

		$color123 = $this->car_parking_status(123, $floor_id);

		$temp[]   = $color123;

		$data['sensor_123'] = "<div class=circle style=background:$color123></div>";

		/********************************
			SENSOR ID 124
		********************************/

		$color124 = $this->car_parking_status(124, $floor_id);

		$temp[]   = $color124;

		$data['sensor_124'] = "<div class=circle style=background:$color124></div>";

		/********************************
			SENSOR ID 125
		********************************/

		$color125 = $this->car_parking_status(125, $floor_id);

		$temp[]   = $color125;

		$data['sensor_125'] = "<div class=circle style=background:$color125></div>";

		/********************************
			SENSOR ID 126
		********************************/

		$color126 = $this->car_parking_status(126, $floor_id);

		$temp[]   = $color126;

		$data['sensor_126'] = "<div class=circle style=background:$color126></div>";

		/********************************
			SENSOR ID 127
		********************************/

		$color127 = $this->car_parking_status(127, $floor_id);

		$temp[]   = $color127;

		$data['sensor_127'] = "<div class=circle style=background:$color127></div>";

		/********************************
			SENSOR ID 128
		********************************/

		$color128 = $this->car_parking_status(128, $floor_id);

		$temp[] = $color128;

		$data['sensor_128'] = "<div class=circle style=background:$color128></div>";

		/********************************
			SENSOR ID 129
		********************************/

		$color129 = $this->car_parking_status(129, $floor_id);

		$temp[]   = $color129;

		$data['sensor_129'] = "<div class=circle style=background:$color129></div>";

		/********************************
			SENSOR ID 130
		********************************/

		$color130 = $this->car_parking_status(130, $floor_id);

		$temp[]   = $color130;

		$data['sensor_130'] = "<div class=circle style=background:$color130></div>";

		/********************************
			SENSOR ID 131
		********************************/

		$color131 = $this->car_parking_status(131, $floor_id);

		$temp[]   = $color131;

		$data['sensor_131'] = "<div class=circle style=background:$color131></div>";

		/********************************
			SENSOR ID 132
		********************************/

		$color132 = $this->car_parking_status(132, $floor_id);

		$temp[]   = $color132;

		$data['sensor_132'] = "<div class=circle style=background:$color132></div>";

        /********************************
			SENSOR ID 133
		********************************/

		$color133 = $this->car_parking_status(133, $floor_id);

		$temp[]   = $color133;

		$data['sensor_133'] = "<div class=circle style=background:$color133></div>";

        /********************************
			SENSOR ID 134
		********************************/

		$color134 = $this->car_parking_status(134, $floor_id);

		$temp[]   = $color134;

		$data['sensor_134'] = "<div class=circle style=background:$color134></div>";

		/********************************
			SENSOR ID 135
		********************************/

		$color135 = $this->car_parking_status(135, $floor_id);

		$temp[]   = $color135;

		$data['sensor_135'] = "<div class=circle style=background:$color135></div>";

		/********************************
			SENSOR ID 136
		********************************/

		$color136 = $this->car_parking_status(136, $floor_id);

		$temp[]   = $color136;

		$data['sensor_136'] = "<div class=circle style=background:$color136></div>";

		/********************************
			SENSOR ID 137
		********************************/

		$color137 = $this->car_parking_status(137, $floor_id);

		$temp[]   = $color137;

		$data['sensor_137'] = "<div class=circle style=background:$color137></div>";

		/********************************
			SENSOR ID 138
		********************************/

		$color138 = $this->car_parking_status(138, $floor_id);

		$temp[]   = $color138;

		$data['sensor_138'] = "<div class=circle style=background:$color138></div>";

		/********************************
			SENSOR ID 139
		********************************/

		$color139 = $this->car_parking_status(139, $floor_id);

		$temp[]   = $color139;

		$data['sensor_139'] = "<div class=circle style=background:$color139></div>";

		/********************************
			SENSOR ID 140
		********************************/

		$color140 = $this->car_parking_status(140, $floor_id);

		$temp[]   = $color140;

		$data['sensor_140'] = "<div class=circle style=background:$color140></div>";

		/********************************
			SENSOR ID 141
		********************************/

		$color141 = $this->car_parking_status(141, $floor_id);

		$temp[]   = $color141;

		$data['sensor_141'] = "<div class=circle style=background:$color141></div>";

		/********************************
			SENSOR ID 142
		********************************/

		$color142 = $this->car_parking_status(142, $floor_id);

		$temp[]   = $color142;

		$data['sensor_142'] = "<div class=circle style=background:$color142></div>";

		/********************************
			SENSOR ID 143
		********************************/

		$color143 = $this->car_parking_status(143, $floor_id);

		$temp[]   = $color143;

		$data['sensor_143'] = "<div class=circle style=background:$color143></div>";

       /********************************
			SENSOR ID 144
		********************************/

		$color144 = $this->car_parking_status(144, $floor_id);

		$temp[]   = $color144;

		$data['sensor_144'] = "<div class=circle style=background:$color144></div>";

        /********************************
			SENSOR ID 145
		********************************/

		$color145 = $this->car_parking_status(145, $floor_id);

		$temp[]   = $color145;

		$data['sensor_145'] = "<div class=circle style=background:$color145></div>";

		/********************************
			SENSOR ID 146
		********************************/

		$color146 = $this->car_parking_status(146, $floor_id);

		$temp[]   = $color146;

		$data['sensor_146'] = "<div class=circle style=background:$color146></div>";

		/********************************
			SENSOR ID 147
		********************************/

		$color147 = $this->car_parking_status(147, $floor_id);

		$temp[] = $color147;

		$data['sensor_147'] = "<div class=circle style=background:$color147></div>";

		/********************************
			SENSOR ID 148
		********************************/

		$color148 = $this->car_parking_status(148, $floor_id);

		$temp[]   = $color148;

		$data['sensor_148'] = "<div class=circle style=background:$color148></div>";

		/********************************
			SENSOR ID 149
		********************************/

		$color149 = $this->car_parking_status(149, $floor_id);

		$temp[] = $color149;

		$data['sensor_149'] = "<div class=circle style=background:$color149></div>";

		/********************************
			SENSOR ID 150
		********************************/

		$color150 = $this->car_parking_status(150, $floor_id);

		$temp[]   = $color150;

		$data['sensor_150'] = "<div class=circle style=background:$color150></div>";

		/********************************
			SENSOR ID 151
		********************************/

		$color151 = $this->car_parking_status(151, $floor_id);

		$temp[]   = $color151;

		$data['sensor_151'] = "<div class=circle style=background:$color151></div>";

		/********************************
			SENSOR ID 152
		********************************/

		$color152 = $this->car_parking_status(152, $floor_id);

		$temp[]   = $color152;

		$data['sensor_152'] = "<div class=circle style=background:$color152></div>";

		/********************************
			SENSOR ID 153
		********************************/

		$color153 = $this->car_parking_status(153, $floor_id);

		$temp[]   = $color153;

		$data['sensor_153'] = "<div class=circle style=background:$color153></div>";

		/********************************
			SENSOR ID 154
		********************************/

		$color154 = $this->car_parking_status(154, $floor_id);

		$temp[]   = $color154;

		$data['sensor_154'] = "<div class=circle style=background:$color154></div>";

		/********************************
			SENSOR ID 155
		********************************/

		$color155 = $this->car_parking_status(155, $floor_id);

		$temp[]   = $color155;

		$data['sensor_155'] = "<div class=circle style=background:$color155></div>";

		/********************************
			SENSOR ID 156
		********************************/

		$color156 = $this->car_parking_status(156, $floor_id);

		$temp[]   = $color156;

		$data['sensor_156'] = "<div class=circle style=background:$color156></div>";

		/********************************
			SENSOR ID 157
		********************************/

		$color157 = $this->car_parking_status(157, $floor_id);

		$temp[]   = $color157;

		$data['sensor_157'] = "<div class=circle style=background:$color157></div>";

		/********************************
			SENSOR ID 158
		********************************/

		$color158 = $this->car_parking_status(158, $floor_id);

		$temp[]   = $color158;

		$data['sensor_158'] = "<div class=circle style=background:$color158></div>";

		/********************************
			SENSOR ID 159
		********************************/

		$color159 = $this->car_parking_status(159, $floor_id);

		$temp[]   = $color159;

		$data['sensor_159'] = "<div class=circle style=background:$color159></div>";

		/********************************
			SENSOR ID 160
		********************************/

		$color160 = $this->car_parking_status(160, $floor_id);

		$temp[]   = $color160;

		$data['sensor_160'] = "<div class=circle style=background:$color160></div>";

		/********************************
			SENSOR ID 161
		********************************/

		$color161 = $this->car_parking_status(161, $floor_id);

		$temp[]   = $color161;

		$data['sensor_161'] = "<div class=circle style=background:$color161></div>";

		/********************************
			SENSOR ID 162
		********************************/

		$color162 = $this->car_parking_status(162, $floor_id);

		$temp[]   = $color162;

		$data['sensor_162'] = "<div class=circle style=background:$color162></div>";

		/********************************
			SENSOR ID 163
		********************************/

		$color163 = $this->car_parking_status(163, $floor_id);

		$temp[] = $color163;

		$data['sensor_163'] = "<div class=circle style=background:$color163></div>";

		/********************************
			SENSOR ID 164
		********************************/

		$color164 = $this->car_parking_status(164, $floor_id);

		$temp[]   = $color164;

		$data['sensor_164'] = "<div class=circle style=background:$color164></div>";

		/********************************
			SENSOR ID 165
		********************************/

		$color165 = $this->car_parking_status(165, $floor_id);

		$temp[]   = $color165;

		$data['sensor_165'] = "<div class=circle style=background:$color165></div>";

		/********************************
			SENSOR ID 166
		********************************/

		$color166 = $this->car_parking_status(166, $floor_id);

		$temp[] = $color166;

		$data['sensor_166'] = "<div class=circle style=background:$color166></div>";

		/********************************
			SENSOR ID 167
		********************************/

		$color167 = $this->car_parking_status(167, $floor_id);

		$temp[]   = $color167;

		$data['sensor_167'] = "<div class=circle style=background:$color167></div>";

		/********************************
			SENSOR ID 168
		********************************/

		$color168 = $this->car_parking_status(168, $floor_id);

		$temp[] = $color168;

		$data['sensor_168'] = "<div class=circle style=background:$color168></div>";

		/********************************
			SENSOR ID 169
		********************************/

		$color169 = $this->car_parking_status(169, $floor_id);

		$temp[]   = $color169;

		$data['sensor_169'] = "<div class=circle style=background:$color169></div>";

		/********************************
			SENSOR ID 170
		********************************/

		$color170 = $this->car_parking_status(170, $floor_id);

		$temp[]   = $color170;

		$data['sensor_170'] = "<div class=circle style=background:$color170></div>";

		/********************************
			SENSOR ID 171
		********************************/

		$color171 = $this->car_parking_status(171, $floor_id);

		$temp[]   = $color171;

		$data['sensor_171'] = "<div class=circle style=background:$color171></div>";

		/********************************
			SENSOR ID 172
		********************************/

		$color172 = $this->car_parking_status(172, $floor_id);

		$temp[]   = $color172;

		$data['sensor_172'] = "<div class=circle style=background:$color172></div>";


	 	/********************************
			SENSOR ID 173
		********************************/

		$color173 = $this->car_parking_status(173, $floor_id);

		$temp[]   = $color173;

		$data['sensor_173'] = "<div class=circle style=background:$color173></div>";


		/********************************
		SENSOR ID SET HERE END
		********************************/
         $data['dfl_color']=$this->floor_view_status_model->default_color_info();

        return array_count_values($temp);

}


/*Using for summary view count information End*/


  public function car_parking_status($sensor_id, $floor_id)
  {
  
    $dflt_colr                = $this->floor_view_status_model->duration_default_color();   
    $default_color            = $dflt_colr[0]->duration_color; 
    
   
    $id_info['sensor_id']     = $sensor_id ;
    $id_info['floor_id']      = $floor_id ;

    
    $duration_limit           = $this->floor_view_status_model->duration_limit_value(); // tbl_duration_limit 

    $last_status_time         = $this->floor_view_status_model->last_status_time($id_info); // tbl_status table time

   	$first_status_time        = $this->floor_view_status_model->first_status_time($id_info); // tbl_log table time

 	$single_status_time_last  = $last_status_time[0]->start_date_time;

  	$single_status_time_first = $first_status_time[0]->start_date_time;

    $data  = " ";

   
 
   	if(count($first_status_time)>0){

    $duration = strtotime($this->get_time_difference($single_status_time_first, $single_status_time_last)); 
     foreach ($duration_limit as $duration_limit_value) {
     
	    $limit_start  =	strtotime($duration_limit_value->duration_start);
	    $limit_end    =	strtotime($duration_limit_value->duration_end);
        
      	$color = $duration_limit_value->duration_color;
        
	    if(($limit_start <= $duration) && ($limit_end >= $duration)) {
	    	
	    	$data=$color;
	    	
	     }
	      //  else
	      // {
	      //  	if($duration <= strtotime('0.01')) { 
	      //  		$data  ="#ccc";
	      //  	}
	       	
	      // }
	     
     }

 
}
else 
$data=$default_color;

    return $data;
}

public function get_time_difference($first_time, $last_time){

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


// public function get_time_difference($first_time, $last_time){

// $date1 =$first_time;
// $date2 = $last_time;
// $timestamp1 = strtotime($date1);
// $timestamp2 = strtotime($date2);
// $hour = abs($timestamp2 - $timestamp1)/(60*60);

// return $dd= round($hour,2);

// }


public function get_duration_title($input_value){

	$data=$this->floor_view_status_model->duration_title($input_value);
	echo $data[0]->duration_title;
}

}
