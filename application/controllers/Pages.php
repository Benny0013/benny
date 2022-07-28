<?php

class Pages extends CI_Controller{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Penjualan_model');
        $this->load->model('Keranjang_model');
        $this->load->model('Produk_model');
        $this->load->model('Customer_model');
         $this->load->model('Karyawan_model');
         $this->load->model('Custom_model');
         $this->load->model('Bom_model');
         $this->load->model('Vendor_model');
         $this->load->model('Katalog_model');
         $this->load->model('Sablon_detail_model');

        
    }

    function index()
    {
    }

    public function detail_item($id){
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['custom'] = $this->Custom_model->getAll();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['bom'] = $this->Bom_model->get_all_bom();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['sablon'] = $this->Sablon_detail_model->get_all_sablon_detail();
        $data['id'] = $id;

        
        $data['_view'] = 'penjualan/detail_item';
        $this->load->view('layouts/main',$data);
    }

    public function detail_item_v($id){
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['custom'] = $this->Custom_model->getAll();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['bom'] = $this->Bom_model->get_all_bom();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['sablon'] = $this->Sablon_detail_model->get_all_sablon_detail();
        $data['id'] = $id;

        
        $data['_view'] = 'penjualan/detail_item_v';
        $this->load->view('layouts/main_vendor',$data);
    }

    public function finance(){
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['custom'] = $this->Custom_model->getAll();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['bom'] = $this->Bom_model->get_all_bom();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['sablon'] = $this->Sablon_detail_model->get_all_sablon_detail();
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();

        
        $data['_view'] = 'penjualan/finance';
        $this->load->view('layouts/main',$data);
    }

    public function sort_penjualan(){
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['custom'] = $this->Custom_model->getAll();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['bom'] = $this->Bom_model->get_all_bom();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['sablon'] = $this->Sablon_detail_model->get_all_sablon_detail();
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $d1 = new DateTime($this->input->post('dari'));
        $d2 = new DateTime($this->input->post('sampai'));
        $data['date_from'] = date_format($d1,"Y-m-d");
        $data['date_to'] = date_format($d2,"Y-m-d");

        $data['_view'] = 'penjualan/finance_sort';
        $this->load->view('layouts/main',$data);
    }

    function orderin(){
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['custom'] = $this->Custom_model->getAll();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        
        $data['_view'] = 'penjualan/order';
        $this->load->view('layouts/main',$data);
    }

    function orderin_vendor(){
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['custom'] = $this->Custom_model->getAll();
        
        $data['_view'] = 'penjualan/order_vendor';
        $this->load->view('layouts/main_vendor',$data);
    }

    function orderadd($id){
            $this->load->library('form_validation');

            $this->form_validation->set_rules('ongkir','Ongkir','required');
        
            if($this->form_validation->run())     
            {   
                $params = array(
                    'id_karyawan' =>$this->session->userdata('usersess'),
                    'status' => 2,
                    'ongkir' => $this->input->post('ongkir'),
                );

                $this->Penjualan_model->update_penjualan($id,$params);            
                redirect('Pages/orderin');
            }
            else
            {
                $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
                $data['customer'] = $this->Customer_model->get_all_customer();
                $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
                $data['produk'] = $this->Produk_model->get_all_produk();

                $data['_view'] = 'penjualan/order';
                $this->load->view('layouts/main',$data);
            }
    }

    function cancel($id){
            $params = array(
                    'status' => 0,
                );

                $this->Penjualan_model->update_penjualan($id,$params);            
                redirect('Pages/orderin');
            
    }

    function cancelv($id){
            $params = array(
                    'id_vendor' =>0,
                    'vendor_status' => 0,
                );

                $this->Keranjang_model->update_keranjang($id,$params);            
                redirect('Pages/orderin_vendor');
            
    }

    function acc_pesanan($id){
            $params = array(
                    'status' => 4,
                );

                $this->Penjualan_model->update_penjualan($id,$params);            
                redirect('Pages/payment');
            
    }

    function acc_pesanan2($id){
            $params = array(
                    'vendor_status' => 2,
                );

                $this->Keranjang_model->update_keranjang($id,$params);
                redirect('Pages/orderin_vendor');
            
    }

    function acc_pesanan3($id){
            $params = array(
                    'vendor_status' => 3,
                );

                $this->Keranjang_model->update_keranjang($id,$params);
                redirect('Pages/joblistv');
            
    }

    function acc_pesanan4($id){
            $params = array(
                    'vendor_status' => 4,
                );

                $this->Keranjang_model->update_keranjang($id,$params);
                redirect('Pages/joblist');
            
    }

    function acc_pesanan5($id){
            $params = array(
                    'status' => 5,
                );

                $this->Penjualan_model->update_penjualan($id,$params);            
                redirect('Pages/joblist');
            
    }

    function download($id,$id2){
        $data['penjualan'] = $this->Penjualan_model->get_penjualan($id);
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['karyawan'] = $this->Karyawan_model->get_all_karyawan();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['id']=$id2;
        $data['id2']=$id;
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['custom'] = $this->Custom_model->getAll();
        $data['sablon'] = $this->Sablon_detail_model->get_all_sablon_detail();


        $data['_view'] = 'penjualan/v_cetak';
        $this->load->view('layouts/main',$data);
    }


    function payment(){
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['vendor'] = $this->Vendor_model->get_all_vendor();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['custom'] = $this->Custom_model->getAll();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();

        $data['katalog'] = $this->Katalog_model->get_all_katalog();

        $data['_view'] = 'penjualan/payment';
        $this->load->view('layouts/main',$data);
    }

    function vendor_add($id){
          $this->load->library('form_validation');

        $this->form_validation->set_rules('vendor','vendor','required');
        
        if($this->form_validation->run())     
        {   
             $params = array(
                    'id_vendor' => $this->input->post('vendor'),
                    'vendor_status' => 1,
                );

                $this->Keranjang_model->update_keranjang($id,$params);            
                redirect('Pages/joblist');
        }
        else
        {          
            echo "<script>alert('Vendor tidak boleh kosong.');</script>";  
            $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
            $data['customer'] = $this->Customer_model->get_all_customer();
            $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
            $data['produk'] = $this->Produk_model->get_all_produk();
            $data['vendor'] = $this->Vendor_model->get_all_vendor();
            $data['_view'] = 'penjualan/payment';
            $this->load->view('layouts/main',$data);
        }

    }

    function confirm_payment($id){
          $this->load->library('form_validation');

        $this->form_validation->set_rules('estimasi','Estimasi','required|max_length[25]');
        
        if($this->form_validation->run())     
        {   
             $params = array(
                    'estimasi' => $this->input->post('estimasi'),
                    'status' => 7,
                );

                $this->Penjualan_model->update_penjualan($id,$params);            
                redirect('Pages/joblistv');
        }
        else
        {          
            echo "<script>alert('Estimasi tidak boleh kosong.');</script>";  
            $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();

        $data['_view'] = 'penjualan/joblistv';
        $this->load->view('layouts/main_vendor',$data);
        }
    }

    function joblist(){
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['vendor'] = $this->Vendor_model->get_all_vendor();
        $data['custom'] = $this->Custom_model->getAll();

        $data['_view'] = 'penjualan/joblist';
        $this->load->view('layouts/main',$data);
    }

    function joblistv(){
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['custom'] = $this->Custom_model->getAll();
        
        $data['_view'] = 'penjualan/joblistv';
        $this->load->view('layouts/main_vendor',$data);
    }

    function detail_vendor($id){
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['keranjang'] = $this->Keranjang_model->get_keranjang($id);
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['vendor'] = $this->Vendor_model->get_all_vendor();
        $data['custom'] = $this->Custom_model->getAll();

        $data['_view'] = 'penjualan/detail_vendor';
        $this->load->view('layouts/main',$data);
    }

    function confirm($id){
         $params = array(
                    'status' => 5,
                );

                $this->Penjualan_model->update_penjualan($id,$params);            
                redirect('Pages/joblist');
    }

    function pengiriman(){
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['custom'] = $this->Custom_model->getAll();

        $data['katalog'] = $this->Katalog_model->get_all_katalog();

        $data['_view'] = 'penjualan/pengiriman';
        $this->load->view('layouts/main',$data);
    }

    function addresi($id){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('resi','Resi','required|max_length[25]');
        
        if($this->form_validation->run())     
        {   
             $params = array(
                    'resi' => $this->input->post('resi'),
                    'status' => 6,
                );

                $this->Penjualan_model->update_penjualan($id,$params);            
                redirect('Pages/pengiriman');
        }
        else
        {          
            echo "<script>alert('Resi tidak boleh kosong.');</script>";  
            $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();

        $data['_view'] = 'penjualan/pengiriman';
        $this->load->view('layouts/main',$data);
        }

        
    }

    function addbukti($id){
        $unik = "_".date('dmYhis');
        $config['upload_path']          = './uploads/vendor/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'slip'.$unik;
        $config['overwrite']            = true;
        $config['max_size']             = 1000000; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path')) {
            

            $params = array(
                    'status' => 6,
                    'bukti_pembayaran_vendor' => $this->upload->data("file_name"),
                );

                $this->Penjualan_model->update_penjualan($id,$params);
                echo "<script>alert('Bukti Pembayaran sudah diupload. Tunggu Konfirmasi vendor.');</script>";
                $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
                $data['customer'] = $this->Customer_model->get_all_customer();
                $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
                $data['produk'] = $this->Produk_model->get_all_produk();

                redirect('Pages/joblist','refresh');

        }else{
            echo "<script>alert('Pilih Bukti Pembayaran anda terlebih dahulu.');</script>";
            $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
            $data['customer'] = $this->Customer_model->get_all_customer();
            $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
            $data['produk'] = $this->Produk_model->get_all_produk();

            $this->load->view('header');
            $this->load->view('order',$data);
            $this->load->view('footer');
        }
        
    }

    function confirmv($id){
         $params = array(
                    'status' => 8,
                );

                $this->Penjualan_model->update_penjualan($id,$params);            
                redirect('Pages/joblistv');
    }

    function orderstatus(){
        $data['penjualan'] = $this->Penjualan_model->get_all_penjualan();
        $data['customer'] = $this->Customer_model->get_all_customer();
        $data['keranjang'] = $this->Keranjang_model->get_all_keranjang();
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['katalog'] = $this->Katalog_model->get_all_katalog();
        $data['vendor'] = $this->Vendor_model->get_all_vendor();

        $data['_view'] = 'penjualan/progress';
        $this->load->view('layouts/main',$data);
    }
}
