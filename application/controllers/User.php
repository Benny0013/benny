<?php

class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Penjualan_model');
        $this->load->model('Katalog_model');
        $this->load->model('Keranjang_model');
        $this->load->model('Produk_model');
        $this->load->model('Custom_model');
        $this->load->model('Customer_model');
        
    }

    function index()
    {
    }

    function order(){
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['custom'] = $this->Custom_model->getAll();
        
        $this->load->view('header');
        $this->load->view('order',$data);
        $this->load->view('footer');
    }

    function changepass(){
        $this->load->view('header');
        $this->load->view('changepass');
        $this->load->view('footer');
    }

    function confirmpass(){
        $this->load->library('form_validation');

            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('confirm','Confirm','required|matches[password]');
        
            if($this->form_validation->run())     
            {   
                $params = array(
                    'password' =>md5($this->input->post('password'))
                );

                $this->Customer_model->update_customer($this->session->userdata('usersesss'),$params);           
                echo "<script>alert('Password Berhasil diganti.');</script>";
                $this->load->view('header');
                $this->load->view('changepass');
                $this->load->view('footer');
            }
            else
            {
                $this->load->view('header');
                $this->load->view('changepass');
                $this->load->view('footer');
            }
    }


    function addbukti($id){
        $unik = "_".date('dmYhis');
        $config['upload_path']          = './uploads/bukti/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'slip'.$unik;
        $config['overwrite']            = true;
        $config['max_size']             = 1000000; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path')) {
            

            $params = array(
                    'status' => 3,
                    'bukti_pembayaran' => $this->upload->data("file_name"),
                );

                $this->Penjualan_model->update_penjualan($id,$params);
                echo "<script>alert('Bukti Pembayaran sudah diupload. Tunggu Konfirmasi kami.');</script>";
                redirect('User/order','refresh');

        }else{
            echo "<script>alert('Pilih Bukti Pembayaran anda terlebih dahulu.');</script>";
            redirect('User/order','refresh');

         redirect('User/order','refresh');   
        }
        
    }

    function confirm($id){
         $params = array(
                    'status' => 7,
                );

                $this->Penjualan_model->update_penjualan($id,$params);            
                redirect('User/order');
    }
}
