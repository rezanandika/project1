<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Pemeliharaan extends MY_Controller {
 
  function __construct() {
  parent::__construct();
  $this->load->model('pemeliharaan_model', 'pemeliharaan');
  $this->load->module('penempatan');
  $this->load->model('penempatan_model', 'penempatan');
  $this->load->module('kokasi');
  $this->load->model('lokasi_model', 'lks');
  $this->load->module('barang');
  $this->load->model('Detail_model', 'dtl');
  $this->redirect_url = base_url(). "index.php/pemeliharaan";
 
  }
 
   function index(){
    $data = array();
   
    $data['pemeliharaan'] = $this->pemeliharaan->get_all();
    $data['tittle'] = "Data Pemeliharaan";
    $data['content'] = "Pemeliharaan/data_pemeliharaan";
    $data['lokasi'] = $this->lks->get_all();
    $this->template->views($data);
  }
   public function tambah(){
    $data['title'] ='Tambah data Pemeliharaan';
    $data['content'] = 'Pemeliharaan/form';
    $data['state'] = 'insert';
    $data['lokasi'] = $this->lks->get_all();
    $this->template->views($data);
  }

  function ambilBarang()
  {
    $id_penempatan = $this->input->get('id');
    $this->db->join("barang","barang.id_barang = detail_barang.id_barang");
    $query = $this->dtl->get_many_by(array("id_penempatan" => $id_penempatan));
    $opt = '<option>Pilih Barang</option>';
    foreach ($query as $d) {
      $opt .="<option value='";
      $opt .= $d['id_detail'];
      $opt .="'>";
      $opt .= $d['id_detail'];
      $opt .=" - ";
      $opt .= $d['nama_barang'];
      $opt .="</option>";
    }
    echo $opt;
  }
  public function insert()
  {
    $this->db->trans_start();
    $datas = $this->input->post();
    $data['id_pemeliharaan'] = $datas['idpemeliharaan'];
    $data['id_lokasi'] = $datas['idlokasi'];
    $data['id_detail'] = $datas['iddetail'];
    $data['tgl_mulai'] = date("Y-m-d",strtotime($datas['tglmulai']));
    $data['jam_mulai'] = $datas['jammulai'];
    $data['tgl_selesai'] = date("Y-m-d",strtotime($datas['tglselesai']));
    $data['jam_selesai'] = $datas['jamselesai'];
    $data['kerusakan'] = $datas['kerusakan'];
    $data['penanganan'] = $datas['penanganan'];
    $this->pemeliharaan->insert($data);
    $this->db->trans_complete();
    redirect($this->redirect_url);
  }

  function edit(){

    $id = $this->input->get('id');
    $data['content'] = "Pemeliharaan/form";
    $data['d'] = $this->pemeliharaan->get_by(array("id_pemeliharaan" => $id));
    $data['lokasi'] = $this->db->get('lokasi')->result();  
    //$data['kategori'] = $this->ktg->get_all();  
    //$data['inventaris'] = $this->db->get('inventaris')->result();

    $data['title'] = "Edit Data Pemeliharaan";
    $data['state'] = "edit";

    $this->template->views($data);

  }

  function delete($id_pemeliharaan){
  $where = array('id_pemeliharaan' => $id_pemeliharaan);

  $this->load->model('pemeliharaan_model','pemeliharaan');
  $this->pemeliharaan->hapus_data($where,'pemeliharaan');

  redirect($this->redirect_url);
  }
}