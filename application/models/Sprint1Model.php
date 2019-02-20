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

}
