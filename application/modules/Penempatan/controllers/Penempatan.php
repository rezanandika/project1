<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Penempatan extends MY_Controller {
 
	function __construct() {
  parent::__construct();
  $this->load->model('penempatan_model','penempatan');
  $this->load->module('lokasi');
  $this->load->model('lokasi_model','lks');
  $this->load->module('Barang');
  $this->load->model('Detail_model','detail');
  $this->redirect_url = base_url(). "index.php/penempatan";

 
  }
 
   function index(){

   
    // $this->db->join("lokasi",'lokasi.id_lokasi = detail_barang.id_penempatan','INNER');
    // $data['barang'] = $this->detail->get_many_by(array("id_penempatan" => $id));
  	$data['tittle'] = 'Penempatan' ;
  	$data['content'] = "Penempatan/data_penempatan";

    $data['lokasi'] = $this->lks->get_all();

    $this->template->views($data);
  }

  function ambilData()
  {
   
    $id_lokasi = $this->input->get('id');
     $this->db->join("barang","barang.id_barang = detail_barang.id_barang");
    $this->db->join('lokasi','lokasi.id_lokasi = detail_barang.id_penempatan','INNER');
    $this->db->join('kategori','kategori.id_kategori = barang.id_kategori');
    $this->db->join('antivirus','antivirus.id_antivirus = detail_barang.id_antivirus','left');
    $this->db->join('windows','windows.id_windows = detail_barang.id_windows','left');
    $this->db->join('office','office.id_office = detail_barang.id_office','left');
    $query = $this->detail->get_many_by(array("id_penempatan" => $id_lokasi));

    $opt = "";
    foreach ($query as $d) {
         $opt .= '<tr><td>';
         $opt .= $d['id_penempatan'];
         $opt .='</td><td>';
         $opt .= $d['nama_barang'];
         $opt .= '<br>( ';
         $opt .= $d['nama_windows'];
         $opt .= ', ';
         $opt .= $d['nama_antivirus'];
         $opt .= ', ';
         $opt .= $d['nama_office'];
         $opt .= ' )';
         $opt .='</td><td>';
         $opt .= $d['nama_lokasi'];
         $opt .= '</td><td>';
         $opt .= $d['id_detail'];
         $opt .='</td></tr>';
        
    }

    echo $opt;
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