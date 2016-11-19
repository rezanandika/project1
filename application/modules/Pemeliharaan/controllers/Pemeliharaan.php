<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Pemeliharaan extends MY_Controller {
 
  function __construct() {
  parent::__construct();
  $this->load->model('pemeliharaan_model');
 
  }
 
   function index(){
    $this->load->library('pagination');

    $data = array();
    // $data['dokter'] = $this->dokter->get_all();
  $data['count'] = $this->pemeliharaan_model->ambil_data(); 
  $config['base_url'] = 'http://localhost/record/index.php/pemeliharaan/index';
  $config['per_page'] = 25;
  $config['num_links'] = 5;
  $config['uri_segment'] = 3;
  $config['total_rows'] = $this->db->get('pemeliharaan')->num_rows();


  $page = ($this->uri->segment(3));
    $data["pemeliharaan"] = $this->pemeliharaan_model->
    get_pemeliharaan($config["per_page"], $page);

    
  $data['link'] = $this->pagination->create_links(); 

  $this->pagination->initialize($config);

    $data['tittle'] = "Data Pemeliharaan";
    $data['content'] = "Pemeliharaan/data_pemeliharaan";
    $this->template->views($data);
  }
}