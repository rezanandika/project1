  
<?php
class office_model extends MY_Model{

  protected $_table     = 'office';
  protected $_primary_key = 'id_office';

   function hapus_data($where, $table){
      $this->db->where($where);
      
      $this->db->delete($table);
    }
}
?>