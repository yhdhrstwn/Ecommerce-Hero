<?php
    class Mprofile extends CI_Model{
        public function getDataPengguna($id){
            $this->db->where(array('ID' => $id));
            $hasil= $this->db->get('pengguna');
            return $hasil->row();
        }

        public function update($update,$ID){
            $this->db->where('ID', $ID);
            $this->db->update('pengguna', $update);
            return $this->db->affected_rows();
        }

        public function statusPesan($Id_pengguna){
           
            $this->db->where('Id_pengguna', $Id_pengguna);
            $this->db->ORDER_BY('ID', 'DESC');
            $hasil= $this->db->get('pembelian');
            return $hasil->result();
        }

        public function ambilDetail($ID, $Id_pengguna){
            $this->db->SELECT('bli.*, brg.Nama_barang, Harga_barang, dtl.*');
            $this->db->FROM('pembelian_detail dtl');
            $this->db->JOIN('pembelian bli', 'bli.ID=dtl.Id_pembelian', 'LEFT');
            $this->db->JOIN('barang brg', 'brg.ID=dtl.Id_barang', 'LEFT');
            $this->db->WHERE('bli.ID', $ID);
            $this->db->WHERE('bli.Id_pengguna', $Id_pengguna);
            $this->db->ORDER_BY('dtl.ID', 'DESC');
            $this->db->Group_by('dtl.ID');
            $hasil= $this->db->get('pembelian_detail');
            return $hasil->result();
        }

        public function getId($ID){
            $this->db->SELECT('byr.*, pgn.*,byr.ID as Id_pembayaran');
            $this->db->where('byr.ID', $ID);
            $this->db->FROM('pembayaran byr');
            $this->db->JOIN('pengguna pgn', 'pgn.ID=byr.Id_pengguna', 'LEFT');
            $this->db->GROUP_BY('byr.ID');
            $hasil= $this->db->get('pembayaran');
            return $hasil->result();
        }
    }
?>