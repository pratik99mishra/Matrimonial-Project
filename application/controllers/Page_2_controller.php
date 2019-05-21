<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_2_controller extends CI_Controller 
{
    
    public function index()
	{
		//$this->load->helper('url');
		$this->load->view('Registration-Page-2');
    }
    function basic_details()
	{
		$this->load->model('my_register_model', 'mrm');
		$data['res'] = $this->mrm->basic_details();
		if($data['res'] == true)
		{
			echo "Register Successfully"."<br><a href='" . site_url('Page_2_controller') . "'>Back</a>";
			redirect('Page_3_controller');
		} 
		else 
		{
			echo "Already exists. Please try with new name and email."."<br><a href='" . site_url('Page_2_controller') . "'>Back</a>"; 
		}
	}
}