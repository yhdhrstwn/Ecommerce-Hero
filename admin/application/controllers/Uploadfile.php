<?php
class Uploadfile extends CI_Controller{
	public function __construct()
	{
		parent::__construct();		
	}
	public function index(){
		$this->load->view('pages/upload/index');
	}
 
	public function submit(){
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1000;
		$config['encrypt_name']         = true;		
 
		$this->load->library('upload', $config);	
 
		if ( ! $this->upload->do_upload('datafile'))
		{
			$error = array('error' => 
			$this->upload->display_errors());
			echo "Upload Gagal";
			echo "<pre>";
			print_r($error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$namaFile = $data['upload_data']['file_name'];
			$path     =  $config['upload_path'] . $namaFile;
			echo "Upload Sukses";
			echo "<pre>";
				print_r($data);
				print_r($path);
		}
		echo "</pre>";
	}
}