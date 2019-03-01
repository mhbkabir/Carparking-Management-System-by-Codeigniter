<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


	public function login($userInput)
	{
		$userName   = $userInput['username'];
		$ueserPass  = md5($userInput['userpass']);
		
	 	$result     = $this->db->query("SELECT admin_id,admin_user FROM tbl_admin WHERE admin_user ='$userName' AND admin_password ='$ueserPass'");

		$user_result= $result->result();
		
		if($user_result)
		{
			$user_id   = $user_result[0]->admin_id;
			$user_name = $user_result[0]->admin_user; 
			
			if(!empty($user_id))
			{
				$sessiondata=array(
						'userId'   => $user_id,
						'userName' => $user_name,
						'loggedIn'=> TRUE
				);
				$this->session->set_userdata($sessiondata);
				return true;
			}
		}
	}
}
