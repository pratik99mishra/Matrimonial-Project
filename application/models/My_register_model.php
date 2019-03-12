<?php defined('BASEPATH') OR exit('No direct script access allowed');

class My_register_model extends CI_Model{

	function register(){
		$name_ = $this->input->post('txtName');
		$email_ = $this->input->post('txtEmail');
		$pwd = $this->input->post('txtPwd');

		$this->db->where('Username', $name_);
		$this->db->or_where('Email', $email_);
		$query = $this->db->get('register_yourself');
		
		if($query->num_rows()!=0){
			$bool = false;
		} else {
			$data = array(
				'Username'=>$name_,
				'Email'=>$email_,
				'Password'=>$pwd
			);
			$this->db->insert('register_yourself', $data);
			$bool = true;
		}

		return $bool;
	}
}