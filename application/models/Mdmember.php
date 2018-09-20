<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Mdmember extends CI_Model
{
	public function dateFormat($date){
		$month = array(
			'Jan' => '01',
			'Feb' => '02',
			'Mar' => '03',
			'Apr' => '04',
			'May' => '05',
			'Jun' => '06',
			'Jul' => '07',
			'Aug' => '08',
			'Sep' => '09',
			'Oct' => '10',
			'Nov' => '11',
			'Des' => '12'
		);

		$split = explode('-', $date);
		return '20'.$split[2]. '-' . $month[$split[1]] . '-'. $split[0];
	}

	public function importExcel($files){
		require_once('phpexcel/excel_reader2.php');
		require_once('phpexcel/SpreadsheetReader.php');
		try {
			$reader = new SpreadsheetReader($files);
		} catch(Exception $E){
			echo $E->getMessage();
			die();
		}


		$query = "INSERT INTO penjualan_member VALUES ";
		foreach($reader as $key => $row){
			if($row[0] == 'nmor'){
				continue;
			}
			$query .= "('', '".$row[0]. "','" .$this->dateFormat($row[1]). "','". $row[2] . "','". $row[4] ."','". $row[5] ."','". $row[6] ."','". $row[7] ."','". $row[8] ."','". $row[9] ."','". $row[11] ."','". $row[12] ."','". $row[13] ."','". $row[14] ."'),";
			if($key < count($reader)){
				$dateIndex = $this->dateFormat($row[1]); //mewakili tanggal
				$cabangIndex = $row[13]; // mewakili cabang
			}

		}
		//agar data tidak numpuk kalo user lupa sudah insert tapi malah insert lagi.
		$cek = $this->db->where('tggl', $dateIndex)->where('kdgd', $cabangIndex)->get('penjualan_member');
		if($cek->num_rows() > 0){
			//sudah pernah import delete dulu 
			$cek->row_array();
			$this->db->where('tggl', $dateIndex)->where('kdgd', $cabangIndex)->delete('penjualan_member');
			//insert lagi,
			$query = substr($query, 0, -1);
			$run = $this->db->query($query.";");
		} else {
			//langsung insert saja kalo tidak pernah
			$query = substr($query, 0, -1);
			$run = $this->db->query($query.";");
		}

		
	}
}

 ?>