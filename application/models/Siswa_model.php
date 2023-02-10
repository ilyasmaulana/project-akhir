<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
  public function getAllSiswa()
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas');
    $this->db->join('spp', 'siswa.id_spp = spp.id_spp');
    return $this->db->get()->result_array();
  }

  public function getSiswaById($id)
  {
    return $this->db->get_where('siswa', ['nisn' => $id])->row_array();
  }

  public function getAllKelas()
  {
    return $this->db->get('kelas')->result_array();
  }

  public function getAllSpp()
  {
    return $this->db->get('spp')->result_array();
  }

  public function insertSiswa()
  {
    $data = [
      'nisn' => $this->input->post('nisn'),
      'nis' => $this->input->post('nis'),
      'nama' => $this->input->post('nama', true),
      'id_kelas' => $this->input->post('id_kelas'),
      'alamat' => $this->input->post('alamat', true),
      'no_telp' => $this->input->post('no_telp'),
      'id_spp' => $this->input->post('id_spp')
    ];

    $this->db->insert('siswa', $data);
  }

  public function updateSiswa()
  {
    $id = $this->input->post('nisn');
    $data = [
      'nis' => $this->input->post('nis'),
      'nama' => $this->input->post('nama', true),
      'id_kelas' => $this->input->post('id_kelas'),
      'alamat' => $this->input->post('alamat', true),
      'no_telp' => $this->input->post('no_telp'),
      'id_spp' => $this->input->post('id_spp')
    ];

    $this->db->where('nisn', $id);
    $this->db->update('siswa', $data);
  }

  public function deleteSiswa($id)
  {
    $this->db->delete('siswa', ['nisn' => $id]);
  }
}
