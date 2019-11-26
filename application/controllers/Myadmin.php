<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myadmin extends CI_Controller {  // Inheritance/pewarisan

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Modelperkuliahan');
		$this->load->model('Model_tif_rp_v');
	}

	public function index()  // Encapsulation
	{
		$data['title'] = "Sekolah Tinggi Teknologi Bandung";
		$this->load->view('headadm' ,$data);
		$this->load->view('dashboard');
	}
	public function perkuliahan()	// Encapsulation
	{
		$data['title'] = "Sekolah Tinggi Teknologi Bandung";
		$data['tampil'] = $this->Modelperkuliahan->tampil_data();
		$this->load->view('headadm' ,$data);
		$this->load->view('modul/perkuliahan');
	}
	public function datamahasiswa()	// Encapsulation
	{
		$data['title'] = "Sekolah Tinggi Teknologi Bandung";
		$this->load->view('headadm' ,$data);
		$this->load->view('datamahasiswa');
	}
	public function datamahasiswa_tif_rp_v()	// Encapsulation
	{
		$data['title'] = "Sekolah Tinggi Teknologi Bandung";
		$data['tampil'] = $this->Model_tif_rp_v->tampil_data();
		$this->load->view('headadm' ,$data);
		$this->load->view('modul/datamahasiswa_tif_rp_v');
	}
	public function tif_rp_17_cid_c()	// Encapsulation
	{
		$data['title'] = "Sekolah Tinggi Teknologi Bandung";
		$this->load->view('headadm' ,$data);
		$this->load->view('tif_rp_17_cid_c');
	}
	public function tambahdataperkuliahan(){	// Encapsulation
		$data['title'] = "Sekolah Tinggi Teknologi Bandung";
		$this->load->view('modul/tambahdataperkuliahan');
	}
	public function tambahdatamahasiswa_tif_rp_v(){	// Encapsulation
		$data['title'] = "Sekolah Tinggi Teknologi Bandung";
		$this->load->view('modul/tambahdatamahasiswa_tif_rp_v');
	}
		
	function aksi_tambahdata_perkuliahan(){
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$sks = $this->input->post('sks');

		$data = array(
			'str_kode_matkul' => $kode,
			'str_nama_matkul' => $nama, 
			'int_sks' => $sks
			);

		$this->Modelperkuliahan->tambah_data($data,'perkuliahan');
		redirect('Myadmin/tambahdataperkuliahan');
	}
	function aksi_tambahdata_tif_rp_v(){
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');

		$data = array(
			'int_npm' => $npm,
			'str_nama' => $nama,
			);

		$this->Model_tif_rp_v->tambah_data($data,'semester_v');
		redirect('Myadmin/tambahdatamahasiswa_tif_rp_v');
	}
}
