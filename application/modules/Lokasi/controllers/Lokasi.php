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

  function delete($id_lokasi){
  $where = array('id_lokasi' => $id_lokasi);

  $this->load->model('lokasi_model','lokasi');
  $this->lokasi->hapus_data($where,'lokasi');

  redirect($this->redirect_url);
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