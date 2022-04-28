<?php
    class About extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        public function index(){
            $this->load->model('mabout');
            $jumbotron= $this->mabout->getdatajumbotron();
            $data['listJumbotron']=$jumbotron;

            $this->load->view('template/header');
            $this->load->view('home/about',$data);
            $this->load->view('template/footer');
        }
    }
?>