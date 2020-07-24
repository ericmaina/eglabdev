<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Awsglacier extends MY_Controller
{
    function __construct()
    {
       
        parent::__construct();
        $this->load->model('Glacier_model');
        
        
    }

    
    function index() 
        { 
        $archive_files = $this->Glacier_model->get_all();
        $data['archiverecord'] =$archive_files;
        $this->template->set('title', 'Glacier Records');
        $this->template->load('_layout/default', 'awsbackup/glacier',$data);
        } 
    
    function download($filename = NULL){
        $this->load->helper('download');
		$data = file_get_contents(base_url('uploads/metada_files/'.$filename));
		force_download($filename,$data);
		 
	}
	
    
    
 public function read($id) 
    {
        $row = $this->Glacier_model->get_by_id($id);
        if ($row) {
            $data = array(
		'title' => $row->title,
		'species' => $row->species,
		'technique' => $row->technique,
		'vault' => $row->archive_vault,
		'tissue' => $row->tissue,
		'metadatafile'=> $row->local_metadata,
		'archiveDescription'=>$row->archive_description,
		'archiveID' => $row->archive_id,
		'archiveMetadata' => $row->archived_metadata,
		
	    );
          
            $this->template->set('title', 'Archive details');
			$this->template->load('_layout/default', 'awsbackup/glacier_read',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('awsglacier'));
        }
    }
    
    


}

/* End of file Awsglacier.php */
/* Location: ./application/controllers/Awsglacier.php */
