<?php
    class Mabout extends CI_Model{
        public function getdatajumbotron(){
            $this->db->where('Nama','Tentang kami');
            $hasil= $this->db->get('gambar_barang');
            return $hasil->row();
        }
    }
?>