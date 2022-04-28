<?php
class Images extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index(){
        $this->load->model('mimages');
        
        $imagess = $this->mimages->ambilSemuaData();
 
        $data['imagess'] = $imagess;
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pages/images/index", $data); // 
        $this->load->view("template/footer");
    }

    public function add(){
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pages/images/add");
        $this->load->view("template/footer");
    }
 
    public function simpan(){   
        
        $this->load->model('mimages');
        
        $Nama  = $this->input->post('Nama', true);
        $Gambar = $this->input->post('Gambar', true);
        $Title = $this->input->post('Title', true);
         
        $insert = array(
            'Nama'          => $Nama,
            'Title'         => $Title
        );

        
        $config['upload_path']          = './assets/images/upload/bahan/';
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
       
        $this->mimages->simpan($insert);
        
        redirect('images');
    }
    
    public function hapus($ID){
        $this->load->model('mimages');
 
        $this->mimages->hapusData($ID);
 
        redirect('images');
    }
 
    public function edit($ID){
        $this->load->model('mimages');
        $images = $this->mimages->ambilData($ID);
 
        $data['images'] = $images;
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pages/images/edit", $data); // 
        $this->load->view("template/footer");
    }
 
    public function updateData(){
        $this->load->model('mimages');
        
        $ID    = $this->input->post('ID', true);
        $Nama  = $this->input->post('Nama', true);
        $Gambar = $this->input->post('Gambar', true);
        $Title = $this->input->post('Title', true);
         
        $update = array(
            'Nama'          => $Nama,
            'Gambar'        => $Gambar,
            'Title'         => $Title
        );

        $config['upload_path']          = './assets/images/upload/bahan/';
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
			$update['Gambar' ] = $gambar;
		}
       
 
        $this->mimages->update($update,$ID);
 
        redirect('images');
    }
 
}
