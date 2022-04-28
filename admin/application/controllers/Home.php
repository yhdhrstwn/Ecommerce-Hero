<?php
    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->library('template');
            $this->load->library('form_validation');
            $this->load->library('session');

            $session_user_id = $this->session->userdata('user_id');
            if(!$session_user_id){
            redirect('Login');
            }
        }
        public function index(){
            $this->load->model('mmember');
            $jumlahUser= $this->mmember->hitungUser();
            $data['jumlahUser'] = $jumlahUser;
            
            $this->load->model('mcontact');
            $jumlahInbox= $this->mcontact->hitungInbox();
            $data['jumlahInbox'] = $jumlahInbox;

            $this->load->model('mproduct');
            $jumlahPesanan = $this->mproduct->hitungPesanan();
            $data['jumlahPesanan'] = $jumlahPesanan;
            
            $this->load->model('mlaporan');
            $laporan = $this->mlaporan->getDataLaporan();
            $data['laporan'] = $laporan;

            $view = "pages/home/index";
            
            $this->template->display($view,$data);
        }

        public function export(){
            $this->load->model('mlaporan');
            $laporan = $this->mlaporan->getDataLaporan();
            $data['laporan'] = $laporan;

            $this->load->view("pages/home/export", $data); // 
        }
    }
?>