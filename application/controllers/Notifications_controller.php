<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications_controller extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
       if(! $this->session->userdata('user')) redirect('Page_login_controller');
    }
    
	public function index()
	{
		$this->load->view('Notifications');
	}

}