<?php
    class Pesanan extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('template');
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        
        public function index(){
            $this->load->model('mproduct');
            
            $pesanan = $this->mproduct->ambilPembelian();
    
            $data['pesanan'] = $pesanan;
            $this->load->view("template/header");
            $this->load->view("template/sidebar");
            $this->load->view("pages/pesanan/index", $data); // 
            $this->load->view("template/footer");
        }
        
        public function detail($ID){
            $this->load->model('mproduct');
            
            $detail = $this->mproduct->ambilDetail($ID);
            $data['detail'] = $detail;
            $this->load->view("template/header");
            $this->load->view("template/sidebar");
            $this->load->view("pages/pesanan/detail", $data);
            $this->load->view("template/footer");
        }

        public function konfirm($ID){
            $this->load->model('mproduct');
            $data['ID'] = $ID;
            $this->load->view("template/header");
            $this->load->view("template/sidebar");
            $this->load->view("pages/pesanan/confirm", $data);
            $this->load->view("template/footer");
        }

        public function note(){
            $this->load->model('mproduct');
        
            $ID    = $this->input->post('ID', true);
            $Status  = $this->input->post('Status', true);
            $Note = $this->input->post('Note', true);
            
            $insert = array(
                'Status'        => $Status,
                'Note'           => $Note
            );
             
            $config['upload_path']          = './assets/images/upload/transfer/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 1000;
            $config['encrypt_name']         = true;		
    
            $this->load->library('upload', $config);	
    
            if ( ! $this->upload->do_upload('Gambar'))
            {
                $error = array('error' => 
                $this->upload->display_errors());
                echo "Upload Gagal";
                var_dump($error );
                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $namaFile = $data['upload_data']['file_name'];
                $gambar     =  $config['upload_path'] . $namaFile;
                $insert['Gambar' ] = $gambar;
            }

            $where = [
                'ID' => $ID,
            ];
    
            $this->mproduct->note($insert,$where);

            if($Status == 'success'){
                $this->mproduct->kurangStok($ID);
            }

            redirect('home');
        }
    }
?>