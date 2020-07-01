<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Mutants extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
          $this->load->model('Data_model');
          $this->table = 'mutants';
		  $this->column_search = array('geneproduct','locus','synonym','seedcollection','stocknumber','tubelabel','box');  
		  $this->column_order = array('id','geneproduct','synonym','locus','seedcollection','insertionsite',null,null,null,null);  
		  $this->order = array('id' => 'desc');
    }

    public function index()
    {
    
        $this->template->set('title', 'Mutant Records');
        $this->template->load('_layout/database', 'databases/mutants');
    } 

    public function read($id) 
    {
        $row = $this->Data_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'locus' => $row->locus,
		'geneproduct' => $row->geneproduct,
		'synonym' => $row->synonym,
		'mutantname' => $row->mutantname,
		'seedcollection' => $row->seedcollection,
		'insertionsite' => $row->insertionsite,
		'stocknumber' => $row->stocknumber,
		'comments' => $row->comments,
		'tubelabel' => $row->tubelabel,
		'box' => $row->box,
		'position' => $row->position,
	    );
            $this->template->set('title', 'Mutant Details');
			$this->template->load('_layout/database', 'databases/mutants_read',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/mutants'));
        }
    }

public function getLists()
   {
       $data = $row = array();
        
        // Fetch  records
        $items = $this->Data_model->getRows($_POST);
        if(isset($_POST['start']) && isset($_POST['draw'])){
         }else{
				// need start and draw 
				die(); 
			}
        
      foreach($items as $record) {
           $data[] = array(
                $record->geneproduct,
                $record->synonym,
                $record->locus,
                $record->seedcollection,
                $record->insertionsite,
                $record->stocknumber,
                $record->tubelabel,
                $record->box,
                $record->position
                 );
      }

      $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_model->countAll(),
            "recordsFiltered" => $this->Data_model->countFiltered($_POST),
            "data" => $data,
        );
      echo json_encode($output);
      
   }
   
    

}

/* End of file Mutants.php */
/* Location: ./application/controllers/Mutants.php */
