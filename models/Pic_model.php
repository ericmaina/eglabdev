<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pic_model extends CI_Model{
	
	function __construct() {
		 
		 // Load database
        $this->db = $this->load->database('db5', true);
        
		 
    }
	
	
	
	function get_all_pics(){
		$all_pics = $this->db->get('labphotos');
		return $all_pics->result();
	}

    function get_single_pic($id)
    {
		$this->db->where('id', $id);
		$pic=$this->db->get('labphotos');
		return $pic->result_array();
	 	
	}

	
	function store_pic_data($data){
		$insert_data['title'] = $data['title'];
		$insert_data['url'] = $data['filename'];
		$insert_data['category_id'] = $data['category'];
		$query = $this->db->insert('labphotos', $insert_data);
	}
	
	    
    public function delete($id)
    {
        
        $this->db->where('id', $id);
        $delete=$this->db->delete('labphotos');
        return $delete?true:false; 
    }
    
    
	
}
