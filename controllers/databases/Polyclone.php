<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Polyclone extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
          
          $this->load->model('Polyclone_model');
          $this->column_search = array('projectid','antigen.name','category','date','lot','speciesname','storage','box','firstname'); 
		  $this->column_order = array('cloneid','projectid','antigen.name','category',null,'date','lot','speciesname','storage','box',null,'firstname',null); 
          $this->order = array('cloneid' => 'desc');

    }

    public function index()
    {
	    
        $this->template->set('title', 'Polyclonal Records');
        $this->template->load('_layout/database', 'databases/polyclones');
	    
    } 
    
 public function read($id) 
    {

        $row = $this->Polyclone_model->get_by_id($id);
        if ($row) {
            $data = array(
			 'projectid' => $row->projectid, 
			 'category' => $row->category,
			 'volume'  => $row->volume, 
			 'date'  => $row->date, 
			 'lot' => $row->lot, 
			 'name'  => $row->name, 
			 'GP'    => $row->GP, 
			 'sequence' => $row->sequence, 
			 'comments' => $row->comments, 
			 'synonym' => $row->synonym, 
			 'speciesname'=> $row->speciesname,
			 'animalnum' => $row->animalnum, 
			 'box' => $row->box, 
			 'storage' => $row->storage, 
			 'purpose' => $row->purpose, 
			 'companyname' => $row->companyname,
			 'companyphone' => $row->phone 
     
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
				$record->name,
				$record->category,
				$record->volume,
				$record->date,
				$record->lot,
				$record->speciesname,
				$record->storage,
				$record->box,
				$record->companyname,
				$record->firstname,
				'<a href="polyclone/read/'.$record->cloneid.'" class="btn btn-link mr-1">Read</a>'
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
