<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Spp_model', 'sm');
  }

  public function index()
  {
    $data['spp'] = $this->sm->getAllSpp();

    $this->load->view('templates/sidebar');
    $this->load->view('templates/navbar');
    $this->load->view('spp/index', $data);
    $this->load->view('templates/footer');
  }

  public function addSpp()
  {
    $data['title'] = "Tambah Data SPP";

    $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|min_length[4]');
    $this->form_validation->set_rules('nominal', 'Nominal', 'required|trim|min_length[3]');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/sidebar');
      $this->load->view('templates/navbar');
      $this->load->view('kelas/addSpp', $data);
      $this->load->view('templates/footer');
    } else {
      $this->sm->insertSpp();

      $this->session->set_flashdata('kelas_message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data berhasil disimpan!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
      redirect('spp');
    }
  }

  public function deleteSpp($id)
  {
    $this->sm->deleteSpp($id);

    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data dihapus!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');

    redirect('spp');
  }
}
