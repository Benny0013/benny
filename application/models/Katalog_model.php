<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Katalog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get katalog by id
     */
    function get_katalog($id)
    {
        return $this->db->get_where('katalog',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all katalog
     */
    function get_all_katalog()
    {
        $this->db->order_by('id', 'asc');
        return $this->db->get('katalog')->result_array();
    }
        
    /*
     * function to add new katalog
     */
    function add_katalog($params)
    {
        $this->db->insert('katalog',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update katalog
     */
    function update_katalog($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('katalog',$params);
    }
    
    /*
     * function to delete katalog
     */
    function delete_katalog($id)
    {
        return $this->db->delete('katalog',array('id'=>$id));
    }
}