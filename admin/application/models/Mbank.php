<?php
  class Mbank extends CI_Model{
  
    public function simpan($insert){
      $this->db->insert('jenis_bank', $insert);
      return $this->db->affected_rows();
    }
    
    public function update($update,$ID){
      $this->db->where('ID', $ID);
      $this->db->update('jenis_bank', $update);
      return $this->db->affected_rows();
    }
  
    public function ambilSemuaData(){
      $res = $this->db->get('jenis_bank');
      return $res->result();
    }

    public function hapusData($ID){
      $this->db->where('ID', $ID);
      $res = $this->db->delete('jenis_bank');
      return $this->db->affected_rows();
    }
    
    public function ambilData($ID){
      $this->db->where('ID', $ID);

      $res = $this->db->get('jenis_bank');
      return $res->row();
    }
  }
?>