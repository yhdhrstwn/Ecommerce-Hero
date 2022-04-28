<?php
    class Product extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index(){
            $this->load->model('mproduct');
            $barang= $this->mproduct->getdataproduct();
            $data['listBarang']=$barang;

            $jumbotron= $this->mproduct->getdatajumbotron();
            $data['listJumbotron']=$jumbotron;

            $pria= $this->mproduct->getDataPria();
            $data['listPria']=$pria;

            $wanita= $this->mproduct->getDataWanita();
            $data['listWanita']=$wanita;

            $this->load->view('template/header');
            $this->load->view('product/index',$data);
            $this->load->view('template/footer');
        }

        public function detail($slug){
            
            $this->load->model('mproduct');
            
            $this->mproduct->updateDilihat($slug);
            $detail= $this->mproduct->getDetailProduct($slug);
            $data['detail']=$detail;

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('product/detail',$data);
            $this->load->view('template/footer');
        }

        public function populer(){
            $this->load->model('mproduct');

            $jumbotron= $this->mproduct->getdatajumbotron();
            $data['listJumbotron']=$jumbotron;

            $populer= $this->mproduct->getPopulerProduct();
            $data['populer']=$populer;

            $this->load->view('template/header');
            $this->load->view('product/populer',$data);
            $this->load->view('template/footer');
        }

        public function new(){
            $this->load->model('mproduct');

            $jumbotron= $this->mproduct->getdatajumbotron();
            $data['listJumbotron']=$jumbotron;

            $new= $this->mproduct->newProductAll();
            $data['new']=$new;

            $this->load->view('template/header');
            $this->load->view('product/newProduct',$data);
            $this->load->view('template/footer');
        }
    }
?>