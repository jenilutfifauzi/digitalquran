<?php

class Isi_surah extends CI_Model
{
    function surah_list(){
		$hasil=$this->db->query("SELECT * FROM daftarsurah ");
		return $hasil->result_array();
	}
}