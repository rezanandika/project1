<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Penempatan extends MY_Controller {
 
	function __construct() {
  parent::__construct();
  $this->load->model('penempatan_model','penempatan');
  $this->redirect_url = base_url(). "index.php/penempatan";

 
  }
 
   function index(){

    $data = array();
	 
    $data['penempatan'] = $this->penempatan->get_all();
  	$data['tittle'] = "Data Barang";
  	$data['content'] = "Penempatan/data_penempatan";

    $data['lokasi'] = $this->db->get('lokasi')->result();

    $this->template->views($data);
  }


  public function tambah(){
    $data['title'] ='Tambah Data Barang';
    $data['content'] = 'Barang/form';
    $data['state'] = 'insert';
/*
    $this->load->module('kategori');
    $this->load->model('kategori_model', 'kategori');*/
    $data['kategori'] = $this->db->get('kategori')->result();
    $data['inventaris'] = $this->db->get('inventaris')->result();
    /*$this->kategori->order_by('id_kategori', 'DESC');
    $data['kategori'] = $this->kategori->get_all();*/
    //modules::run('kategori');
    //$this->kategori->tes();
    $this->template->views($data);
    
  }

  public function detail(){
    
  }

  function insert(){

   $this->db->trans_start();

    $datas = $this->input->post();

    $data['id_barang'] = $datas['idbarang'];
    $data['nama_barang'] = $datas['nama'];
    $data['spesifikasi'] = $datas['spesifikasi'];
    $data['id_kategori'] = $datas['kategori'];
    $data['satuan'] = $datas['satuan'];
    $data['id_inventaris'] = $datas['inventaris'];

    $this->barang->insert($data);
    $this->db->trans_complete();

    redirect($this->redirect_url);

  }
  
}