<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Artikel');
	}

	public function index()
	{
		$data = $this->Model_Artikel->getArtikel();
		$this->session->set_userdata('daftar_artikel', $data);
		$this->load->view('Pengelola/Head');
		$this->load->view('Pengelola/Header');
		$this->load->view('Pengelola/Artikel/InputArtikel');
		$this->load->view('Pengelola/Footer');
	}


	public function input()
	{
		$id = $this->input->post('id_artikel');
		$judul = $this->input->post('judul');
		$terbit = $this->input->post('tglterbit');
		$pengarang = $this->input->post('pengarang');
		$isi = $this->input->post('isi');

		$this->Model_Artikel->inputArtikel($id, $judul, $terbit, $pengarang, $isi);

		redirect('Pengelola/C_Artikel/getartikel');
	}

	public function getartikel()
	{
		$data = $this->Model_Artikel->getArtikel();
		$this->session->set_userdata('daftar_artikel', $data);
		$this->load->view('Pengelola/Head');
		$this->load->view('Pengelola/Header');
		$this->load->view('Pengelola/Artikel/TampilArtikel');
		$this->load->view('Pengelola/Footer');
	}

	public function editArtikel()
	{
		$query['dataArtikel'] = $this->Model_Artikel->getEditArtikel($_GET['ID_Artikel']);
		$this->load->view('Pengelola/Head');
		$this->load->view('Pengelola/Header');
		$this->load->view('Pengelola/Artikel/EditArtikel', $query);
		$this->load->view('Pengelola/Footer');
	}

	public function prosesEdit()
	{
		$id = $this->input->post('id_artikel');
		$judul = $this->input->post('judul');
		$terbit = $this->input->post('tglterbit');
		$pengarang = $this->input->post('pengarang');
		$isi = $this->input->post('isi');

		$this->Model_Artikel->updateArtikel($id, $judul, $terbit, $pengarang, $isi);

		redirect('Pengelola/C_Artikel/getartikel');
	}

	public function hapusArtikel()
	{
		$id = $_GET['ID_Artikel'];
		$this->Model_Artikel->hapus($id);

		redirect('Pengelola/C_Artikel/getartikel');
	}

	public function search()
	{
		$key = $this->input->post('cari');
		$data['artikel'] = $this->Model_Artikel->Search($key);

		
		$this->load->view('Pengelola/Head');
		$this->load->view('Pengelola/Header');
		$this->load->view('Pengelola/Artikel/ViewSearch', $data);
		$this->load->view('Pengelola/Footer');
	}

}

/* End of file C_Artikel.php */
/* Location: ./application/controllers/Pengelola/C_Artikel.php */