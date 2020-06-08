<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Photo extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');

	}
	
	public function index(){
		
    $this->load->model('pic_model');
    $data['picture_list'] = $this->pic_model->get_all_pics();
    $this->template->set('title', 'Gallery');
    $this->template->load('_layout/default','gallery/picture_list',$data);
    }
	
	public function form()
	{
		$this->template->set('title', 'Upload Photo');
		$this->template->load('_layout/default','gallery/upload_form');
	}
	
	public function file_data(){
		//validate the form data 

		$this->form_validation->set_rules('title', 'Picture Title', 'required');

        if ($this->form_validation->run() == FALSE){
			$this->template->load('_layout/default','gallery/upload_form');

			
		}else{
			
			//get the form values
			$data['title'] = $this->input->post('title', TRUE);
			$data['category'] = $this->input->post('category', TRUE);

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = 'assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 3072;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
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
}

/* End of file Photo.php */
/* Location: ./application/controllers/Photo.php */
