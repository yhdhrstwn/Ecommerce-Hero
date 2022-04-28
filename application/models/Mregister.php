<?php
    class Mregister extends CI_Model{
    
        public function register($insert){
            $this->db->insert('pengguna', $insert);
            return $this->db->affected_rows();
        }

        public function cekUser($Email,$Password){
            $q = "SELECT ID, Username FROM pengguna WHERE Email='".$Email."' AND Password='".$Password."'";
            $res = $this->db->query($q);
            return $res->row();
        }

        public function getUser($ID){
            $q = "SELECT * FROM pengguna WHERE ID = '".$ID."'";
            $res = $this->db->query($q);
            return $res->row();
        }
    }
?>