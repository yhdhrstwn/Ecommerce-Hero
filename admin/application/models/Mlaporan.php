<?php
  class Mlaporan extends CI_Model{

    public function getDataLaporan(){
        $this->db->SELECT('p.*, dtl.*, b.*, u.*');
        $this->db->FROM('pembelian_detail dtl');
        $this->db->JOIN('pembelian p', 'p.ID=dtl.Id_pembelian', 'LEFT');
        $this->db->JOIN('pengguna u', 'p.Id_pengguna=u.Id', 'LEFT');
        $this->db->JOIN('barang b', 'b.ID=dtl.Id_barang', 'LEFT');
        $this->db->GROUP_BY('dtl.ID');
        $this->db->ORDER_BY('dtl.ID', 'DESC');
        $hasil= $this->db->get('pembelian_detail');
        return $hasil->result();
    }

  }
?>