<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_surah extends CI_Model {

	public function ambil_data($keyword=null){
		$this->db->select('*');
		$this->db->from('daftarsurah');
		if(!empty($keyword)){
			$this->db->like('surah_indonesia',$keyword);
		}
		return $this->db->get()->result_array();
	}

}