<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');;

        $this->load->model('Bom_model');
    } 

	public function index($id)
	{	
		$data['bom'] = $this->Bom_model->get_all_bom();
		$data["produk"] = $this->Produk_model->getById($id);
		$this->load->view('header');
		$this->load->view('item',$data);
		$this->load->view('footer');
	}

}
