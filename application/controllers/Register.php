<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        $this->load->model('Customer_model');
        
    }

	public function index()
	{	
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function berhasil()
	{	
		$this->load->view('header');
		$this->load->view('berhasil');
		$this->load->view('footer');
	}

	function save(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('cbx','Accept','required');
		$this->form_validation->set_rules('confirm','Confirm','required|matches[password]');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
		$this->form_validation->set_rules('email','Email','required|max_length[100]|valid_email');
		$this->form_validation->set_rules('telp','Telp','required|max_length[12]');
		$this->form_validation->set_rules('alamat','Alamat','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'password' => md5($this->input->post('password')),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telp' => $this->input->post('telp'),
				'alamat' => $this->input->post('alamat'),
            );
            
            $tb_costumer_id = $this->Customer_model->add_customer($params);
            redirect('Register/berhasil');
        }
        else
        {            
            $this->load->view('header');
			$this->load->view('register');
			$this->load->view('footer');
        }
	}
}
