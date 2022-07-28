<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');;

        $this->load->model('Bom_model');
    } 

	public function index()
	{	
		$data['produk'] = $this->Produk_model->getAll();

        $data['bom'] = $this->Bom_model->get_all_bom();
        
		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
}
