<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Pemeliharaan extends MY_Controller {
 
  function __construct() {
  parent::__construct();
  $this->load->model('pemeliharaan_model', 'pemeliharaan');
 
  }
 
   function index(){


    $data = array();
   
    $data['pemeliharaan'] = $this->pemeliharaan->get_all();
    $data['tittle'] = "Data Pemeliharaan";
    $data['content'] = "Pemeliharaan/data_pemeliharaan";
    $this->template->views($data);
  }
}