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
  public function detail(){
    $id = $this->input->get("id");
    $data['tittle'] ='Data Barang';
    $data['content'] = "detail_barang/data_detail";
    $this->db->join("barang","barang.id_barang = detail_barang.id_barang",
                    "barang.id_barang = detail_barang.nama",
                    "barang.id_barang = detail_barang.spesifikasi",
                    "barang.id_barang = detail_barang.inventaris");

    //$data['penempatan'] = $this->db->get('penempatan')->result();
    $data['detail'] = $this->detail->get_many_by(array("detail_barang.id_barang" => $id));

    $this->template->views($data);
  }

  public function insert(){

    $n =0;
    for ($i=0; $i < $datas['jumlah'] ; $i++) { 
    $n++;

    $query['id_detail'] = $datas['idbarang'].".".$n;
    $query['id_barang'] = $datas['idbarang'];
    $query['nama'] = $datas['nama'];
    $query['spesifikasi'] = $datas['spesifikasi'];
    $query['id_kategori'] = $datas['kategori'];
    $query['satuan'] = $datas['satuan'];
    $query['jumlah'] = $datas['jumlah'];
    $query['id_inventaris'] = $datas['inventaris'];

        $this->detail->insert($query);

    }
/*
    $this->db->trans_complete();

    redirect($this->redirect_url);*/

  }

  function edit_detail(){
    $id = $this->input->get("id");
    $data['title']    = 'Edit '.$this->title;
    //$data['state']    = 'edit';
    $data['content']  = 'content/barang/form_edit';

    $this->db->select('id_detail.*');
    //$this->db->join('file', "user.id = file.field_value AND file.table_name = 'user' AND file.table_field = 'id'", 'LEFT');
    $data['datas']    = $this->detail->get_by(array('detail_barang.id' => $id));
    $data['id']     = $id;
    
    $this->load->model('Detail_model', 'detail_barang');
    $this->detail_barang->order_by('id', 'DESC');
    $data['detail']   = $this->detail_barang->get_all();

    $this->template($data);
  }

  function delete_detail($id_detail){
  $where = array('id_detail' => $id_detail);
  $this->load->model('Detail_model','detail');
  $this->detail->hapus_data($where,'detail_barang');
  redirect($this->redirect_url);
  }

  
}