<?php
  class Mproduct extends CI_Model{
  
    public function simpan($insert){
    
      $this->db->insert('barang', $insert);
      return $this->db->affected_rows();
    }
    
    public function update($update,$ID){
      $this->db->where('ID', $ID);
      $this->db->update('barang', $update);
      return $this->db->affected_rows();
    }
  
    public function ambilSemuaData(){
      $this->db->order_by('ID','DESC');
      $res = $this->db->get('barang');
      return $res->result();
    }

    public function hapusData($ID){
      $this->db->where('ID', $ID);
      $res = $this->db->delete('barang');
      return $this->db->affected_rows();
    }
    
    public function ambilData($ID){
      $this->db->where('ID', $ID);
      $res = $this->db->get('barang');
      return $res->row();
    }

    public function ambilPembelian(){
      $this->db->SELECT('pgna.Nama_lengkap, byr.Gambar as bukti_pembayaran, bli.*');
      $this->db->FROM('pembelian bli');
      $this->db->JOIN('pengguna pgna', 'pgna.ID=bli.Id_pengguna', 'LEFT');
      $this->db->JOIN('pembayaran byr', 'byr.Id_pembelian=bli.ID', 'LEFT');
      $this->db->ORDER_BY('bli.ID', 'DESC');
      $this->db->Group_by('ID');
      $hasil= $this->db->get('pembelian');
      return $hasil->result();
    }

    public function ambilDetail($ID){
      $this->db->SELECT('bli.*, brg.*, dtl.*');
      $this->db->FROM('pembelian_detail dtl');
      $this->db->WHERE('bli.ID', $ID);
      $this->db->JOIN('pembelian bli', 'bli.ID=dtl.Id_pembelian', 'LEFT');
      $this->db->JOIN('barang brg', 'brg.ID=dtl.Id_barang', 'LEFT');
      $this->db->ORDER_BY('dtl.ID', 'DESC');
      $this->db->Group_by('dtl.ID');
      $hasil= $this->db->get('pembelian_detail');
      return $hasil->result();
    }

    public function hitungPesanan(){
      return $this->db->get('pembelian')->num_rows();
    }

    public function note($insert, $where){
      $this->db->where($where);
      $this->db->update('pembelian', $insert);
      return $this->db->affected_rows();
    }

    public function kurangStok($ID){
      $this->db->WHERE('Id_pembelian', $ID);
      $hasil = $this->db->get('pembelian_detail')->result();
      foreach($hasil as $h){
        $this->db->where('ID', $h->Id_barang);
        $barang = $this->db->get('barang')->row();
        $this->db->where('ID', $h->Id_barang);
        $this->db->update('barang', [
          'Stok_barang' => $barang->Stok_barang - $h->Jumlah
        ]);
      }

      return $this->db->affected_rows();
    }
  }
?>