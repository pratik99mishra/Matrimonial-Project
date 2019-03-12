<?php
Class User_model extends CI_Model
{
	function fetchtable(){
		$query=$this->db->get('matrimonial_website');
		return $query->result();
	}
	function savingdata(){
		$data= array(
		  'user_id'=>$this->input->post('user_id'),
		  'name'=>$this->input->post('name')
		);
		$this->db->insert('matrimonial',$data);
	}
}
?>