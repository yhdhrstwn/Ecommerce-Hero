<?php
    class Men extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        
        public function index(){
            $this->load->model('mmen');
            $jumbotron= $this->mmen->getdatajumbotron();
            $data['listJumbotron']=$jumbotron;

            $sepatu= $this->mmen->getdataSepatu();
            $data['listSepatu']=$sepatu;
            
            $sendal= $this->mmen->getdataSendal();
            $data['listSendal']=$sendal;

            $sendalsepatu= $this->mmen->getdataSendalsepatu();
            $data['listSendalsepatu']=$sendalsepatu;

            $this->load->view('template/header');
            $this->load->view('gender/men',$data);
            $this->load->view('template/footer');
        }
    }
?>