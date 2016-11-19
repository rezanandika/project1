<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

/**
* 
*/
class Record extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('record_model');
	}

	public function index(){

		$data['tittle'] = "Record Barang";
		$data['content'] = "Record/index";
		$this->template->views($data);
	}
}