<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
  public function getAllPembayaran()
  {
    return $this->db->get('pembayaran')->result_array();
  }

  // public function getPembayaranById($id)
  // {
  //   //tampilkan data berdasarkan kelas_id
  //   return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
  // }

  // public function insertPembayaran()
  // {
  //   $data = [
  //     'tahun' => $this->input->post('tahun', true),
  //     'nominal' => $this->input->post('nominal', true)
  //   ];

  //   $this->db->insert('Pembayaran', $data);
  // }


  // public function deletePembayaran($id)
  // {
  //   $this->db->delete('Pembayaran', ['id_Pembayaran' => $id]);
  // }
}
