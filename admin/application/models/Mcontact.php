<?php
    class Mcontact extends CI_Model{
    
        public function ambilDataKontak(){
            $res = $this->db->get('kontak');
            return $res->result();
        }

        public function hapusData($ID){
            $this->db->where('ID', $ID);
            $res = $this->db->delete('kontak');
            return $this->db->affected_rows();
        }

        public function hitungInbox(){
            return $this->db->get('kontak')->num_rows();
        }
    }
?>