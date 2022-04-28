<?php
    class Mcontact extends CI_Model{
        public function getdatajumbotron(){
            $this->db->where('Nama','Kontak');
            $hasil= $this->db->get('gambar_barang');
            return $hasil->row();
        }

        public function simpan($insert){
            $this->db->insert('kontak', $insert);
            return $this->db->affected_rows();
        }

        public function getDataPengguna($id){
            $this->db->where(array('ID' => $id));
            $hasil= $this->db->get('pengguna');
            return $hasil->row();
        }
    }
?>