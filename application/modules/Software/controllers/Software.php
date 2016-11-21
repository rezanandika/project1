<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Software extends MY_Controller {
 
  function __construct() {
  parent::__construct();
  $this->load->model('antivirus_model', 'antivirus');
 
  }
 
   function antivirus(){


    $data = array();
   
    $data['antivirus'] = $this->antivirus->get_all();
    $data['tittle'] = "Data Antivirus";
    $data['content'] = "antivirus/data_antivirus";

    $this->template->views($data);
  }
}