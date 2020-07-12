<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Photo extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
        $this->uploadPath = 'assets/uploads/photos/'; 
        $this->output->enable_profiler(TRUE);
	}
	
	public function index(){
		
    $this->load->model('pic_model');
    $data['picture_list'] = $this->pic_model->get_all_pics();
    $this->template->set('title', 'Gallery');
    $this->template->load('_layout/default','gallery/picture_list',$data);
    }
	
	public function upload()
	{
		$this->logged_in();
		$this->template->set('title', 'Upload Photo');
		$this->template->load('_layout/default','gallery/upload_form');
	}
	
	public function upload_photo(){
		
		$this->form_validation->set_rules('title', 'Picture Title', 'required');

        if ($this->form_validation->run() == FALSE){
			$this->template->set('title', 'Upload Photo');
			$this->template->load('_layout/default','gallery/upload_form');

			
		}else{
			
			//get the form values
			$data['title'] = $this->input->post('title', TRUE);
			$data['category'] = $this->input->post('category', TRUE);

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = 'assets/uploads/photos';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 3072;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				$this->template->set('title', 'Upload Photo');
				$this->template->load('_layout/default','gallery/upload_form',$error);
			}else{

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['filename'] = $upload_data['file_name'];

				//store pic data to the db
				$this->pic_model->store_pic_data($data);

				redirect('gallery/photo');
			}
			
		}
	}
	
	 public function delete($id)
	 { 
        $this->logged_in();
        $this->admin_login();
        // Check whether id is not empty 
        if($id){ 
                $imgData = $this->pic_model->get_single_pic($id); 
             
            // Delete gallery data 
            $delete = $this->pic_model->delete($id); 
             
            if($delete){ 
                // Remove file from the server  
                if(!empty($imgData['url'])){ 
                    @unlink($this->uploadPath.$imgData['url']);  
                }  
                 
                $this->session->set_flashdata('message', 'Image has been removed successfully.'); 
            }else{ 
                $this->session->set_flashdata('error', 'Some problems occurred, please try again.'); 
            } 
        } 
 
        redirect('gallery/photo'); 
    } 
	


	 private function logged_in()
    {
        if( ! $this->session->has_userdata('logged_in')){
            redirect('users/login');
        }
    }
    
    
    private function admin_login()
    {
		if(!($this->session->userdata('userlevel')=='admin')){
			$this->session->set_flashdata('message', 'Sorry! you need to be an administrator to access this page');
			redirect('home');
		}
	}
	
	
    
}

/* End of file Photo.php */
/* Location: ./application/controllers/Photo.php */
