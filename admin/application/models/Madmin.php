<?php
  class Madmin extends CI_Model{
  
    public function simpan($insert){
      $this->db->insert('admin', $insert);
      return $this->db->affected_rows();
    }
    
    public function update($update,$ID){
      $this->db->where('ID', $ID);
      $this->db->update('admin', $update);
      return $this->db->affected_rows();
    }
  
    public function ambilSemuaData(){
      $res = $this->db->get('admin');
      return $res->result();
    }

    public function hapusData($ID){
      $this->db->where('ID', $ID);
      $res = $this->db->delete('admin');
      return $this->db->affected_rows();
    }
    
    public function ambilData($ID){
      $this->db->where('ID', $ID);

      $res = $this->db->get('admin');
      return $res->row();
    }
  }
?>