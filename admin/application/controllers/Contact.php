<?php
    class Contact extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index(){
            $this->load->model('mcontact');
            
            $kontak = $this->mcontact->ambilDataKontak();
    
            $data['listPesan'] = $kontak;
            $this->load->view("template/header");
            $this->load->view("template/sidebar",);
            $this->load->view("pages/contact/index", $data); // 
            $this->load->view("template/footer");
        }
        
        public function hapus($ID){
            $this->load->model('mcontact');
    
            $this->mcontact->hapusData($ID);
    
            redirect('contact');
        }
    
    }
?>