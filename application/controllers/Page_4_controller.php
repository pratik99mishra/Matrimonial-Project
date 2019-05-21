<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_4_controller extends CI_Controller 
{

	public function index()
	{
		//$this->load->helper('url');
		$this->load->view('Registration-Page-4');
	}
	function education_career_details()
	{
		$this->load->model('my_register_model', 'mrm');
		$data['res'] = $this->mrm->education_career_details();
		if($data['res'] == true)
		{
			echo "Register Successfully"."<br><a href='" . site_url('Page_4_controller') . "'>Back</a>";
			redirect('Page_5_controller');
		} 
		else 
		{
			echo "Already exists. Please try with new name and email."."<br><a href='" . site_url('Page_4_controller') . "'>Back</a>"; 
		}
	}

}