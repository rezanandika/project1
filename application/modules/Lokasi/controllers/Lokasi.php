<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Lokasi extends MY_Controller {
 
	function __construct() {
    parent::__construct();
    $this->load->model('lokasi_model','lokasi');
 
  }
 
   function index(){
   
    $data = array();
   
    $data['lokasi'] = $this->lokasi->get_all();
    $data['tittle'] = "Data Lokasi";
    $data['content'] = "Lokasi/data_lokasi";
    $this->template->views($data);
  }

  function tambah (){
    $data['tittle'] = 'Tambah Lokasi';
    $data['content'] = 'Lokasi/form';
    $data['state'] = 'insert';

    $this->template->views($data);
  }

  function insert(){

   $this->db->trans_start();

    $datas = $this->input->post();

    $data['id_lokasi'] = $datas['idlokasi'];
    $data['nama'] = $datas['nama'];

    $this->lokasi->insert($data);
    $this->db->trans_complete();

    redirect($this->redirect_url);

  }
  
}