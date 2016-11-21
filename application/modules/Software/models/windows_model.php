  
<?php
class windows_model extends MY_Model{

  protected $_table     = 'windows';
  protected $_primary_key = 'id_windows';

   function hapus_data($where, $table){
      $this->db->where($where);
      
      $this->db->delete($table);
    }
}
?>