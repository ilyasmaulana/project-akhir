<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pembayaran_model', 'pm');
  }

  public function index()
  {
    $data['title'] = "Pembayaran";
    $data['pembayaran'] = $this->pm->getAllPembayaran();

    $this->load->view('templates/sidebar');
    $this->load->view('templates/navbar');
    $this->load->view('pembayaran/index', $data);
    $this->load->view('templates/footer');
  }

  public function addPembayaran()
  {
    $data['title'] = "Tambah Data Pembayaran";

    $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|min_length[4]');
    $this->form_validation->set_rules('nominal', 'Nominal', 'required|trim|min_length[3]');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/sidebar');
      $this->load->view('templates/navbar');
      $this->load->view('kelas/addPembayaran', $data);
      $this->load->view('templates/footer');
    } else {
      $this->pm->insertPembayaran();

      $this->session->set_flashdata('kelas_message', '<div class="alert alert-success alert-dipmissible fade show" role="alert">
			Data berhasil disimpan!
			<button type="button" class="btn-close" data-bs-dipmiss="alert" aria-label="Close"></button>
			</div>');
      redirect('Pembayaran');
    }
  }

  // public function deletePembayaran($id)
  // {
  //   $this->pm->deletePembayaran($id);

  //   $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dipmissible fade show" role="alert">
  // 		Data dihapus!
  // 		<button type="button" class="btn-close" data-bs-dipmiss="alert" aria-label="Close"></button>
  // 		</div>');

  //   redirect('Pembayaran');
  // }
}
