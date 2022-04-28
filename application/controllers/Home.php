<?php
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        
        public function index(){
            $this->load->model('mhome');
            $barang= $this->mhome->getdataproduct();
            $data['listBarang']=$barang;

            $slider= $this->mhome->loadslider();
            $data['sliders']=$slider;

            $pria= $this->mhome->getpria();
            $data['prias']=$pria;

            $wanita= $this->mhome->getwanita();
            $data['wanitas']=$wanita;

            $populer= $this->mhome->populerProduct();
            $data['populer']=$populer;

            $new= $this->mhome->newProduct();
            $data['news']=$new;

            $this->load->view('template/header');
            $this->load->view('home/index',$data);
            $this->load->view('template/footer');
        }
    }
?>