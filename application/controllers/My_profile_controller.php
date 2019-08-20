<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_profile_controller extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
       if(! $this->session->userdata('user')) redirect('Page_login_controller');

       $this->load->model('My_register_model', 'mrm');
    }
    
	public function index()
	{
		$data['allreligion'] = $this->mrm->getReligion();
		$data['alltongue'] = $this->mrm->getMothertongue();
		$data['countries'] = $this->mrm->getCountry();
		$data['Levelofeducation'] = $this->mrm->getEducationlevel();
		$data['img'] = $this->mrm->	getProfileDatalol($this->session->userdata('users'));
		$data['profile_data'] = $this->mrm->getProfileData($this->session->userdata('user'));
		$this->load->view('My_profile', $data);
	}
    public function updateclass()
    {
       $this->mrm->upclass();
       redirect('My_profile_controller');
    }
}