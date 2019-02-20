<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Search extends REST_Controller
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

	public function provinces_get()
	{
		$res = $this->model->get_provinsi($this->get('id'));
		$this->response($res);
	}

	public function cities_get()
	{
		$res = $this->model->get_kota($this->get('id'));
		$this->response($res);
	}
}
