<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Template extends MY_Controller {
 
	function __construct()
	 {
 		 parent::__construct();
 
  }
 
function views($data = null){

     $this->load->view('index', $data);
  }

  function tes($data = null){

     $this->load->view('tes', $data);
  }
  
  
}