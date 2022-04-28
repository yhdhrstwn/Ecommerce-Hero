<?php
class Admin extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index(){
        $this->load->model('madmin');
        
        $admins = $this->madmin->ambilSemuaData();
 
        $data['admins'] = $admins;
        $this->load->view("template/header");
        $this->load->view("template/sidebar", $data);
        $this->load->view("pages/admin/index", $data); // 
        $this->load->view("template/footer");
    }

    public function add(){
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pages/admin/add");
        $this->load->view("template/footer");
    }
 
    public function simpan(){   
        
        $this->load->model('madmin');
        
        $Username  = $this->input->post('username', true);
        $Email = $this->input->post('email', true);
        $Password = $this->input->post('password', true);
         
        $insert = array(
            'Username'          => $Username,
            'Email'             => $Email,
            'Password'          => md5($Password)
        );
        
        $this->madmin->simpan($insert);
        
        redirect('admin');
    }
    
    public function hapus($ID){
        $this->load->model('madmin');
 
        $this->madmin->hapusData($ID);
 
        redirect('admin');
    }
 
    public function edit($ID){
        $this->load->model('madmin');
        $admin = $this->madmin->ambilData($ID);
 
        $data['admin'] = $admin;
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pages/admin/edit", $data); // 
        $this->load->view("template/footer");
    }
 
    public function updateData(){
        $this->load->model('madmin');
        
        $ID    = $this->input->post('ID', true);
        $Username  = $this->input->post('username', true);
        $Email = $this->input->post('email', true);
        $Password = $this->input->post('password', true);
         
        $update = array(
            'Username'        => $Username,
            'Email'           => $Email,
            'Password'        => $Password
        );
 
        $this->madmin->update($update,$ID);
 
        redirect('admin');
    }
 
}
