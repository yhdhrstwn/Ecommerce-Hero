<?php  
class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
    	$this->load->library('form_validation');
    	$this->load->library('session');
	}

	public function index(){
        $this->load->view('pages/login/index');
  	}

    public function submit(){
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run() == false){
            $this->index();
        }else{
            
            $this->load->model('mlogin');    
            $Email   		= $this->input->post('email', true);
            $Password		= $this->input->post('password', true);
            $Password		= md5($Password);
            $cekUser 		= $this->mlogin->cekUser($Email,$Password);

            if ($cekUser){
                $this->session->set_userdata('user_id', $cekUser->ID);
                $this->session->set_userdata('Username', $cekUser->Username);
                redirect('Home');
            }else{
                $this->session->set_flashdata('error', "Username atau Password kamu salah.");
                redirect('Login'); 
            }
        }
    }
    public function logout(){
    $this->session->sess_destroy();
    redirect('Login');
  }
}
?>