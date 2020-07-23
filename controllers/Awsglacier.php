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
			
        //$this->template->set('title', 'Glacier Records');
        //$this->template->load('_layout/default', 'glacier',$data);
        $this->load->view('glacier',$data); 
        } 
    
    
	
    
    
 //public function read($id) 
    //{
        //$row = $this->Tfome_model->get_by_id($id);
        //if ($row) {
            //$data = array(
		//'genemodel' -> $row->gene_model,
		//'genename' -> $row->gene_name,
		//'utname' -> $row->ut_number,
		//'vector' -> $row->vector,
		//'genetictype' -> $row->material_type,
		//'antibiotic'->$row->drug,
		//'bacteria' -> $row->bacteria,
		//'building' -> $row->building,
		//'freezer' -> $row->freezer,
		//'shelf'->$row->shelf,
		//'plate'->$row->plate,
		//'rack'->$row->rack,
		//'position'->$row->position,
		//'label'->$row->label,
		//'creator' -> $row->first_name,
	    //);
          
            //$this->template->set('title', 'Tfome details');
			//$this->template->load('_layout/database', 'databases/tfome_read',$data);
        //} else {
            //$this->session->set_flashdata('message', 'Record Not Found');
            //redirect(site_url('databases/tfome'));
        //}
    //}
    
    


}

/* End of file Awsglacier.php */
/* Location: ./application/controllers/Awsglacier.php */
