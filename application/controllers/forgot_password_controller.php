<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password_controller extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Forgot_password_model','fm');
    }
    
       public function index()
    {
        if($this->input->post('btnpwd'))
        {
            $email=$this->input->post('email');
            $newPassword=$this->input->post('newPassword');
            $confirmPassword=$this->input->post('confirmPassword');

            $que=$this->db->query("select Password from register_yourself where Email='$email'");
            $row=$que->row();

            if(!strcmp($newPassword, $confirmPassword))
            {
                $this->fm->change_pass($email,$newPassword);

                echo "Password changed successfully !";
            }
            else
            {
                    echo "Invalid";
            }
        }

         $data['title'] = "Forgot password";
        $this->load->view('forgot_password'); 
   
    }
}
    