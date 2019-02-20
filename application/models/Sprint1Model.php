<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sprint1Model extends CI_Model {

  public function add_provinsi($data)
  {
    $this->db->insert_batch('provinsi', $data);
  }
  
  public function add_kota($data)
  {
    $this->db->insert_batch('kota', $data);
  }

  public function get_provinsi($id)
  {
    $this->db->from('provinsi');
    $this->db->where('province_id',$id);
    $query = $this->db->get();
    return $query->row();
  }

  public function get_kota($id)
  {
    $this->db->from('kota');
    $this->db->where('city_id',$id);
    $query = $this->db->get();
    return $query->row();
  }
}
