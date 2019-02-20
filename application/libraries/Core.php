<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core{
  protected $ci;

	public function __construct()
	{ 
    // for cors api
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "OPTIONS") {
        die();
    }
    
		$this->ci =& get_instance();
  }
  
  public function msg($info,$pesan){
    if ($info == 'sukses') {
      $status = 200;
      $error = false;
    } elseif ($info == 'gagal') {
      $status = 502;
      $error = true;
    }    
    $response = array(
      'status' => $status,
      'error' => $error,
      'res' => $pesan
    );
    return $response;
  }
}