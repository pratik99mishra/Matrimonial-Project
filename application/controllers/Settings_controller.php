<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_controller extends CI_Controller 
{

	function __construct()
	{
        parent::__construct();
       if(! $this->session->userdata('user')) redirect('Page_login_controller');

       $this->load->model('My_register_model', 'mrm');
    }
    
	public function index()
	{
	    //$this->load->view('Settings');

		$data['settings_data'] = $this->mrm->getSettingsData($this->session->userdata('user'));
		$this->load->view('Settings', $data);
	}

}