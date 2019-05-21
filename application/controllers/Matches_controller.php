<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matches_controller extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
       if(! $this->session->userdata('user')) redirect('Page_login_controller');
       $this->load->model('My_register_model' ,'mrm');
    }
    
	public function index()
	{ 	//$data['new']=$this->mrm->getsomeData();
		$data['match']=$this->mrm->getmatchData();
		
		$this->load->view('Templates/header');
		$this->load->view('matches',$data);
		
	}

}