<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp_model extends CI_Model
{
  public function getAllSpp()
  {
    $this->db->order_by('tahun', 'DESC');
    return $this->db->get('spp')->result_array();
  }

  public function getSppById($id)
  {
    //tampilkan data berdasarkan kelas_id
    return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
  }

  public function insertSpp()
  {
    $data = [
      'tahun' => $this->input->post('tahun', true),
      'nominal' => $this->input->post('nominal', true)
    ];

    $this->db->insert('spp', $data);
  }


  public function deleteSpp($id)
  {
    $this->db->delete('spp', ['id_spp' => $id]);
  }
}
