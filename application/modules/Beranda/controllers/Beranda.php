<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Beranda extends MY_Controller {
 
	function __construct() {
    parent::__construct();
    $this->redirect_url = base_url(). "index.php/beranda";
 
  }
 
   function index(){
   
    $data = array();
    $data['tittle'] = "Data Lokasi";
    $data['content'] = "Beranda/beranda";
    $this->template->views($data);
  }

  
}