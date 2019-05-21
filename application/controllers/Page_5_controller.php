<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_5_controller extends CI_Controller 
{

	public function index()
	{
		//$this->load->helper('url');
		$this->load->view('Registration-Page-5');
	}
	function lifestyle_info()
	{
		$this->load->model('my_register_model', 'mrm');
		$data['res'] = $this->mrm->lifestyle_info();
		if($data['res'] == true)
		{
			echo "Register Successfully"."<br><a href='" . site_url('Page_5_controller') . "'>Back</a>";
			redirect('Page_6_controller');
		} 
		else 
		{
			echo "Already exists. Please try with new name and email."."<br><a href='" . site_url('Page_5_controller') . "'>Back</a>"; 
		}
	}

}