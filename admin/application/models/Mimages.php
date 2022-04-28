<?php
  class Mimages extends CI_Model{
  
    public function simpan($insert){
    
      $this->db->insert('gambar_barang', $insert);
      return $this->db->affected_rows();
    }
    
    public function update($update,$ID){
      $this->db->where('ID', $ID);
      $this->db->update('gambar_barang', $update);
      return $this->db->affected_rows();
    }
  
    public function ambilSemuaData(){
      $res = $this->db->get('gambar_barang');
      return $res->result();
    }

    public function hapusData($ID){
      $this->db->where('ID', $ID);
      $res = $this->db->delete('gambar_barang');
      return $this->db->affected_rows();
    }
    
    public function ambilData($ID){
      $this->db->where('ID', $ID);

      $res = $this->db->get('gambar_barang');
      return $res->row();
    }
  }
?>