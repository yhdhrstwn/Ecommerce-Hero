<?php
class Bank extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index(){
        $this->load->model('mbank');
        
        $jenis = $this->mbank->ambilSemuaData();
 
        $data['jenis'] = $jenis;
        $this->load->view("template/header");
        $this->load->view("template/sidebar", $data);
        $this->load->view("pages/Bank/index", $data); // 
        $this->load->view("template/footer");
    }

    public function add(){
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pages/Bank/add");
        $this->load->view("template/footer");
    }
 
    public function simpan(){   
        
        $this->load->model('mbank');
        
        $bank  = $this->input->post('bank', true);
        $rek = $this->input->post('rek', true);
        $an = $this->input->post('an', true);
         
        $insert = array(
            'bank'          => $bank,
            'rek'             => $rek,
            'an'             => $an
        );
        
        $this->mbank->simpan($insert);
        
        redirect('Bank');
    }
    
    public function hapus($ID){
        $this->load->model('mbank');
 
        $this->mbank->hapusData($ID);
 
        redirect('Bank');
    }
 
    public function edit($ID){
        $this->load->model('mbank');
        $jenis = $this->mbank->ambilData($ID);
 
        $data['jenis'] = $jenis;
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pages/Bank/edit", $data); // 
        $this->load->view("template/footer");
    }
 
    public function updateData(){
        $this->load->model('mbank');
        
        $ID    = $this->input->post('ID', true);
        $bank  = $this->input->post('bank', true);
        $rek = $this->input->post('rek', true);
        $an = $this->input->post('an', true);
         
        $update = array(
            'bank'        => $bank,
            'rek'           => $rek,
            'an'           => $an
        );
 
        $this->mbank->update($update,$ID);
 
        redirect('Bank');
    }
 
}
