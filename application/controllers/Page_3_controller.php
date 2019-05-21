<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_3_controller extends CI_Controller 
{

	public function index()
	{
		//$this->load->helper('url');
		$this->load->view('Registration-Page-3');
	}
	function personal_info()
	{
		$this->load->model('my_register_model', 'mrm');
		$data['res'] = $this->mrm->personal_info();
		if($data['res'] == true)
		{
			echo "Register Successfully"."<br><a href='" . site_url('Page_3_controller') . "'>Back</a>";
			redirect('Page_4_controller');
		} 
		else 
		{
			echo "Already exists. Please try with new name and email."."<br><a href='" . site_url('Page_3_controller') . "'>Back</a>"; 
		}
	}

}