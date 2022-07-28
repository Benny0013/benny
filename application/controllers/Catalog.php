<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');;

        $this->load->model('Bom_model');
    } 

	public function index()
	{	
		$this->load->view('header');
		$this->load->view('catalog');
		$this->load->view('footer');
	}

	public function sort($id)
	{	
		$data['produk'] = $this->Produk_model->getAll();

        $data['bom'] = $this->Bom_model->get_all_bom();

		if($id=="mug"){
			$data['katalog']=1;
			$this->load->view('header');
			$this->load->view('sort',$data);
			$this->load->view('footer');
		}else if($id=="poci"){
			$data['katalog']=2;
			$this->load->view('header');
			$this->load->view('sort',$data);
			$this->load->view('footer');
		}else if($id=="termos"){
			$data['katalog']=3;
			$this->load->view('header');
			$this->load->view('sort',$data);
			$this->load->view('footer');
		}else if($id=="box"){
			$data['katalog']=4;
			$this->load->view('header');
			$this->load->view('sort',$data);
			$this->load->view('footer');
		}else{
			redirect('Home/','refresh');
		}
	}
}
