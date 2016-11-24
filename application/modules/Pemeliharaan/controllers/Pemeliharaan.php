<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Pemeliharaan extends MY_Controller {
 
  function __construct() {
  parent::__construct();
  $this->load->model('pemeliharaan_model', 'pemeliharaan');
  $this->load->module('penempatan');
  $this->load->model('penempatan_model', 'pnp');
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
    $data['waktu_mulai'] = $datas['waktumulai'];
    $data['tgl_selesai'] = date("Y-m-d",strtotime($datas['tglselesai']));
    $data['waktu_selesai'] = $datas['waktuselesai'];
    $data['kerusakan'] = $datas['kerusakan'];
    $data['penanganan'] = $datas['penanganan'];

    $this->pemeliharaan->insert($data);
    $this->db->trans_complete();

    redirect($this->redirect_url);
  }
}