<?php
    class Mlogin extends CI_Model{
    
        public function cekUser($Email,$Password){
            $q = "SELECT ID, Username FROM admin WHERE Email='".$Email."' AND Password='".$Password."'";
            $res = $this->db->query($q);
            return $res->row();
        }

        public function getUser($ID){
            $q = "SELECT * FROM admin WHERE ID = '".$ID."'";
            $res = $this->db->query($q);
            return $res->row();
        }
    }
?>