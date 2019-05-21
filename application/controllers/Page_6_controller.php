<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_6_controller extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('my_register_model', 'mrm');
        
        //if(! $this->session->userdata('user_')) redirect('Page_6_controller');
    }
    
	/*public function index()
	{
		//$this->load->helper('url');
		$this->load->view('Registration-Page-6');
	}*/
	function describe_yourself()
	{
		$this->mrm->describe_yourself();
		redirect('Page_login_controller');
		/*if($data['res'] == true)
		{
			echo "Register Successfully"."<br><a href='" . site_url('Page_6_controller') . "'>Back</a>";
			redirect('Page_login_controller');
		} 
		else 
		{
			echo "Already exists. Please try with new name and email."."<br><a href='" . site_url('Page_6_controller') . "'>Back</a>"; 
		}*/
	}


	// upload image
    public function index() 
    {
        $data['page'] = 'Page_6_controller';
        $data['title'] = 'Upload Image | TechArise';         
        $data['photo'] = $this->mrm->fetchphoto();         
        
        $this->load->view('Registration-Page-6', $data);
    }    
    public function save()
    {
        //$this->mrm->create();
        redirect('Page_6_controller');
    }

    public function deleteclass($no_)
    {
       $res = $this->mrm->delclass($no_);
       redirect('Page_6_controller');
    }

}

