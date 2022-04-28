<?php
    class Mmen extends CI_Model{

        public function getdataproduct(){
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }

        public function getdatajumbotron(){
            $this->db->where('Nama','Produk');
            $hasil= $this->db->get('gambar_barang');
            return $hasil->row();
        }

        public function getDataSepatu(){
            $this->db->where('Jenis','Sepatu');
            $this->db->where('Kategori','Pria');
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }

        public function getDataSendal(){
            $this->db->where('Jenis','Sendal');
            $this->db->where('Kategori','Pria');
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }

        public function getDataSendalsepatu(){
            $this->db->where('Jenis','Sendal Sepatu');
            $this->db->where('Kategori','Pria');
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }
    }
?>