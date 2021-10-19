<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Daftar_surah');
    }
	public function index()
	{
		$data['daftar'] = $this->Daftar_surah->isiDaftarSurah();
		// $this->load->view('Home/home',$data);

		$this->load->model('Cari_surah');
		$keyword = $this->input->get('keyword');
		$data = $this->Cari_surah->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('template/navbar');
		$this->load->view('home/home',$data);
	}

	function data_surah(){
		$data=$this->Isi_surah->surah_list();
		echo json_encode($data);
	}

	public function surah($id)
	{
		$id = $this->uri->segment(3);	
    	$data['isidata']   = $this->db->get_where('daftarsurah', array('index' => $id))->row_array();	
		$data['baru'] = $this->db->query("SELECT nomor_ayat,ayat,arti_ayat,latin FROM `quran_id` WHERE id_surat=$id")->result_array();
		$data['bismillah']  = $this->db->get_where('quran_id', ['ayat'], 1)->result_array();
		$this->load->view('template/navbar');
		$this->load->view('/home/isisurah',$data);
	}

	// baru search

	public function fetch()
    {
        $this->load->model('autocomplete_model');
        echo $this->autocomplete_model->fetch_data($this->uri->segment(3));
    }

}