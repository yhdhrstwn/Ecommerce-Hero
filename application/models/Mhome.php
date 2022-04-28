<?php
    class Mhome extends CI_Model{
        public function getdataproduct(){
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }

        public function loadslider(){
            $this->db->where('Title','Slider');
            $hasil= $this->db->get('gambar_barang');
            return $hasil->result();
        }

        public function getpria(){
            $this->db->where('Nama','Pria');
            $hasil= $this->db->get('gambar_barang');
            return $hasil->row();
        }

        public function getwanita(){
            $this->db->where('Nama','Wanita');
            $hasil= $this->db->get('gambar_barang');
            return $hasil->row();
        }

        public function populerProduct(){
            $this->db->order_by('dilihat','DESC');
            $this->db->limit(7);
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }

        public function newProduct(){
            $this->db->order_by('ID','DESC');
            $this->db->limit(7);
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }
    }
?>