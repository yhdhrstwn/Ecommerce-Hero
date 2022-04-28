<?php
    class Mtransaksi extends CI_Model{
        public function getDataHarga(){
            $hasil= $this->db->get('pembayaran');
            return $hasil->result();
        }

        public function getId($ID){
            $this->db->SELECT('byr.*, pgn.*,byr.ID as Id_pembayaran');
            $this->db->where('byr.ID', $ID);
            $this->db->FROM('pembayaran byr');
            $this->db->JOIN('pengguna pgn', 'pgn.ID=byr.Id_pengguna', 'LEFT');
            $this->db->GROUP_BY('byr.ID');
            $hasil= $this->db->get('pembayaran');
            return $hasil->row();
        }
        
        public function ambilDetail($ID){
            $this->db->SELECT('bli.*, brg.*, dtl.*');
            $this->db->FROM('pembelian_detail dtl');
            $this->db->JOIN('pembelian bli', 'bli.ID=dtl.Id_pembelian', 'LEFT');
            $this->db->JOIN('barang brg', 'brg.ID=dtl.Id_barang', 'LEFT');
            $this->db->WHERE('bli.ID', $ID);
            $this->db->ORDER_BY('dtl.ID', 'DESC');
            $this->db->Group_by('dtl.ID');
            $hasil= $this->db->get('pembelian_detail');
            return $hasil->result();
        }

        public function simpan($insert, $where){
            $this->db->where($where);
            $this->db->update('pembayaran', $insert);
            return $this->db->affected_rows();
        }
 
        public function bank(){
            $hasil = $this->db->get('jenis_bank');
            return $hasil->result();
        }
    }
?>