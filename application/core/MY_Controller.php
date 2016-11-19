<?php

class MY_Controller extends MX_Controller{
	function __construct()
	{
		parent::__construct();

		$this->load->module('template');
	}
}

interface ControllerInterface{
	public function index();
	public function add();
	public function edit();
	public function insert();
	public function update();
	public function delete();
	public function print_data();
	public function export_data();
}

class Admin_Controller extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('general');
		$this->load->helper('admin');
		login_check(true);

		// if(!in_array(uri_string(), $this->session->userdata('acc_grant'))){
		// 	// access not granted
		// 	$this->session->set_flashdata('notif_status', false);
		// 	$this->session->set_flashdata('notif_msg', "You don't have permission to access the menu");
		// 	redirect(base_url_admin().'dashboard');
		// }
	}

	public function template($data = array()){
		$data['content'] 	= $this->session->userdata('template_admin_use').$data['content'];
		$this->load->view($this->session->userdata('template_admin'), $data);
	}
}

class Public_Controller extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('general');
		$this->load->helper('public');
		public_template();
	}

	public function template($data = array()){
		$data['content'] 	= $this->session->userdata('template_use').$data['content'];
		$this->load->view($this->session->userdata('template'), $data);
	}
}


?>