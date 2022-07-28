<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bahan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bahan_model');

        $this->load->model('Detail_bom_model');
    } 

    /* 
     * Listing of bahan
     */
    function index()
    {
        $data['bahan'] = $this->Bahan_model->get_all_bahan();
        
        $data['_view'] = 'bahan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new bahan
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required|max_length[25]');
		$this->form_validation->set_rules('harga','Harga','required');
		$this->form_validation->set_rules('satuan','Satuan','required|max_length[25]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'satuan' => $this->input->post('satuan'),
            );
            
            $bahan_id = $this->Bahan_model->add_bahan($params);
            redirect('bahan/index');
        }
        else
        {            
            $data['_view'] = 'bahan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a bahan
     */
    function edit($id)
    {   
        // check if the bahan exists before trying to edit it
        $data['bahan'] = $this->Bahan_model->get_bahan($id);
        
        if(isset($data['bahan']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required|max_length[25]');
			$this->form_validation->set_rules('harga','Harga','required');
			$this->form_validation->set_rules('satuan','Satuan','required|max_length[25]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nama' => $this->input->post('nama'),
					'harga' => $this->input->post('harga'),
					'satuan' => $this->input->post('satuan'),
                );

                $this->Bahan_model->update_bahan($id,$params);            
                redirect('bahan/index');
            }
            else
            {
                $data['_view'] = 'bahan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The bahan you are trying to edit does not exist.');
    } 

    /*
     * Deleting bahan
     */
    function remove($id)
    {
        $bahan = $this->Bahan_model->get_bahan($id);

        $detail = $this->Detail_bom_model->get_all_detail_bom();

        $ada = false;

        foreach($detail as $d){
            if($d['id_bahan']==$id){
                $ada=true;
            }
        }

        // check if the bahan exists before trying to delete it
        if(isset($bahan['id'])&&$ada!=true)
        {
            $this->Bahan_model->delete_bahan($id);
            redirect('bahan/index');
        }
        else
            echo "<script>alert('Data digunakan oleh Tabel lain !');</script>";
            $data['bahan'] = $this->Bahan_model->get_all_bahan();
        
            $data['_view'] = 'bahan/index';
            $this->load->view('layouts/main',$data);
    }
    
}
