<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model
{ 
    private $_table = "produk";

    public $id_katalog;
    public $id_bom;
    public $nama;
    public $deskripsi;
    public $path = "default.jpg";

    public function rules()
    {
        return [
            ['field' => 'id_katalog',
            'label' => 'ID_KATALOG',
            'rules' => 'required'],

            ['field' => 'id_bom',
            'label' => 'ID_BOM',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'NAMA',
            'rules' => 'required'],
        ];
    }

    function get_all_produk()
    {
        $this->db->order_by('id', 'asc');
        return $this->db->get('produk')->result_array();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_katalog = $post["id_katalog"];
        $this->id_bom = $post["id_bom"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->path = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->id_katalog = $post["id_katalog"];
        $this->id_bom = $post["id_bom"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        
        
        if (!empty($_FILES["path"]["name"])) {
            $this->path = $this->_uploadImage();
        } else {
            $this->path = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('id' => $id));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }
    
    private function _uploadImage()
    {
        $unik = "_".date('dmYhis');
        $config['upload_path']          = './uploads/produk/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama.$unik;
        $config['overwrite']            = true;
        $config['max_size']             = 1000000; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('path')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $produk = $this->getById($id);
        if ($produk->path != "default.jpg") {
            $filename = explode(".", $produk->path)[0];
            return array_map('unlink', glob(FCPATH."uploads/produk/$filename.*"));
        }
    }

}
