<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model
{
  public function getAllPetugas()
  {
    return $this->db->get('petugas')->result_array();
  }

  // public function getPetugasById($id)
  // {
  //   //tampilkan data berdasarkan Petugas_id
  //   return $this->db->get_where('Petugas', ['id_Petugas' => $id])->row_array();
  // }

  public function insertPetugas()
  {
    $data = [
      'nama_Petugas' => $this->input->post('nama_Petugas', true),
      'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian', true)
    ];

    $this->db->insert('Petugas', $data);
  }

  // public function updatePetugas()
  // {
  //   $id = $this->input->post('id_Petugas');
  //   $data = [
  //     'nama_Petugas' => $this->input->post('nama_Petugas', true),
  //     'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian', true)
  //   ];

  //   $this->db->where('id_Petugas', $id);
  //   $this->db->update('Petugas', $data);
  // }

  // public function deletePetugas($id)
  // {
  //   $this->db->delete('Petugas', ['id_Petugas' => $id]);
  // }
}
