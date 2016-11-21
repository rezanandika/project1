<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Barang extends MY_Controller {
 
	function __construct() {
  parent::__construct();
  $this->load->model('barang_model','barang');
  $this->load->model('Detail_model','detail');
  $this->load->module('kategori');
  $this->redirect_url = base_url(). "index.php/barang";

 
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
    $id = $this->input->get("id");
    $data['tittle'] ='Data Barang';
    $data['content'] = "barang/detail";
    $this->db->join("barang","barang.id_barang = detail_barang.id_barang",
                    "barang.id_barang = detail_barang.nama",
                    "barang.id_barang = detail_barang.spesifikasi",
                    "barang.id_barang = detail_barang.inventaris");

    //$data['penempatan'] = $this->db->get('penempatan')->result();
    $data['barang'] = $this->detail->get_many_by(array("detail_barang.id_barang" => $id));


    $this->template->views($data);
  }
  
  function insert(){
  $this->load->model('barang_model','barang');

   $this->db->trans_start();

    $datas = $this->input->post();

    $data['id_barang'] = $datas['idbarang'];
    $data['nama_barang'] = $datas['nama'];
    $data['spesifikasi'] = $datas['spesifikasi'];
    $data['id_kategori'] = $datas['kategori'];
    $data['satuan'] = $datas['satuan'];
    $data['jumlah'] = $datas['jumlah'];
    $data['id_inventaris'] = $datas['inventaris'];

    $this->barang->insert($data);


    $this->load->model('Detail_model','detail');

    $n =0;
    for ($i=0; $i < $datas['jumlah'] ; $i++) { 
    $n++;

    $query['id_detail'] = $datas['idbarang'].".".$n;
    $query['id_barang'] = $datas['idbarang'];
    $query['nama'] = $datas['nama'];
    $query['spesifikasi'] = $datas['spesifikasi'];
    $query['id_kategori'] = $datas['kategori'];
    $query['id_inventaris'] = $datas['inventaris'];

        $this->detail->insert($query);

    }

    $this->db->trans_complete();

    redirect($this->redirect_url);

  }




  /*function edit_detail(){
    $id = $this->input->get("id_detail");
    $data['title']    = 'Edit ';//.$this->title;
    //$data['state']    = 'edit';
    $data['content']  = 'content/barang/form_edit';

    $this->db->select('id_detail.*');
    //$this->db->join('file', "user.id = file.field_value AND file.table_name = 'user' AND file.table_field = 'id'", 'LEFT');
    $data['datas']    = $this->detail->get_by(array('detail_barang.id' => $id));
    $data['id_detail']     = $id;
    
    $this->load->model('Detail_model', 'detail_barang');
    $this->detail->order_by('id_barang', 'DESC');
    $data['detail']   = $this->detail_barang->get_all();

    $this->template($data);
  }*/

  function edit_detail($id = '$id_detail'){

    $where = array('id_detail' => $id);
    $this->load->model('Detail_model','detail');
    $data['detail'] = $this->detail->edit_data($where, 'detail_barang')->result();

    $data['lokasi'] = $this->db->get('lokasi')->result();
    $data['inventaris'] = $this->db->get('inventaris')->result();
    $data['antivirus'] = $this->db->get('antivirus')->result();
    $data['office'] = $this->db->get('office')->result();
    $data['windows'] = $this->db->get('windows')->result();

    $data['content']  = 'barang/form_edit';


    $this->template->views($data);

  }

  function update(){
    $this->load->model('Detail_model','detail');

    $id = $this->input->post('iddetail');
    $nama = $this->input->post('namadetail');
    $spesifikasi = $this->input->post('spesifikasi');
    $antivirus = $this->input->post('antivirus');
    $windows = $this->input->post('windows');
    $office = $this->input->post('office');
    $lain = $this->input->post('lain');
    $ip = $this->input->post('ip');
    $idperbaikan = $this->input->post('idperbaikan');
    $lokasi = $this->input->post('lokasi');


    $data = array(
            
            'nama' => $nama,
            'spesifikasi' => $spesifikasi,
            'perangkat' => "Antivirus : " .$antivirus. ", </br>" .$windows. ", " .$office. ", " .$lain. "." ,
            'IP' => $ip,
            'id_pemeliharaan' => $idperbaikan,
            'id_penempatan' => $lokasi

      );

    $where = array(
              'id_detail' => $id
      );


    $this->detail->update_data($where, $data, 'detail_barang');

    redirect($this->redirect_url);

  }





  function delete_detail($id_detail){
  $where = array('id_detail' => $id_detail);

  $this->load->model('Detail_model','detail');

  $this->detail->hapus_data($where,'detail_barang');

  redirect($this->redirect_url);


  }



  function delete($id_barang){
  $where = array('id_barang' => $id_barang);

  $this->load->model('barang_model','barang');
  $this->barang->hapus_data($where,'barang');

  redirect($this->redirect_url);
  }
}

