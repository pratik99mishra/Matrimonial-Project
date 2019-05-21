<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Partner_prefrences_controller extends CI_Controller 
{
	
	function __construct()
	{
        parent::__construct();
       if(! $this->session->userdata('user')) redirect('Page_login_controller');

       $this->load->model('My_register_model', 'mrm');
    }
    
	public function index()
	{
		//$this->load->view('Partner_prefrences');

		$data['allreligion'] = $this->mrm->getReligion();
		$data['alltongue'] = $this->mrm->getMothertongue();
		$data['agefrom'] = $this->mrm->getAgefrom();
		$data['ageto'] = $this->mrm->getAgeto();
		$data['heightfrom'] = $this->mrm->getHeightfrom();
		$data['heightto'] = $this->mrm->getHeightto();
		$data['martialstatus'] = $this->mrm->getMartialstatus();
		$data['lookingfor_'] = $this->mrm->getlookingfor();
		$data['prefrences_data'] = $this->mrm->getPrefrencesData($this->session->userdata('user'));
		$this->load->view('Partner_prefrences', $data);
	}

	function partner_prefrences()
	{
		$this->load->model('my_register_model', 'mrm');
		$data['res'] = $this->mrm->partner_prefrences();
		if($data['res'] == true)
		{
			echo "Register Successfully"."<br><a href='" . site_url('partner_prefrences_controller') . "'>Back</a>";
			redirect('Matches_controller');
		} 
		else 
		{
			echo "Already exists. Please try with new name and email."."<br><a href='" . site_url('partner_prefrences') . "'>Back</a>"; 
		}
	}

}