<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Member extends CI_Controller 
{

	public function __construct(){
		parent::__construct();
		$this->load->model('mdmember');
	}

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

	public function importMember(){
		$nmFile = $_FILES['file_member']['name'];
		$tmpName = $_FILES['file_member']['tmp_name'];

		$upload = $this->mdmember->uploadMember($nmFile, $tmpName);
		if($upload){
			$insert_excel = $this->mdmember->insertExcelMember('upload_member/'. $nmFile);
		}
	}
}

 ?>