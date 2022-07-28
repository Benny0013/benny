<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Keranjang_model');
        $this->load->model('Katalog_model');
        $this->load->model('Penjualan_model');
        $this->load->model('Produk_model');
        $this->load->model('Custom_model');
        $this->load->model('Bom_model');
        $this->load->model('Sablon_detail_model');
    } 

    public function index(){
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->getAll();
        $data['custom'] = $this->Custom_model->getAll();
        $data['bom'] = $this->Bom_model->get_all_bom();
        $data['sablon'] = $this->Sablon_detail_model->get_all_sablon_detail();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();


    	$this->load->view('header');
		$this->load->view('cart',$data);
		$this->load->view('footer');
    }

    public function cart_detail($id){
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->getAll();
        $data['custom'] = $this->Custom_model->getAll();
        $data['bom'] = $this->Bom_model->get_all_bom();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['sablon'] = $this->Sablon_detail_model->get_all_sablon_detail();
        $data['id'] = $id;

        $this->load->view('header');
        $this->load->view('cart_detail',$data);
        $this->load->view('footer');
    }

    public function order_detail($id){
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->getAll();
        $data['custom'] = $this->Custom_model->getAll();
        $data['bom'] = $this->Bom_model->get_all_bom();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['sablon'] = $this->Sablon_detail_model->get_all_sablon_detail();
        $data['id'] = $id;

        $this->load->view('header');
        $this->load->view('order_detail',$data);
        $this->load->view('footer');
    }

    public function sablonbordir($id){
        $data['gambar'] = "";
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->getAll();
        $data['custom'] = $this->Custom_model->getAll();
        $data['bom'] = $this->Bom_model->get_all_bom();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['id'] = $id;

        $this->load->view('header');
        $this->load->view('sablon',$data);
        $this->load->view('footer');
    }

    public function add_sablon($id){
        $unik = "_".date('dmYhis');
        $config['upload_path']          = './uploads/sablon/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'sablon'.$unik;
        $config['overwrite']            = true;
        $config['max_size']             = 1000000; // 1MB
        //$config['max_width']            = 75;
        // $config['max_height']           = 768;

        $idtemp = $this->Sablon_detail_model->get_sablon_detail($id);

        if($idtemp==""){
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path')) {
            
        
            $params = array(
                    'id_keranjang' => $id,
                    'id_bom' => 0,
                    'type' => 0,
                    'gambar' => $this->upload->data("file_name"),
                );

        $this->Sablon_detail_model->add_sablon_detail($params);
        $data['gambar'] = $this->upload->data("file_name");
            redirect('Cart');
        }redirect('Cart');}else{
            $data['gambar'] = $idtemp['gambar'];
            redirect('Cart');
        }

        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->getAll();
        $data['custom'] = $this->Custom_model->getAll();
        $data['bom'] = $this->Bom_model->get_all_bom();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['id'] = $id;

        $this->load->view('header');
        $this->load->view('sablon',$data);
        $this->load->view('footer');
    }

    public function simpan($id){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bom','Bom','required');
        $this->form_validation->set_rules('type','Type','required');

        if($this->form_validation->run())     
        {   
            $params = array(
                'id_bom' => $this->input->post('bom'),
                'type' => $this->input->post('type'),
            );
            
            $this->Sablon_detail_model->update_sablon_detail($id,$params);

            $params = array(
                'sablon' => 0,
                'ket' =>  $this->input->post('ket'),
            );

            $this->Keranjang_model->update_keranjang($id,$params);

            redirect('Cart');
        }
        else
        {            
            $unik = "_".date('dmYhis');
        $config['upload_path']          = './uploads/sablon/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'sablon'.$unik;
        $config['overwrite']            = true;
        $config['max_size']             = 1000000; // 1MB
        //$config['max_width']            = 75;
        // $config['max_height']           = 768;

        $idtemp = $this->Sablon_detail_model->get_sablon_detail($id);

        if($idtemp==""){
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path')) {
            
        
            $params = array(
                    'id_keranjang' => $id,
                    'id_bom' => 0,
                    'type' => 0,
                    'gambar' => $this->upload->data("file_name"),
                );

        $this->Sablon_detail_model->add_sablon_detail($params);
        $data['gambar'] = $this->upload->data("file_name");
        }}else{
            $data['gambar'] = $idtemp['gambar'];
        }

        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->getAll();
        $data['custom'] = $this->Custom_model->getAll();
        $data['bom'] = $this->Bom_model->get_all_bom();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['id'] = $id;

        $this->load->view('header');
        $this->load->view('sablon',$data);
        $this->load->view('footer');
        }
    }

    public function Checkout($total){
        $params = array(
                    'status' => 2,
                );

                $this->Keranjang_model->checkout($this->session->userdata('usersesss'),$params);

        $params = array(
                'id_karyawan' => 0,
                'id_customer' => $this->session->userdata('usersesss'),
                'status' => 1,
                'ongkir' => 0,
                'resi' => 0,
                'total_pembayaran' => $total,
                'estimasi' => date(),
                'bukti_pembayaran' => 0,
                'tanggal' => date('Y-m-d'),
            );
            
            $penjualan_id = $this->Penjualan_model->add_penjualan($params);

            $newid = (integer)$penjualan_id + 3;

            $params = array(
                    'status' => $newid,
                );

                $this->Keranjang_model->checkout2($this->session->userdata('usersesss'),$params);

            redirect('User/order');  
    }


	public function add_standart($id)
	{	
		$customer = $this->session->userdata('usersesss');

		if($this->session->userdata('userss')!=null){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('qty','Qty','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_customer' => $customer,
				'id_produk' => $id,
				'type' => 1,
				'qty' => $this->input->post('qty'),
				'sablon' =>1,
                'ket' => $this->input->post('ket'),
				'status' => 1,
            );
            
            $keranjang_id = $this->Keranjang_model->add_keranjang($params);
            redirect('Cart');
        }
        else
        {            
            $data['bom'] = $this->Bom_model->get_all_bom();
			$data["produk"] = $this->Produk_model->getById($id);
			$this->load->view('header');
			$this->load->view('item',$data);
			$this->load->view('footer');
        }

    	}else{
    		echo "<script>alert('Silahkan Login terlebuh dahulu.');</script>";
    		$this->load->view('header');
        	$this->load->view('login');
        	$this->load->view('footer');
    	}
	}

    public function Remove($id){
        $keranjang = $this->Keranjang_model->get_keranjang($id);

        if(isset($keranjang['id']))
        {
            $this->Keranjang_model->delete_keranjang($id);
            redirect('Cart');
        }
        else
            show_error('The keranjang you are trying to delete does not exist.');
    }
}
