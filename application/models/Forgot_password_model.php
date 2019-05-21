<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Forgot_password_model extends CI_Model
{
	
    function change_pass($email,$newPassword)
    {
		$update_pass=$this->db->query("UPDATE register_yourself set Password='$newPassword'  where Email='$email'");
	}



}
?>