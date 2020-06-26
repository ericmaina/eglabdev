<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    
    function get_user() 
	{
		$query = $this->db->get('lab_users');
		return $query->result();
	}
    
    
    
    public function get_user_by_id($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('lab_users');
        return $query->row();
    }
    
    
     public function user_list()
    {
        $query = $this->db->get('lab_users');
        return $query->result();
    }

    public function update_user($id, $userdata)
    {
        $this->db->where('user_id', $id);
        $this->db->update('lab_users', $userdata);
    }
    
    public function register($userdata){

			return $this->db->insert('lab_users', $userdata);
		}

    
  		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('lab_users', array('email' => $email));

			if(empty($query->row_array())){
				return true;
			}else{
				return false;
			}
		}
}

