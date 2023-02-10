<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Petugas_model', 'pm');
	}

	public function index()
	{
		$data['title'] = "Data Petugas";
		$data['petugas'] = $this->pm->getAllPetugas();

		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('petugas/index', $data);
		$this->load->view('templates/footer');
	}

	public function addPetugas()
	{
		$data['title'] = "Tambah Data Petugas";

		$this->form_validation->set_rules('nama_Petugas', 'Nama Petugas', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('kompetensi_keahlian', 'Kompetensi Keahlian', 'required|trim|min_length[3]');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/sidebar');
			$this->load->view('templates/navbar');
			$this->load->view('Petugas/addPetugas', $data);
			$this->load->view('templates/footer');
		} else {
			$this->km->insertPetugas();

			$this->session->set_flashdata('Petugas_message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data berhasil disimpan!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('Petugas');
		}
	}

	// public function updatePetugas($id)
	// {
	// 	$data['title'] = "Update Data Petugas";

	// 	$this->form_validation->set_rules('nama_Petugas', 'Nama Petugas', 'required|trim|min_length[3]');
	// 	$this->form_validation->set_rules('kompetensi_keahlian', 'Kompetensi Keahlian', 'required|trim|min_length[3]');

	// 	if ($this->form_validation->run() == false) {
	// 		//ambil  data Petugas berdasarkan ID
	// 		$data['Petugas'] = $this->km->getPetugasById($id);

	// 		$this->load->view('templates/sidebar');
	// 		$this->load->view('templates/navbar');
	// 		$this->load->view('Petugas/updatePetugas', $data);
	// 		$this->load->view('templates/footer');
	// 	} else {
	// 		$this->km->updatePetugas();

	// 		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
	// 		Data berhasil diubah!
	// 		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	// 		</div>');

	// 		redirect('Petugas');
	// 	}
	// }

	// public function deletePetugas($id)
	// {

	// 	$this->km->deletePetugas($id);

	// 	$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 		Data dihapus!
	// 		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	// 		</div>');

	// 	redirect('Petugas');
	// }
}
