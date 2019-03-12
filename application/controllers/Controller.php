<?php

class Controller extends CI_Controller{
	function_construct(){
		parent::_construct();
		$this->load->model('user_model','ob');
	}
	function index(){
		$data['users']=$this->ob->fetchtable();
		$this->load->view('view',$data);
	}
	function savingdata(){
		$this->ob->savingdata();
		redirect('view');
	}
}
?>