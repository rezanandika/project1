<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Barang extends MY_Controller {
 
	function __construct() {
  parent::__construct();
  $this->load->model('Barang_model','barang');
  $this->load->model('Detail_model','detail');
  $this->load->module('kategori');
  // $this->load->module('inventaris');
  $this->load->model('Kategori_model', 'ktg');
  $this->load->model('lain_model','ln');
  $this->load->model('Baranglain_model','brgln');

  // $this->load->model('Inventaris_model', 'invt');
  $this->redirect_url = base_url(). "index.php/barang";

 
  }
 
   function index(){

    $data = array();
    $this->db->join('inventaris','inventaris.id_inventaris = barang.id_inventaris');
	  $this->db->join('kategori','kategori.id_kategori = barang.id_kategori');
    $data['barang'] = $this->barang->get_all();

                     
  	$data['tittle'] = "Data Barang";
  	$data['content'] = "Barang/data_barang";
    $this->template->views($data);
  }


  public function tambah(){
    $data['title'] ='Tambah Data Barang';
    $data['content'] = 'Barang/form';
    $data['state'] = 'insert';

    $data['kategori'] = $this->ktg->get_all();  
    $data['inventaris'] = $this->db->get('inventaris')->result();
    /*$this->kategori->order_by('id_kategori', 'DESC');
    $data['kategori'] = $this->kategori->get_all();*/
    //modules::run('kategori');
    //$this->kategori->tes();
    $this->template->views($data);
    
  }

  public function detail(){
    $id = $this->input->get("id");
    $data['tittle'] ='Data Detail Barang';
    $data['content'] = "barang/detail";
    $this->db->join("barang","barang.id_barang = detail_barang.id_barang");
    $this->db->join('inventaris','inventaris.id_inventaris = barang.id_inventaris');
    $this->db->join('kategori','kategori.id_kategori = barang.id_kategori');
    $this->db->join('antivirus','antivirus.id_antivirus = detail_barang.id_antivirus','left');
    $this->db->join('windows','windows.id_windows = detail_barang.id_windows','left');
    $this->db->join('office','office.id_office = detail_barang.id_office','left');
    $this->db->join('lain','lain.id_lain = detail_barang.id_lain','left');
    $this->db->join('lokasi','lokasi.id_lokasi = detail_barang.id_penempatan','left');
    //$data['penempatan'] = $this->db->get('penempatan')->result();
    $data['barang'] = $this->detail->get_many_by(array("detail_barang.id_barang" => $id));

    $this->db->join("lain",'lain.id_lain = lain_barang.id_lain');
    $data['brglain'] = $this->brgln->get_all();


    $this->template->views($data);
  }
  
  function insert(){
  

   $this->db->trans_start();

    $datas = $this->input->post();

    $data['id_barang'] = $datas['idbarang'];
    $data['nama_barang'] = $datas['namabarang'];
    $data['spesifikasi'] = $datas['spesifikasi'];
    $data['id_kategori'] = $datas['kategori'];
    $data['satuan'] = $datas['satuan'];
    $data['jumlah'] = $datas['jumlah'];
    $data['distribusi'] = $datas['jumlah'];
    $data['id_inventaris'] = $datas['inventaris'];

    $this->barang->insert($data);


    // $this->load->model('Detail_model','detail');

    $n =0;
    for ($i=0; $i < $datas['jumlah'] ; $i++) { 
    $n++;

    $query['id_detail'] = $datas['idbarang'].".".$n;
    $query['id_barang'] = $datas['idbarang'];
    // $query['nama_detail'] = $datas['namabarang'];
    // $query['spesifikasi'] = $datas['spesifikasi'];
    // $query['id_kategori'] = $datas['kategori'];
    // $query['id_inventaris'] = $datas['inventaris'];

        $this->detail->insert($query);

    }

    $this->db->trans_complete();

    redirect($this->redirect_url);

  }

  public function edit()
  {
    $id = $this->input->get('id');
    $data['content'] = "Barang/form";
    $data['d'] = $this->barang->get_by(array("id_barang" => $id));
    $data['kategori'] = $this->ktg->get_all();  
    $data['inventaris'] = $this->db->get('inventaris')->result();

    $data['title'] = "Edit Data Barang";
    $data['state'] = "edit";

    $this->template->views($data);
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

  function edit_detail(){

    $id = $this->input->get('id');
    $this->db->join("barang","barang.id_barang = detail_barang.id_barang");
    $data['d'] = $this->detail->get_by(array("id_detail" => $id));

    $data['lokasi'] = $this->db->get('lokasi')->result();
    $data['inventaris'] = $this->db->get('inventaris')->result();
    $data['antivirus'] = $this->db->get('antivirus')->result();
    $data['office'] = $this->db->get('office')->result();
    $data['windows'] = $this->db->get('windows')->result();
    $data['lain'] = $this->ln->get_all();
    $data['brglain'] = $this->brgln->get_many_by(array("id_detail" => $id ));
    // $data['modal'] = $this->load->view("modal",$data);


    $data['state'] = "edit";
    $data['content']  = 'barang/form_edit';


    $this->template->views($data);

  }

  function update(){
    


   $this->db->trans_start();

    $datas = $this->input->post();
    $id = $this->input->post('idbarang');

    // $data['id_barang'] = $datas['idbarang'];
    $data['nama_barang'] = $datas['nama'];
    $data['spesifikasi'] = $datas['spesifikasi'];
    $data['id_kategori'] = $datas['kategori'];
    $data['satuan'] = $datas['satuan'];
    $data['jumlah'] = $datas['jumlah'];
    $data['id_inventaris'] = $datas['inventaris'];

    $this->barang->update($id,$data);

    // proses hapus di detail barang
    $this->detail->delete_by(array("id_barang" => $id));
    
    // proses insert detail barang
    $n =0;
    for ($i=0; $i < $datas['jumlah'] ; $i++) { 
    $n++;

    $query['id_detail'] = $datas['idbarang'].".".$n;
    $query['id_barang'] = $datas['idbarang'];
    // $query['nama'] = $datas['nama'];
    // $query['spesifikasi'] = $datas['spesifikasi'];
    // $query['id_kategori'] = $datas['kategori'];
    // $query['id_inventaris'] = $datas['inventaris'];

        $this->detail->insert($query);

    }

    $this->db->trans_complete();

    redirect($this->redirect_url);
  }





  function delete_detail($id_detail){
  $where = array('id_detail' => $id_detail);

  $this->load->model('Detail_model','detail');

  $this->detail->hapus_data($where,'detail_barang');

  redirect($this->redirect_url);


  }

  function detail_update()
  {

    # code...
    $id = $this->input->post('iddetail');
    $data = $this->input->post();

     $this->redirect_url_id = base_url()."index.php/barang/detail/?id=".$data['id_barang'];

     $query = $this->detail->get_by(array("id_detail" => $id));
     $status_distribusi="";
     // memberi nilai pada status distribusi
     if ($data['id_penempatan'] == "pilih") {
          $status_distribusi .= 0;
     }else{
          $status_distribusi .= $query['status_distribusi'] + 1;
     }

    $this->db->trans_start();
    $datas = array(
            "id_antivirus" => $data['id_antivirus'],
            "id_windows" => $data['id_windows'],
            "id_office" => $data['id_office'], 
            "IP" => $data['ip'],
            "status_distribusi" => $status_distribusi,
            "id_penempatan" => $data['id_penempatan']
        );

    


    $lain = array();
    if(!empty($data['checks'])){
    foreach ($data['checks'] as $idchecks) {
      array_push($lain, array('idlainbarang' => generate_id('idbaranglain'), 'id_detail' => $id,'id_lain' => $idchecks));
      }
    }

    $this->detail->update($id,$datas);

    $this->brgln->delete_by(array('id_detail' => $id)); 
    if(!empty($lain))
    $this->brgln->insert_batch($lain);

    //proses mengurangi stok barang
    $door = $this->detail->get_by(array("id_detail" => $id));
    $brg = $this->barang->get_by(array("id_barang" => $data['id_barang']));
    $stok=0;
    if ($door['id_penempatan'] != NULL & $door['status_distribusi'] == 1) {
            $stok = 1;
            $push = $brg['distribusi'] - $stok;
    }elseif ($door['status_distribusi'] == 0) {
        $stok = 1;
        $push = $brg['distribusi'] + $stok;
    }
   
    
    $ekse = array("distribusi" => $push);
    $this->barang->update($data['id_barang'],$ekse);

    $this->db->trans_complete();

    redirect($this->redirect_url_id);

  }



  function delete($id_barang){
  $where = array('id_barang' => $id_barang);

  $this->load->model('barang_model','barang');
  $this->barang->hapus_data($where,'barang');

  redirect($this->redirect_url);
  }
}

