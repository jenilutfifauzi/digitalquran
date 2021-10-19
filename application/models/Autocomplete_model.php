<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autocomplete_model extends CI_Model
{
    function fetch_data($query)
    {
        $this->db->like('surah_indonesia', $query);
        $query = $this->db->get('daftarsurah');
        
        if($query->num_rows() > 0)
        {
            foreach($query->result_array() as $row)
            {
                $output[] = array(
                    'surah_indonesia'  => $row["surah_indonesia"]
                );
            }
            echo json_encode($output);
        }
    }
}

?> 