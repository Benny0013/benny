<?php

class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Karyawan_model');
        
    }

    function index()
    {
        $this->load->view('admin');
    }

    function login(){

    	$user = $this->input->post('username');
    	$pass = md5($this->input->post('password'));

        $login=$this->Karyawan_model->get_login($user,$pass)->num_rows();
        $log_row=$this->Karyawan_model->get_login($user,$pass)->row();

        if($login>0){
            $this->session->set_userdata('usersess',
            $log_row->id);
            $this->session->set_userdata('users',
            $log_row->nama);            
            $this->session->set_userdata('nip',
            $log_row->nip);
            $this->session->set_userdata('h',TRUE);
            $this->load->helper('url');
            redirect('/Dashboard/', 'refresh');
        }else{
    		echo "<script type='text/javascript'>alert('Username atau Password Salah !');</script>";
    		redirect('/Admin/', 'refresh');
    	}
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('Admin','refresh');
    }
}
