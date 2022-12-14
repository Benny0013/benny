<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Penjualan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get penjualan by id
     */
    function get_penjualan($id)
    {
        return $this->db->get_where('penjualan',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all penjualan
     */
    function get_all_penjualan()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('penjualan')->result_array();
    }
        
    /*
     * function to add new penjualan
     */
    function add_penjualan($params)
    {
        $this->db->insert('penjualan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update penjualan
     */
    function update_penjualan($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('penjualan',$params);
    }
        
    /*
     * function to delete penjualan
     */
    function delete_penjualan($id)
    {
        return $this->db->delete('penjualan',array('id'=>$id));
    }
}
