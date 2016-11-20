<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Kategori extends MY_Controller {
 
  function __construct() {
    parent::__construct();
    $this->load->model('kategori_model','kategori');
 
  }
 
   function index(){
   
    $data = array();
   
    $data['kategori'] = $this->kategori->get_all();
    $data['tittle'] = "Data Kategori";
    $data['content'] = "Kategori/data_kategori";
    $this->template->views($data);
  }

  public function tes(){
    $data['content'] = 'Kategori/tes';
    $this->template->views($data);
  }

  public function tambah(){
    $data['title'] ='Tambah Kategori';

    $data['content'] = 'Kategori/form';

    $data['state'] = 'insert';

    $this->template->views($data);


  }

  function insert(){

   $this->db->trans_start();

    $datas = $this->input->post();

    $data['id_kategori'] = $datas['idkategori'];
    $data['nama'] = $datas['nama'];

    $this->kategori->insert($data);
    $this->db->trans_complete();

    redirect($this->redirect_url);

  }
}