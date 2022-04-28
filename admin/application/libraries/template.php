<?php
class Template{

	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
	}


	public function display($view="",$data=""){
		$this->ci->load->view('template/header');
		$this->ci->load->view('template/sidebar', $data);
		$this->ci->load->view($view,$data);
		$this->ci->load->view('template/footer');


	}

}
