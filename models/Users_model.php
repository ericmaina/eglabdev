<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{
	
	
    function __construct() {
		 
		 // Load database
        $this->db = $this->load->database('db5', true);
       
		 
    }
    
    public function login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password',$password);
        $query = $this->db->get('lab_users');
		return $query->row();
    }
    
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
    
    public function update_user($id, $userdata)
    {
        $this->db->where('user_id', $id);
        $this->db->update('lab_users', $userdata);
    }
    
    public function delete_user($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->delete('lab_users');
    }  
    
    public function register($userdata)
    {

		return $this->db->insert('lab_users', $userdata);
	}

	public function check_email_exists($email)
	{
		$query = $this->db->get_where('lab_users', array('email' => $email));

		if(empty($query->row_array())){
			return true;
		}
		else{
			return false;
		}
	}
}

