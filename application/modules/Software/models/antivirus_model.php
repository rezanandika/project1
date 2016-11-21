  
<?php
class antivirus_model extends MY_Model{

  protected $_table     = 'antivirus';
  protected $_primary_key = 'id_antivirus';

   function hapus_data($where, $table){
      $this->db->where($where);
      
      $this->db->delete($table);
    }
}
?>