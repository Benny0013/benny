<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        $this->load->model('Customer_model');
        
    }

	function index()
    {	
    	$this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

    function auth(){

    	$email = $this->input->post('email');
    	$pass = md5($this->input->post('password'));

        $login=$this->Customer_model->get_login($email,$pass)->num_rows();
        $log_row=$this->Customer_model->get_login($email,$pass)->row();

        if($login>0){
            $this->session->set_userdata('usersesss',
            $log_row->id);
            $this->session->set_userdata('userss',
            $log_row->nama);;
            $this->session->set_userdata('h',TRUE);
            redirect('/Home/', 'refresh');
        }else{
    		echo "<script type='text/javascript'>alert('Username atau Password Salah !');</script>";
    		redirect('/Login/', 'refresh');
    	}
    }

    function out(){
    	 $this->session->sess_destroy();
        redirect('Home','refresh');
    }
}
