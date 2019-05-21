<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_login_controller extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()  
    {  
        $data['title'] = "Login";
        
        
        $this->load->view('Login-Page');  
    }

    public function authenticate()  
    {  
        $this->load->model('My_register_model');  
    
        if ($this->My_register_model->log_in_correctly())  
        {  
           redirect('Matches_controller');
        } 
        else 
        {  
            redirect('Page_login_controller');  
           
        }  
    }  
  
    public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('Page_login_controller');  
    }  
}
    