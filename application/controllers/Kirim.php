<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Kirim extends CI_Controller
{
	public function index(){
		if($this->def->cek_login()){
			$data['title'] = "Kirim Data ke Pusat";
			$data['menu'] = 7;
			$this->load->view("header",$data);
			$this->load->view("kirim-data");
			$this->load->view("footer");
		}
		else{
			$this->load->view('login');
		}
	}

	public function upload(){
		$this->load->model('mdkirim');
		$file = explode('.', $_FILES['file']['name']);
		$tanggal = date('Y-m-d');
		$nama = $file[0];
		$format = $file[1];
		$file_name = $_FILES['file']['name'];
		$user = $this->def->get_current('username');

		



	}
}

 ?>