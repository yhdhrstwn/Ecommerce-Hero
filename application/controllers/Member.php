<?php  
class Member extends CI_Controller{

	public function __construct(){
		parent::__construct();
    	$this->load->library('form_validation');
    	$this->load->library('session');
	}

	public function register(){
        $this->load->view('register');
  	}

	public function submitRegister(){
		$this->load->model('mregister');
        
        $Username  = $this->input->post('Username', true);
        $Nama_lengkap = $this->input->post('Nama_Lengkap', true);
        $Alamat = $this->input->post('Alamat', true);
        $No_HP = $this->input->post('No_HP', true);
        $Email = $this->input->post('Email', true);
        $Password = $this->input->post('Password', true);
        
        $insert = array(
            'Username'		=> $Username,
            'Nama_lengkap'	=> $Nama_lengkap,
            'Alamat'		=> $Alamat,
            'No_HP'			=> $No_HP,
            'Email'			=> $Email,
            'Password'		=> md5($Password),
        );

		$this->mregister->register($insert);
        
        redirect('home');
	}

	public function index(){
        $this->load->view('login');
  	}

	public function login(){
		$this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run() == false){
            // $this->index();
        }else{
            
            $this->load->model('mregister');    
            $Email   		= $this->input->post('email', true);
            $Password		= $this->input->post('password', true);
            $Password		= md5($Password);
            $cekUser 		= $this->mregister->cekUser($Email,$Password);
            if ($cekUser){
				$this->session->set_userdata('member_id', $cekUser->ID);
                $this->session->set_userdata('Username', $cekUser->Username);
                redirect('home');
            }else{
                $this->session->set_flashdata('error', "Username atau Password kamu salah.");
                redirect('member'); 
            }
        }
    }
    public function logout(){
    $this->session->sess_destroy();
    redirect('member');
	}

    public function syarat(){
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('syarat&ketentuan');
        $this->load->view('template/footer');
    }
}
?>