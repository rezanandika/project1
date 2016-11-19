<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Barang extends MY_Controller {
 
	function __construct() {
  parent::__construct();
  $this->load->model('barang_model','barang');
 
  }
 
   function index(){
   

    $data = array();
	 
    $data['barang'] = $this->barang->get_all();
  	$data['tittle'] = "Data Barang";
  	$data['content'] = "Barang/data_barang";
    $this->template->views($data);
  }


  public function tambah(){
    $data['title'] ='Tambah Data Barang';

    $data['content'] = 'Barang/form';

    $data['state'] = 'insert';

    $this->template->views($data);
  }

  function insert(){

   $this->db->trans_start();

    $datas = $this->input->post();

    $data['id_barang'] = $datas['idbarang'];
    $data['nama_barang'] = $datas['nama'];
    $data['spesifikasi'] = $datas['spesifikasi'];
    $data['satuan'] = $datas['satuan'];

    $this->barang->insert($data);
    $this->db->trans_complete();

    redirect($this->redirect_url);

  }
  
}