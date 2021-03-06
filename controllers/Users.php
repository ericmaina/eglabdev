<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('users_model');
        
    }
    
    function index()
    {
	    
		$this->template->set('title', 'Users List');
		$data['users'] = $this->users_model->get_user();
        $this->template->load('admin/dash_template', 'users/list',$data);
	
		}
         
	public function register()
	{
			
		$this->logged_in();
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email_exists');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->template->set('title', 'Sign Up');
			$this->template->load('admin/dash_template','users/register');    
		}
		else
		{
			$encrypt_password = md5($this->input->post('password'));
			$userdata = array(
				'firstname' => ucfirst($this->input->post('firstname')),
				'lastname' => ucfirst($this->input->post('lastname')),
				'email' => $this->input->post('email'),
				'password' => $encrypt_password,
				'level' =>$this->input->post('level'),
			);

			if ($this->users_model->register($userdata)){ 
				$this->session->set_flashdata('message', 'User account is registered and can now log in.');
				redirect('users/register');
			} else {
				$this->session->set_flashdata('msg_error', 'Error! Please try again');
				redirect('users/register');
			}
		}
	}
    
    
    
    
    
    
    public function login()
    {
         //$currentClass = $this->router->fetch_class(); // class = controller
         //$currentAction = $this->router->fetch_method(); // action = function
        
        $data['title'] = "Login";
        
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run() == false){
            $this->template->load('_layout/default','users/login',$data);
        } 
        else {
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $encrypt_password = md5($password);
            $validate = $this->users_model->login($email, $encrypt_password);
           
            
            if($validate)
            {
                
                $user=$validate;
                $userdata = array
                (
                    'id' => $user->user_id,
                    'firstname' => $user->firstname,
                    'lastname' => $user->lastname,
                    'userlevel' => $user->level,
                    'logged_in' => TRUE
                );                
                
					
                $this->session->set_userdata($userdata);
                $this->session->set_flashdata('message', 'You are now logged in.');
                redirect('home');
                //redirect("$currentClass/$currentAction");
            }
            else {
                $this->session->set_flashdata('message', 'Invalid email or password');
                redirect('users/login');
            }
        }
    }
    
	function editpass($user_id)
	{
		$this->logged_in();
		$user = $this->users_model->get_user_by_id($user_id);
		$this->template->set('title', 'Edit user');
        $this->template->load('admin/dash_template','users/updatepassword', ['user' => $user]); 
	}
	
	public function updatePassword()
    {
			
		$this->form_validation->set_rules('newpass', 'new password', 'required');
        $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[newpass]');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
		if($this->form_validation->run() == false) {
           $this->template->set('title', 'update password');
           $user_id = $this->input->post('user_id');
           $data['user'] = $this->users_model->get_user_by_id($user_id);
           $this->template->load('admin/dash_template','users/updatepassword', $data); 
        }else {
            $user_id = $this->input->post('user_id');
            $newpass = $this->input->post('newpass');
            $this->users_model->update_user($user_id, array('password' => md5($newpass)));
            $this->session->set_flashdata('message', 'Password has been updated.');
            //redirect('users/edit/'.$user_id);
            redirect('users/editpass/'.$user_id);
        }
	}	
    
     function edit($user_id)
	{
		$this->logged_in();
		$user = $this->users_model->get_user_by_id($user_id);
		$this->template->set('title', 'Edit user');
        $this->template->load('admin/dash_template','users/edit_users', ['user' => $user]); 
	}
	
	
    function saveupdate()
	{
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
			
		$user_id = $this->input->post('user_id');
		$data = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'level' =>$this->input->post('level'),
			);
				
		if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('users/edit/'.$user_id));
        }else{ 
          $this->users_model->update_user($user_id, $data);
          redirect(base_url('users'));
          
        }
		
	}
    
    
    public function changePassword()
    {
        $this->logged_in();

        $data['title'] = 'Change Password';
        $this->form_validation->set_rules('oldpass', 'old password', 'callback_password_check');
        $this->form_validation->set_rules('newpass', 'new password', 'required');
        $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[newpass]');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if($this->form_validation->run() == false) {
            $this->template->set('title', 'Change password');
            $this->template->load('_layout/default', 'users/change_password',$data);
        }else {
            $id = $this->session->userdata('id');
            $newpass = $this->input->post('newpass');
            $this->users_model->update_user($id, array('password' => md5($newpass)));
            $this->session->set_flashdata('message', 'Your password has been updated.');
            redirect('home');
        }
    }

    public function password_check($oldpass)
    {
        $id = $this->session->userdata('id');
        $user = $this->users_model->get_user_by_id($id);

        if($user->password !== md5($oldpass)) {
            $this->form_validation->set_message('password_check', 'The {field} does not match');
            return false;
        }

        return true;
    }
    
    public function delete($id)
    {
		$this->logged_in();
		$user=$this->users_model->get_user_by_id($id);
		$this->users_model->delete_user($id);
		$this->session->set_flashdata('message', "User {$user->firstname} has been deleted");
		redirect('users');
		
	}
  
	public function check_username_exists($username)
	{
		$this->form_validation->set_message('check_username_exists', 'That username is already taken, Please choose a different one.');

		if ($this->users_model->check_username_exists($username)) {
			return true;
		}else{
			return false;
		}
	}

	public function check_email_exists($email)
	{
		$this->form_validation->set_message('check_email_exists', 'This email is already registered.');

		if ($this->users_model->check_email_exists($email)) {
			return true;
		}else{
			return false;
		}
	}
	
	public function logout()
    {
      $this->session->sess_destroy();
      redirect('home');
	}
	
	private function logged_in()
    {
        if( ! $this->session->has_userdata('logged_in')){
            redirect('users/login');
        }
    }
    
    
}

