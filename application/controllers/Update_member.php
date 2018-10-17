<?php defined('BASEPATH') or exit('No direct script access allowed'); 

class Update_member extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		if(!$this->def->cek_login()){
			$this->load->view('login');
		} else {
			if(!$this->def->checkUser($this->def->get_current('username'))){
				$this->def->pesan('danger', 'Anda tidak bisa mengakses halaman tersebut', 'home');
			}
		}
		
	}

	public function index(){
		$data['menu'] = 9;
		$this->load->view('header', $data);
		$this->load->view('update_member');
		$this->load->view('footer');
	}
}

?>