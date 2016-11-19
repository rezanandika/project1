<?php
class record_model extends CI_Model{

   public function ambil_data() {
/*   	$this->db->select('*');
	$this->db->from('detail');
	$this->db->join('pemeliharaan', 'pemeliharaan.id = detail.id');
	$query = $this->db->get();*/
	 return $this->db->count_all("");
   }
}