<?php
    class Profile extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');

            $session_user_id = $this->session->userdata('member_id');
            if(!$session_user_id){
            redirect('member');
            }
        }

        public function index(){
            $this->load->model('mprofile');

            $Id_pengguna = $this->session->userdata('member_id');
            
            $member= $this->mprofile->getDataPengguna($Id_pengguna);
            $data['listMember']=$member;

            $statusPesan= $this->mprofile->statusPesan($Id_pengguna);
            $data['pesanan']=$statusPesan;

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('profile/index',$data);
            $this->load->view('template/footer');
        }
 
        public function detail($ID){
            $this->load->model('mprofile');

            $Id_pengguna = $this->session->userdata('member_id');

            $member= $this->mprofile->ambilDetail($ID, $Id_pengguna);
            $data['detail']=$member;

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('profile/detail',$data);
            $this->load->view('template/footer');
        }

        public function edit(){
            $this->load->model('mprofile');

            $ID = $this->session->userdata('member_id');
            
            $member= $this->mprofile->getDataPengguna($ID);
            
            $data['listMember']=$member;

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('profile/edit',$data);
            $this->load->view('template/footer');
        }
        
        public function updateData(){
            $this->load->model('mprofile');
            
            $ID    = $this->input->post('ID', true);
            $Username  = $this->input->post('username', true);
            $nama_lengkap = $this->input->post('namaLengkap', true);
            $alamat = $this->input->post('alamat', true);
            $noHp = $this->input->post('noHp', true);

            $update = array(
                'ID'   => $ID,
                'Username'   => $Username,
                'Nama_lengkap'  => $nama_lengkap,
                'Alamat'      => $alamat,
                'No_HP'         => $noHp
            );
            
            $this->mprofile->update($update,$ID);
     
            redirect('profile');
        }

    }
?>