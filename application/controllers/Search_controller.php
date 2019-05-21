<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_controller extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
       if(! $this->session->userdata('user')) redirect('Page_login_controller');

        $this->load->model('My_register_model', 'mrm');
    }
    
	public function index()
	{
		//$this->load->view('search');

		$data['allreligion'] = $this->mrm->getReligion();
		$data['alltongue'] = $this->mrm->getMothertongue();
		$data['agefrom'] = $this->mrm->getAgefrom();
		$data['ageto'] = $this->mrm->getAgeto();
		$data['heightfrom'] = $this->mrm->getHeightfrom();
		$data['heightto'] = $this->mrm->getHeightto();
		$data['martialstatus'] = $this->mrm->getMartialstatus();
		$data['lookingfor_'] = $this->mrm->getlookingfor();
		$data['countries'] = $this->mrm->getCountry();
		$data['search_data'] = $this->mrm->getPrefrencesData($this->session->userdata('user'));
		$this->load->view('search', $data);
	}


}