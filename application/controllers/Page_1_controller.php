<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_1_controller extends CI_Controller 
{

	public function index()
	{
		//$this->load->helper('url');
		$this->load->view('Registration-Page-1');
	}
	function register()
	{
		$this->load->model('my_register_model', 'mrm');
		$data['res'] = $this->mrm->register();
		if($data['res'] == true)
		{
			echo "Register Successfully"."<br><a href='" . site_url('Page_1_controller') . "'>Back</a>";
			redirect('Page_2_controller');
		} 
		else 
		{
			echo "Already exists. Please try with new name and email."."<br><a href='" . site_url('Page_1_controller') . "'>Back</a>"; 
		}
	}

}


?>