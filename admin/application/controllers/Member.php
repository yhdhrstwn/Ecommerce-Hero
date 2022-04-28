<?php
    class Member extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index(){
            $this->load->model('mmember');
            $pengguna= $this->mmember->getDataPengguna();
            $data['listPengguna']=$pengguna;

            $this->load->view("template/header");
            $this->load->view("template/sidebar");
            $this->load->view("member/index", $data); // 
            $this->load->view("template/footer");
        }
    }
?>