<?php
    class Cart extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');

            $session_user_id = $this->session->userdata('member_id');
            if(!$session_user_id){
            redirect('member');
            }
        }

        public function index(){
            $this->load->model('mcart');
            $this->load->model('mhome');
            $ID = $this->session->userdata('member_id');

            $populer= $this->mhome->populerProduct();
            $data['populer']=$populer;

            // var_dump($data['cart']);die;
            // $barang= $this->mcart->getdataproduct($ID);
            // $data['listBarang']=$barang;
            
            $carta= $this->mcart->getDataCart($ID);
            $data['listCart']=$carta;
            // print_r($data['listCart']);die;

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('product/cart',$data);
            $this->load->view('template/footer');
        }

        public function add(){

            $this->load->model('mcart');

            $Size  = $this->input->post('Size', true);
            $Id_barang = $this->input->post('Id_barang', true);
            $Id_pengguna = $this->session->userdata('member_id');

            $cart = $this->mcart->checkPenggunaAndBarang($Id_barang, $Id_pengguna);
            if($cart){
                $cart->Jumlah += 1;
                $where = [
                    'ID' => $cart->ID
                ];

                $data = [
                    'Jumlah' => $cart->Jumlah
                ];

                $this->mcart->updateKeranjang($where, 'cart', $data);
                $respon=[
                    'status' => true,
                    'pesan'  => 'Berhasil Ditambahkan'
                ];
                
                echo json_encode($respon);
            }else{
                $insert = array(
                    'Size'        => $Size,
                    'Id_barang'   => $Id_barang,
                    'Id_pengguna' => $Id_pengguna,
                    'Jumlah'=>1
                );
    
                $hasil=$this->mcart->tambahKeranjang($insert);
                if ($hasil){
                    $status = true;
                    $pesan = "Berhasil Ditambahkan";
    
                }else{
                    $status = false;
                    $pesan = "Gagal Ditambahkan";
    
                }
    
                $respon=[
                    'status' => $status,
                    'pesan'  => $pesan
                ];
                
                echo json_encode($respon);
            }
        }

        public function checkout(){

            $this->load->model('mcart');

            $Id_barang = $this->input->post('Id_barang', true);
            $Jumlah = $this->input->post('Jumlah', true);
            $Size = $this->input->post('Size', true);
            $Total = $this->input->post('Total', true);
            
            
            $insert = array(
                'Id_barang'   => $Id_barang,
                'Jumlah'   => $Jumlah,
                'Size'   => $Size,
                'Total'   => $Total,
                'Id_pengguna' =>  $this->session->userdata('member_id')
            );

            $hasil=$this->mcart->checkout($insert);

            if ($hasil){
                $status = true;
                $pesan = "Berhasil Dicheckout";

            }else{
                $status = false;
                $pesan = "Gagal Dicheckout";

            }

            $respon=[
                'status' => $status,
                'pesan'  => $pesan,
                'Id_transaksi' => $hasil
            ];
            
            echo json_encode($respon);
        }

        public function buy(){

            $this->load->model('mcart');

            $Id_barang = $this->input->post('Id_barang', true);
            $Size = $this->input->post('Size', true);
            
            $this->db->where('ID', $Id_barang);
            $harga = $this->db->get('barang')->row()->Harga_barang;
            
            $insert = array(
                'Id_barang'   => $Id_barang,
                'Jumlah'   => 1,
                'Size'   => $Size,
                'Total'   => $harga,
                'Id_pengguna' =>  $this->session->userdata('member_id')
            );

            $hasil=$this->mcart->buy($insert);

            if ($hasil){
                $status = true;
                $pesan = "Berhasil Dibeli";

            }else{
                $status = false;
                $pesan = "Gagal Dibelu";

            }

            $respon=[
                'status' => $status,
                'pesan'  => $pesan,
                'Id_transaksi' => $hasil
            ];
            
            echo json_encode($respon);
        }

        public function hapus($ID){
            $this->load->model('mcart');
     
            $this->mcart->hapusData($ID);
     
            redirect('cart');
        }
    }
?>