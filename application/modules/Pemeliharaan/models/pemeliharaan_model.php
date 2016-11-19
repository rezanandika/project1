	
<?php
class pemeliharaan_model extends CI_Model{
   function selectAll()
   {
  $this->db->get('pemeliharaan')->result();
   }
   public function ambil_data() {
        return $this->db->count_all("pemeliharaan");
   }
    public function get_pemeliharaan($limit, $start) {
    $this->db->limit($limit, $start);
    $query = $this->db->get("pemeliharaan");

    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
               $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}
?>