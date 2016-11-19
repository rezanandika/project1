<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Detail_barang extends MY_Controller {
 
  function __construct() {
  parent::__construct();
  $this->load->model('detail_model','detail');
 
  }
 
   function index(){
    $data = array();
   
    $data['detail'] = $this->detail->get_all();
    $data['tittle'] = "Data Barang";
    $data['content'] = "detail_barang/data_detail";
    $this->template->views($data);
  }

  
}