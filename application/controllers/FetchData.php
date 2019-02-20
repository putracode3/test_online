<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class FetchData extends REST_Controller
{
	public function __construct()
  {
    parent::__construct();
		$this->load->model('Sprint1Model', 'model');
		$opt = [
			"http" => [
					"method" => "GET",
					"header" => "key: 0df6d5bf733214af6c6644eb8717c92c",
			]
		];
		$this->context = stream_context_create($opt);
	}

	public function ambilProvinsi_get()
	{
		$file = file_get_contents('https://api.rajaongkir.com/starter/province', false, $this->context);
		$decod = json_decode($file);
		$res = $decod->rajaongkir->results;
		$this->model->add_provinsi($res);
		echo "sukses";
	}

	public function ambilKota_get()
	{
		$file = file_get_contents('https://api.rajaongkir.com/starter/city', false, $this->context);
		$decod = json_decode($file);
		$res = $decod->rajaongkir->results;
		$this->model->add_kota($res);
		echo "sukses";
	}
}
