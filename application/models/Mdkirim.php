<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Mdkirim extends CI_Model
{
	public function do_upload(){
		$config['upload_path'] = './kirim_pusat/';
		$config['allowed_types']= 'c01|c02|c03|c04|c05|c06|c07|c08|c09|ca0|ca1|ca2|ca3|ca4|ca5|ca6|ca7';
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			return false;
		} else {
			$data = array('upload_data' => $this->upload->data());
			return true;
		}
	}
}

 ?>