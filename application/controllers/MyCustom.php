<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyCustom extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Custom_model');
        $this->load->model('Keranjang_model');
        $this->load->model('Bom_model');
    } 

	public function index()
	{	
		$this->load->view('header');
		$this->load->view('custom');
		$this->load->view('footer');
	}

	public function sort($id)
	{	
		$data['custom'] = $this->Custom_model->getAll();

        $data['bom'] = $this->Bom_model->get_all_bom();

		if($id=="mug"){
			$data['katalog']=1;
			$this->load->view('header');
			$this->load->view('mycustom',$data);
			$this->load->view('footer');
		}else if($id=="poci"){
			$data['katalog']=2;
			$this->load->view('header');
			$this->load->view('mycustom',$data);
			$this->load->view('footer');
		}else if($id=="termos"){
			$data['katalog']=3;
			$this->load->view('header');
			$this->load->view('mycustom',$data);
			$this->load->view('footer');
		}else if($id=="box"){
			$data['katalog']=4;
			$this->load->view('header');
			$this->load->view('mycustom',$data);
			$this->load->view('footer');
		}else{
			redirect('Home/','refresh');
		}
	}

	public function add($id){
		$customer = $this->session->userdata('usersesss');

		if($customer==""){
			echo "<script>alert('Silahkan , Login Terlebih Dahulu !');</script>";
			$this->load->view('header');
        	$this->load->view('login');
        	$this->load->view('footer');
		}else{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('k','gambar custom','required');
		
		$k = $this->input->post('k');

		$id_k = 0;


		$temp = $this->Custom_model->get_all_custom();

		foreach($temp as $t){
			if($t['path']==$k){
				$id_k = $t['id'];
			}
		}

		if($this->form_validation->run())     
        {   
            $params = array(
				'id_customer' => $customer,
				'id_produk' => $id_k,
				'type' => 2,
				'qty' => $this->input->post('qty'),
				'sablon' =>1,
				'ket' => "",
				'status' => 1,
            );
            
            $keranjang_id = $this->Keranjang_model->add_keranjang($params);
            redirect('Cart');
        }
        else
        {            
            $data['katalog']=$id;
			$this->load->view('header');
			$this->load->view('mycustom',$data);
			$this->load->view('footer');
        }
    }
	}
}
