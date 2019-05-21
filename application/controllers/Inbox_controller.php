<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox_controller extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
       if(! $this->session->userdata('user')) redirect('Page_login_controller');
       $this->load->model('my_register_model','mrm');
    }

	public function index()
	{
		
		$data['comments'] = $this->mrm->feedback_print();
		$this->load->view('Inbox', $data);
	}

	function Feedback()
	{
		$data['res'] = $this->mrm->feedback();
		redirect('Inbox_controller');
	}

}