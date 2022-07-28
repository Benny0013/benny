<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Detail_bom extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bom_model');
        $this->load->model('Bahan_model');
        $this->load->model('Detail_bom_model');
    } 

    /*
     * Listing of detail_bom
     */
    function index()
    {
        $data['detail_bom'] = $this->Detail_bom_model->get_all_detail_bom();
        
        $data['_view'] = 'detail_bom/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new detail_bom
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('id_bahan','Id Bahan','required|integer');
		$this->form_validation->set_rules('id_bom','Id Bom','required|integer');
		$this->form_validation->set_rules('jumlah','Jumlah','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_bahan' => $this->input->post('id_bahan'),
				'id_bom' => $this->input->post('id_bom'),
				'jumlah' => $this->input->post('jumlah'),
            );
            
            $detail_bom_id = $this->Detail_bom_model->add_detail_bom($params);

            $bahan = $this->Bahan_model->get_all_bahan();
            $total=0;
            foreach($bahan as $b){
                if($b['id']==$this->input->post('id_bahan')){
                    $total = $this->input->post('jumlah')*$b['harga'];
                }
            }

            $editbom($this->input->post('id_bahan'),$total);

            redirect('detail_bom/index');
        }
        else
        {
			$this->load->model('Bahan_model');
			$data['all_bahan'] = $this->Bahan_model->get_all_bahan();
            
            $data['_view'] = 'detail_bom/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    

    /*
     * Editing a detail_bom
     */
    function edit($id)
    {   
        // check if the detail_bom exists before trying to edit it
        $data['detail_bom'] = $this->Detail_bom_model->get_detail_bom($id);
        $detail_bom = $this->Detail_bom_model->get_detail_bom($id);
        
        if(isset($data['detail_bom']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('id_bahan','Id Bahan','required|integer');
			$this->form_validation->set_rules('jumlah','Jumlah','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_bahan' => $this->input->post('id_bahan'),
					'jumlah' => $this->input->post('jumlah'),
                );

                $bom = $this->Bom_model->get_bom($detail_bom['id_bom']);

                $bahan = $this->Bahan_model->get_all_bahan();
                $total=$bom['total'];
                foreach($bahan as $b){

                    if($b['id']==$this->input->post('id_bahan')){
                        $total = $total - $detail_bom['jumlah']*$b['harga'];

                        $total = $total + $this->input->post('jumlah')*$b['harga'];
                    }
                }
                $this->editbom($detail_bom['id_bom'],$total);

                $this->Detail_bom_model->update_detail_bom($id,$params);            
                redirect('bom/index');
            }
            else
            {
				$this->load->model('Bahan_model');
				$data['all_bahan'] = $this->Bahan_model->get_all_bahan();

                $data['_view'] = 'detail_bom/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The detail_bom you are trying to edit does not exist.');
    } 

    /*
     * Deleting detail_bom
     */
    function remove($id)
    {
        $detail_bom = $this->Detail_bom_model->get_detail_bom($id);

        // check if the detail_bom exists before trying to delete it
        if(isset($detail_bom['id']))
        {
            $this->Detail_bom_model->delete_detail_bom($id);
            $bom = $this->Bom_model->get_bom($detail_bom['id_bom']);

            $bahan = $this->Bahan_model->get_all_bahan();
            $total=$bom['total'];
            foreach($bahan as $b){
                if($b['id']==$detail_bom['id_bahan']){
                    
                    $total = $total - $detail_bom['jumlah']*$b['harga'];
                }
            }
            $this->editbom($detail_bom['id_bom'],$total);

            redirect('bom/index');
        }
        else
            show_error('The detail_bom you are trying to delete does not exist.');
    }

    function editbom($id,$total)
    {   
        
                $params = array(
                    'total' => $total
                );

                $this->Bom_model->update_bom($id,$params);            
               
      
    }
    
}