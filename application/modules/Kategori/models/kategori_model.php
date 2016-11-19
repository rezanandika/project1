	
<?php
class kategori_model extends MY_Model{
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
  protected $_table     = 'kategori';
  protected $_primary_key = 'id_kategori';
}
?>