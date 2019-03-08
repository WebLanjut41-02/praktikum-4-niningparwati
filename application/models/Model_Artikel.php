<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Artikel extends CI_Model {

	public function getArtikel()
	{
		// $query = $this->db->query("SELECT judul_artikel, tgl_terbit, pengarang, isi, foto_artikel from artikel")->result();
		// return $query;

		$this->db->from('artikel');
		$query = $this->db->get();
		return $query->result();
	}

	public function inputArtikel($id, $judul, $terbit, $pengarang, $isi)
	{
		$data = array(
			'id_artikel' => $id,
			'judul_artikel' => $judul,
			'tgl_terbit' => $terbit,
			'pengarang' => $pengarang, 
			'isi' => $isi

		);

		$this->db->insert('artikel', $data);
	}

	public function getEditArtikel($id)
	{
		$this->db->from('artikel');
		$this->db->where('id_artikel', $id);

		$query = $this->db->get();
		return $query->result();
	}


	public function updateArtikel($id, $judul, $terbit, $pengarang, $isi)
	{
		$data = array(
			'id_artikel' => $id,
			'judul_artikel' => $judul,
			'tgl_terbit' => $terbit,
			'pengarang' => $pengarang, 
			'isi' => $isi

		);

		$this->db->where('id_artikel', $id);
		$this->db->update('artikel', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id_artikel', $id);
		$this->db->delete('artikel');
	}

	public function Search($key)
	{

		$this->db->like('id_artikel', $key);
		$this->db->like('judul_artikel', $key);
		$this->db->like('tgl_terbit', $key);
		$this->db->like('pengarang', $key);
		$this->db->like('isi', $key);
		
		$query = $this->db->get('artikel');
		return $query->result();
	}

}

/* End of file Model_Artikel.php */
/* Location: ./application/models/Model_Artikel.php */