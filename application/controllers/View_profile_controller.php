<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_profile_controller extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
       if(! $this->session->userdata('user')) redirect('Page_login_controller');
       $this->load->model('My_register_model' ,'mrm');
    }
    
    
	public function index($Email)
	{	
		$data['img'] = $this->mrm->	getProfileDatalol($this->session->userdata('users'));
		$data['profile_data'] = $this->mrm->getProfileData($this->session->userdata('user'));
		$data['matchs']=$this->mrm->view_match_by_person($Email);
		
		$this->load->view('view_profile' ,$data);
	}
}