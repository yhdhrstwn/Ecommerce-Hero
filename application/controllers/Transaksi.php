<?php
    class Transaksi extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        public function detail($ID){
            $this->load->model('mtransaksi');
            $transaksi = $this->mtransaksi->getId($ID);
            if (!$transaksi ) {
                show_404();
            }
            $data['transaksi'] = $transaksi;
            
            $harga= $this->mtransaksi->getDataHarga();
            $data['listHarga']=$harga;

            $bank = $this->mtransaksi->bank();
            $data['bank'] = $bank;

            $detail = $this->mtransaksi->ambilDetail($transaksi->Id_pembelian);
            $data['detail'] = $detail;

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('transaksi/index',$data);
            $this->load->view('template/footer');
        }

        public function bayar($ID){
            $this->load->model('mtransaksi');

            $config['upload_path']          = './admin/assets/images/upload/bayar/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 1000;
            $config['encrypt_name']         = true;		
    
            $this->load->library('upload', $config);	
    
            if ( ! $this->upload->do_upload('gambar'))
            {
                $error = array('error' => 
                $this->upload->display_errors());
                echo "Upload Gagal";
                var_dump($error );
                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $namaFile = $data['upload_data']['file_name'];
                $gambar     =  $config['upload_path'] . $namaFile;
                $insert['Gambar'] = $gambar;

                $where = [
                    'ID' => $ID,
                ];
            }
             
            $this->mtransaksi->simpan($insert, $where);
            
            redirect('transaksi/ucap');
        }

        public function ucap(){

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('transaksi/ucapan');
            $this->load->view('template/footer');
        }
    }
?>