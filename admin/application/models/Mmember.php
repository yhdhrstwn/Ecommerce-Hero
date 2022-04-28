<?php
    class Mmember extends CI_Model{
        public function getDataPengguna(){
            $hasil= $this->db->get('pengguna');
            return $hasil->result();
        }

        public function hitungUser(){
            return $this->db->get('pengguna')->num_rows();
        }
    }
?>