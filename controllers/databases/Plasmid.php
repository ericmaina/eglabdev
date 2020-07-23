<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Plasmid extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
        
        $this->load->model('Data_model');
        
          $this->table = 'plasmid';
		  $this->column_search = array('name','date','prepared','markers','vector','inserts','box','primers');  
		  $this->column_order = array('id','name','date','prepared','markers','vector','inserts',null,null,null,null,null);  
		  $this->order = array('id' => 'desc');
    }

    public function index()
    {
        $data['tablename']='plasmid';
	    $this->template->set('title', 'Plasmid Records');
        $this->template->load('_layout/database', 'databases/plasmid',$data);
	    
    } 

    public function read($id) 
    {
        $row = $this->Data_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'date' => $row->date,
		'prepared' => $row->prepared,
		'concentration' => $row->concentration,
		'markers' => $row->markers,
		'vector' => $row->vector,
		'inserts' => $row->inserts,
		'size' => $row->size,
		'box' => $row->box,
		'comments' => $row->comments,
		'pcrgenerated' => $row->pcrgenerated,
		'primers' => $row->primers,
		'enzymes' => $row->enzymes,
	    );
            $this->template->set('title', 'Plamid details');
			$this->template->load('_layout/database', 'databases/plasmid_read',$data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/plasmid'));
        }
    }
    
function getLists(){
	
	     $data = array();
        
        // Fetch  records
         $items = $this->Data_model->getRows($_POST);
         if(isset($_POST['start']) && isset($_POST['draw'])){
         }else{
				// need start and draw 
				die(); 
			}
         foreach($items as $record) {
			
           $data[] = array(
                $record->name,
                $record->vector,
                $record->inserts,
                $record->markers,
                $record->size,
                $record->box,
                $record->pcrgenerated,
                $record->enzymes,
                $record->comments,
                $record->prepared
                 );
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

/* End of file Plasmid.php */
/* Location: ./application/controllers/Plasmid.php */
