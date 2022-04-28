<?php
class Product extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');

        $session_user_id = $this->session->userdata('user_id');
        if(!$session_user_id){
            redirect('Login');
        }
    }

    public function index(){
        $this->load->model('mproduct');
        
        $products = $this->mproduct->ambilSemuaData();
 
        $data['products'] = $products;
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pages/product/index", $data); // 
        $this->load->view("template/footer");
    }

    public function add(){
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pages/product/add");
        $this->load->view("template/footer");
    }
 
    public function simpan(){   
        
        $this->load->model('mproduct');
        
        $Nama_barang  = $this->input->post('Nama_barang', true);
        $Stok_barang = $this->input->post('Stok_barang', true);
        $Harga_barang = $this->input->post('Harga_barang', true);
        $Kategori = $this->input->post('Kategori', true);
        $Jenis = $this->input->post('Jenis', true);
        $Deskripsi = $this->input->post('Deskripsi', true);
        $slug = url_title($Nama_barang);
        
        $insert = array(
            'Nama_barang'   => $Nama_barang,
            'Id_admin'      => $this->session->userdata('user_id'),
            'Stok_barang'   => $Stok_barang,
            'Harga_barang'  => $Harga_barang,
            'Kategori'      => $Kategori,
            'Jenis'         => $Jenis,
            'Deskripsi'     => $Deskripsi,
            'slug'          => $slug
        );

        $config['upload_path']          = './assets/images/upload/product/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1000;
		$config['encrypt_name']         = true;		
 
		$this->load->library('upload', $config);	
 
		if ( ! $this->upload->do_upload('Gambar'))
		{
			$error = array('error' => 
			$this->upload->display_errors());
			echo "Upload Gagal";
			
		}else{
			$data = array('upload_data' => $this->upload->data());
			$namaFile = $data['upload_data']['file_name'];
			$gambar     =  $config['upload_path'] . $namaFile;
			$insert['Gambar' ] = $gambar;
		}

        $this->mproduct->simpan($insert);
        
        redirect('product');
    }
    
    public function hapus($ID){
        $this->load->model('mproduct');
 
        $this->mproduct->hapusData($ID);
 
        redirect('product');
    }
 
    public function edit($ID){
        $this->load->model('mproduct');
        $product = $this->mproduct->ambilData($ID);
 
        $data['product'] = $product;
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pages/product/edit", $data); // 
        $this->load->view("template/footer");
    }
 
    public function updateData(){
        $this->load->model('mproduct');
        
        $ID    = $this->input->post('ID', true);
        $Nama_barang  = $this->input->post('Nama_barang', true);
        $Stok_barang = $this->input->post('Stok_barang', true);
        $Harga_barang = $this->input->post('Harga_barang', true);
        $Kategori = $this->input->post('Kategori', true);
        $Jenis = $this->input->post('Jenis', true);
        $Deskripsi = $this->input->post('Deskripsi', true);
        $Gambar = $this->input->post('Gambar', true);
        $slug = url_title($Nama_barang);
        $update = array(
            'Nama_barang'   => $Nama_barang,
            'Stok_barang'   => $Stok_barang,
            'Harga_barang'  => $Harga_barang,
            'Kategori'      => $Kategori,
            'Jenis'         => $Jenis,
            'Deskripsi'     => $Deskripsi,
            'slug'          => $slug
        );
        
        if (!empty($_FILES["Gambar"]["size"])){ // => untuk mengecek, jika files Gambar
            $config['upload_path']          = './assets/images/upload/product/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 1000;
            $config['encrypt_name']         = true;		
     
            $this->load->library('upload', $config);	
     
            if ( ! $this->upload->do_upload('Gambar'))
            {
                $error = array('error' => 
                $this->upload->display_errors());
                echo "Upload Gagal";
                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $namaFile = $data['upload_data']['file_name'];
                $gambar     =  $config['upload_path'] . $namaFile;
                $update['Gambar' ] = $gambar;
            }
    
        }
        $this->mproduct->update($update,$ID);
 
        redirect('product');
    }
 
}
