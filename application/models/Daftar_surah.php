<?php

class Daftar_surah extends CI_Model
{
    public function isiDaftarSurah()
    {
        return $this->db->get('daftarsurah')->result_array();
    }
    public function search($keyword){
        $this->db->like('index', $keyword);
        $this->db->or_like('surah_indonesia', $keyword);
        $this->db->or_like('arti', $keyword);
        $this->db->or_like('jumlah_ayat', $keyword);
        
        $result = $this->db->get('daftarsurah')->result(); // Tampilkan data siswa berdasarkan keyword
        
        return $result; 
      }
}