<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Lokasi extends MY_Controller {
 
	function __construct() {
    parent::__construct();
    $this->load->model('lokasi_model','lokasi');
    $this->redirect_url = base_url(). "index.php/lokasi";
 
  }
 
   function index(){
   
    $data = array();
   
   //$data['lokasi'] = $this->lokasi->get_all();
    $data['tittle'] = "Data Lokasi";
    $data['content'] = "Lokasi/lokasi_tujuan";

    $this->db->join('detail_barang','detail_barang.id_detail = detail_barang.id_lokasi');

    $data['lokasi'] = $this->detail->get_many_by(array("detail_barang.id_lokasi" => $id));

    $this->template->views($data);
  }

  function get_detail(){

    $modul=$this->input->post('modul');
    $id=$this->input->post('id');

    if($modul=="detailbarang"){
      echo $this->model_select->getDetail($id);
    }
  }


}