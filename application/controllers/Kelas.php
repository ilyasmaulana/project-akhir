<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kelas_model', 'km');
	}

	public function index()
	{
		$data['title'] = "Kelas Page";
		$data['kelas'] = $this->km->getAllKelas();

		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('kelas/index', $data);
		$this->load->view('templates/footer');
	}

	public function addKelas()
	{
		$data['title'] = "Tambah Data Kelas";

		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('kompetensi_keahlian', 'Kompetensi Keahlian', 'required|trim|min_length[3]');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/sidebar');
			$this->load->view('templates/navbar');
			$this->load->view('kelas/addKelas', $data);
			$this->load->view('templates/footer');
		} else {
			$this->km->insertKelas();

			$this->session->set_flashdata('kelas_message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data berhasil disimpan!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('kelas');
		}
	}

	public function updateKelas($id)
	{
		$data['title'] = "Update Data Kelas";

		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('kompetensi_keahlian', 'Kompetensi Keahlian', 'required|trim|min_length[3]');

		if ($this->form_validation->run() == false) {
			//ambil  data kelas berdasarkan ID
			$data['kelas'] = $this->km->getKelasById($id);

			$this->load->view('templates/sidebar');
			$this->load->view('templates/navbar');
			$this->load->view('kelas/updateKelas', $data);
			$this->load->view('templates/footer');
		} else {
			$this->km->updateKelas();

			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data berhasil diubah!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');

			redirect('kelas');
		}
	}

	public function deleteKelas($id)
	{

		$this->km->deleteKelas($id);

		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data dihapus!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');

		redirect('kelas');
	}
}
