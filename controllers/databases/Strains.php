<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Strains extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
          $this->load->model('Data_model');
          $this->table = 'strains';
		  $this->column_search = array('species','strain','constructs','genes','plasmid','source');  
		  $this->column_order = array('id','species','strain','constructs','genes','plasmid','marker','source');  
		  $this->order = array('id' => 'desc');
    }

    public function index()
    {
        
        $this->template->set('title', 'Strains Records');
        $this->template->load('_layout/database', 'databases/strains');
    } 
    
    
    public function read($id) 
    {
        $row = $this->Data_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'species' => $row->species,
		'strain' => $row->strain,
		'constructs' => $row->constructs,
		'genes' => $row->genes,
		'plasmid' => $row->plasmid,
		'marker' => $row->marker,
		'source' => $row->source,
		'comments' => $row->comments,
	    );
            $this->template->set('title', 'Strain details');
			$this->template->load('_layout/database', 'databases/strains_read',$data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/strains'));
        }
    }
    
 function getLists(){
        $data = array();
        
        // Fetch  records
         $items = $this->Data_model->getRows($_POST);
         foreach($items as $record) {
			 
           $data[] = array(
                $record->species,
                $record->strain,
                $record->constructs,
                $record->genes,
                $record->plasmid,
                $record->marker,
                $record->source,
                $record->comments,
               );
               
      }if(isset($_POST['start']) && isset($_POST['draw'])){
         $i = $_POST['start'];
         }else{
				// need start and draw 
				die(); 
			}

      $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_model->countAll(),
            "recordsFiltered" => $this->Data_model->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
   }


}

/* End of file Strains.php */
/* Location: ./application/controllers/Strains.php */
