<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MX_Controller {

	public function index()
	{
		$this->session->sess_destroy();	
		redirect('admin/login');
	}
}
