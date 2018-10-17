<?php 
defined("BASEPATH") or exit('No direct script access allowed!');

class Import extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		if(!$this->def->cek_login()){
			$this->load->view('login');
		}
	}
	public function index()
	{

		$user = $this->def->get_current('username');
		$date = date('Y-m-d');
		
		$uploadStat = $this->def->cek_upload_cabang($user, $date);
		if($uploadStat){
			$data['keterangan'] = "";
		} else {
			$data['keterangan'] = "<b style='color:red'>Anda belum mengupload data penjualan member, harap untuk mengupload sekarang! </b>";
		}

		$data['import'] = $this->db->order_by('tgl', 'desc')->where('username', $user)->get('attach_penjualan_member')->result_array();

		$data['title'] = "Import Penjualan";
		$data['menu'] = 6;
		$this->load->view("header",$data);
		$this->load->view("import");
		$this->load->view("footer");
		
	}

	public function store(){
		$this->load->model('crud');
		$this->load->model('Mdmember');
		$user = $this->def->get_current('username');
		$users = explode('@', $user);
		

		$nmFile = explode(".", $_FILES['attach']['name']);
		$tmpName = $_FILES['attach']['tmp_name'];

		$dari = date('d-m-Y', strtotime($_POST['dari']));
		$sampai = date('d-m-Y', strtotime($_POST['sampai']));

		//rename file
		$newFileName = 'Penjualan Member '.strtoupper($users[0]). ' '. $dari .' sd ' . $sampai.'.'.end($nmFile);

		//uplaod file excel
		$upload = $this->Mdmember->uploadPenjualan($newFileName, $tmpName);
		if($upload){
			$files = explode('.', $newFileName);
		
				//$data = $this->input->post();
				$data['tgl'] = date('Y-m-d');
				$data['username'] = $user;
				$data['file'] = $newFileName;
				
				$search = $this->db->where('file', $newFileName)->get('attach_penjualan_member')->row();
				if(!$search){
					//insert ke tabel attach penjualan untuk file yg diupload
					$ins = $this->db->insert('attach_penjualan_member', $data);
				} else {
					$update = $this->db->where('file', $newFileName)->update('attach_penjualan_member', $data);
				}

				
				//file isi excel insert ke table penjualan member
				$insert = $this->Mdmember->importExcel('upload_cabang/'.$newFileName);
				$this->def->pesan("success", "Berhasil upload data $files[0] ", "import");
			
		} else {
			$this->def->pesan("error", "Data gagal diupload ", "import");
		}

		
	}
}

 ?>