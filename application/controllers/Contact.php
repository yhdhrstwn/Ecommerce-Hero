<?php
    class Contact extends CI_Controller{
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
            $this->load->model('mcontact');

            $id = $this->session->userdata('member_id');

            $jumbotron= $this->mcontact->getdatajumbotron();
            $data['listJumbotron']=$jumbotron;

            $pengguna= $this->mcontact->getDataPengguna($id);
            $data['listPengguna']=$pengguna;

            $this->load->view('template/header');
            $this->load->view('home/contact',$data);
            $this->load->view('template/footer');
        }

        public function send(){
            $this->load->model('mcontact');
        
            $Nama_lengkap  = $this->input->post('namaLengkap', true);
            $Email = $this->input->post('email', true);
            $No_HP = $this->input->post('no_hp', true);
            $Pesan = $this->input->post('pesan', true);
        
        
            $insert = array(
                'Nama_lengkap'  => $Nama_lengkap,
                'Email'         => $Email,
                'No_HP'         => $No_HP,
                'Pesan'         => $Pesan

            );

            $config['upload_path']          = './admin/assets/images/upload/komen/';
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
                $insert['Gambar' ] = $gambar;
            }
            
            $this->mcontact->simpan($insert);
            
            redirect('contact');
        }
    }
?>