<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pic_model extends CI_Model{
	
	function get_all_pics(){
		$all_pics = $this->db->get('labphotos');
		return $all_pics->result();
	}

	
	function store_pic_data($data){
		$insert_data['title'] = $data['title'];
		$insert_data['url'] = $data['filename'];
		$insert_data['category_id'] = $data['category'];

		$query = $this->db->insert('labphotos', $insert_data);
	}
	
}
