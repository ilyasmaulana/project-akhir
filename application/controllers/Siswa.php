<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Siswa_model', 'smd');
  }

  public function index()
  {
    $data['title'] = "Siswa Page";
    $data['siswa'] = $this->smd->getAllSiswa();

    $this->load->view('templates/sidebar');
    $this->load->view('templates/navbar');
    $this->load->view('siswa/index', $data);
    $this->load->view('templates/footer');
  }

  public function addSiswa()
  {
    $this->form_validation->set_rules('nisn', 'NISN', 'is_natural|trim|min_length[5]|is_unique[siswa.nisn]');
    $this->form_validation->set_rules('nis', 'NIS', 'is_natural|trim');
    $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|trim');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|min_length[3]');
    $this->form_validation->set_rules('no_telp', 'No. Telpon', 'is_natural|trim');

    if ($this->form_validation->run() == false) {
      $data['title'] = "Tambah Data Siswa";
      $data['siswa'] = $this->smd->getAllSiswa();
      $data['kelas'] = $this->smd->getAllKelas();
      $data['spp'] = $this->smd->getAllSpp();

      $this->load->view('templates/sidebar');
      $this->load->view('templates/navbar');
      $this->load->view('siswa/addSiswa', $data);
      $this->load->view('templates/footer');
    } else {
      $this->smd->insertSiswa();

      $this->session->set_flashdata('Siswa_message', '<div class="alert alert-success alert-dismdissible fade show" role="alert">
			Data berhasil disimpan!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
      redirect('siswa');
    }
  }

  public function updateSiswa($id)
  {
    $this->form_validation->set_rules('nis', 'NIS', 'is_natural|trim');
    $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|trim|min_length[3]');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
    $this->form_validation->set_rules('no_telp', 'No. Telpon', 'is_natural|trim|is_unique[siswa.no_telp]');
    
    if ($this->form_validation->run() == false) {
      $data['title'] = "Update Data Siswa";
      //ambil  data Siswa berdasarkan ID
      $data['siswa'] = $this->smd->getSiswaById($id);
      $data['kelas'] = $this->smd->getAllKelas();
      $data['spp'] = $this->smd->getAllSpp();

      $this->load->view('templates/sidebar');
      $this->load->view('templates/navbar');
      $this->load->view('siswa/updateSiswa', $data);
      $this->load->view('templates/footer');
    } else {
      $this->smd->updateSiswa();

      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data berhasil diubah! 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

      redirect('siswa');
    }
  }

  public function deleteSiswa($id)
  {

    $this->smd->deleteSiswa($id);

    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Data dihapus!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

    redirect('siswa');
  }
}
