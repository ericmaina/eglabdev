<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Polyclone extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
          
          $this->load->model('Polyclone_model');
          $this->table = 'clones';
          $this->column_search = array('projectid','antigen','sampletype','locus','species','location','box'); 
		  $this->column_order = array('clones_id','projectid','antigen','sampletype','date','lot','locus','species','location','box',null); 
         

    }

    public function index()
    {
	    $data['tablename']='polyclone';
        $this->template->set('title', 'Polyclonal Records');
        $this->template->load('_layout/database', 'databases/polyclones',$data);
	    
    } 
    
 public function read($id) 
    {

        $row = $this->Polyclone_model->get_by_id($id);
        if ($row) {
            $data = array(
             'Antigen'=> $row->antigen, 
			 'projectid' => $row->projectid, 
			 'sampletype' => $row->sampletype,
			 'date'  => $row->date, 
			 'lot' => $row->lot, 
			 'locus' => $row->locus, 
			 'species'=> $row->species,
			 'location' => $row->location, 
			 'box' => $row->box, 
			 'companyname' => $row->company_name,
     
	    );
          
            $this->template->set('title', 'Polyclone details');
			$this->template->load('_layout/database', 'databases/polyclone_read',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/polyclone'));
        }
    
  }
  
function getLists(){
        $data = array();
        
        // Fetch  records
         $items = $this->Polyclone_model->getRows($_POST);
         
         if(isset($_POST['start']) && isset($_POST['draw']))
         {
         foreach($items as $record) {
           $data[] = array(
				$record->projectid,
				$record->antigen,
				$record->sampletype,
				$record->date,
				$record->lot,
				$record->locus,
				$record->species,
				$record->location,
				$record->box,
				$record->company_name,
				//'<a href="polyclone/read/'.$record->cloneid.'" class="btn btn-link mr-1">Read</a>'
                 );
          }
         }
         else
         {
			die();
		  }
        
        $result = array(
            "draw" => intval($_POST['draw']),
            "recordsTotal" => $this->Polyclone_model->countAll(),
            "recordsFiltered" => $this->Polyclone_model->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($result);
    
}

  
}

/* End of file Polyclone.php */
/* Location: ./application/controllers/Polyclone.php */
