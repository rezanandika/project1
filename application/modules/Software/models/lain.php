  
<?php
class lain_model extends MY_Model{

  protected $_table     = 'lain';
  protected $_primary_key = 'id_lain';

   function hapus_data($where, $table){
      $this->db->where($where);
      
      $this->db->delete($table);
    }
}
?>