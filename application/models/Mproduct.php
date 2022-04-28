<?php
    class Mproduct extends CI_Model{
        public function getdataproduct(){
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }

        public function getdatajumbotron(){
            $this->db->where('Nama','Produk');
            $hasil= $this->db->get('gambar_barang');
            return $hasil->row();
        }

        public function getDataPria(){
            $this->db->where('Kategori','Pria');
            $this->db->limit(5);
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }

        public function getDataWanita(){
            $this->db->where('Kategori','Wanita');
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }

        public function getDetailProduct($slug){
            $this->db->where('slug',$slug);
            $hasil= $this->db->get('barang');
            return $hasil->row();
        }

        public function updateDilihat($slug){
            $q = "UPDATE barang SET dilihat=dilihat + 1 WHERE slug='".$slug."'";
            $this->db->query($q);
        }

        public function getPopulerProduct(){
            $this->db->order_by('dilihat','DESC');
            $this->db->limit(10);
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }

        public function newProductAll(){
            $this->db->order_by('ID','DESC');
            $this->db->limit(10);
            $hasil= $this->db->get('barang');
            return $hasil->result();
        }
    }
?>