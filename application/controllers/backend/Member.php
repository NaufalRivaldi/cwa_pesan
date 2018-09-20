<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Member extends CI_Controller 
{
	public function index(){
		$this->load->model("mdbackdoor");
		if(!$this->mdbackdoor->cek_login()){
			$this->load->view("backend/login");
		}
		else{
			$data['menu'] = 5;
			$data['title'] = "Manage Member";
			$this->load->view("backend/header",$data);
			$this->load->view("backend/member");
			$this->load->view("backend/footer");
		}
	}
}

 ?>