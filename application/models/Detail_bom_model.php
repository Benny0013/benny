<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Detail_bom_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get detail_bom by id
     */
    function get_detail_bom($id)
    {
        return $this->db->get_where('detail_bom',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all detail_bom
     */
    function get_all_detail_bom()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('detail_bom')->result_array();
    }
        
    /*
     * function to add new detail_bom
     */
    function add_detail_bom($params)
    {
        $this->db->insert('detail_bom',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update detail_bom
     */
    function update_detail_bom($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('detail_bom',$params);
    }
    
    /*
     * function to delete detail_bom
     */
    function delete_detail_bom($id)
    {
        return $this->db->delete('detail_bom',array('id'=>$id));
    }
}
