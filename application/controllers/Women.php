<?php
    class Women extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        
        public function index(){
            $this->load->model('mwomen');
            $jumbotron= $this->mwomen->getdatajumbotron();
            $data['listJumbotron']=$jumbotron;

            $sepatu= $this->mwomen->getdataSepatu();
            $data['listSepatu']=$sepatu;
            
            $sendal= $this->mwomen->getdataSendal();
            $data['listSendal']=$sendal;

            $sendalsepatu= $this->mwomen->getdataSendalsepatu();
            $data['listSendalsepatu']=$sendalsepatu;

            $this->load->view('template/header');
            $this->load->view('gender/women',$data);
            $this->load->view('template/footer');
        }
    }
?>