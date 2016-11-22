  
<?php
class lokasi_model extends MY_Model{
/*  public function selectAll()
   {
  $this->db->get('kategori');
   }

   public function ambil_data() {
        return $this->db->count_all("kategori");
   }
    public function get_kategori($limit, $start) {
    $this->db->limit($limit, $start);
    $query = $this->db->get("kategori");

    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
               $data[] = $row;
            }
            return $data;
        }
        return false;
   }*/
  protected $_table     = 'lokasi';
  protected $primary_key = 'id_lokasi';

   function hapus_data($where, $table){
      $this->db->where($where);
      
      $this->db->delete($table);
    }
}
?>