<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*class Gallery_dashboard_controller extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
       if(! $this->session->userdata('user')) redirect('Page_login_controller');

    }

	public function index()
	{
		//$this->load->helper('url');
		$this->load->view('Gallery_dashboard');
	}
}*/


class Gallery_dashboard_controller extends CI_Controller 
{
 
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Upload_model', 'upl');
        if(! $this->session->userdata('user')) redirect('Page_login_controller');
    }
    // upload image
    public function index() 
    {
        $data['page'] = 'Gallery_dashboard_controller';
        $data['title'] = 'Upload Image | TechArise';         
        $data['photo'] = $this->upl->fetchphoto();         
        
        $this->load->view('Gallery_dashboard', $data);
    }    
    public function save()
    {
        $this->upl->create();
        redirect('Gallery_dashboard_controller');
    }

    public function deleteclass($no_)
    {
       $res = $this->upl->delclass($no_);
       redirect('Gallery_dashboard_controller');
    }
}
?>