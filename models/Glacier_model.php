<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Glacier_model extends CI_Model
{

 
    function __construct() 
        { 
        parent::__construct(); 
        
        
		$this->table = 'awsglacier';
		$this->id = 'awsglacier_id';
		$this->order = 'technique';
        } 
 
    // get all 
 
    function get_all() 
        { 
        $this->db->order_by($this->id, $this->order); 
        return $this->db->get($this->table)->result(); 
        } 
 
    // get data by id 
 
    function get_by_id($id) 
        { 
        $this->db->where($this->id, $id); 
        return $this->db->get($this->table)->row(); 
        } 
}

/* End of file Glacier_model.php */
/* Location: ./application/models/Glacier_model.php */
