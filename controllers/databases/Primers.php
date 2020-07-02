<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Primers extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
          $this->load->model('Data_model');
          $this->table = 'primers';
		  $this->column_search = array('name','date','purpose','box');  
		  $this->column_order = array('id','name','date','purpose','restriction','box','sequence');  
		  $this->order = array('id' => 'desc');
     }

    public function index()
    {
	    
        $this->template->set('title', 'Primer Records');
        $this->template->load('_layout/database', 'databases/primers');
    } 
  
    public function read($id) 
    {
        $row = $this->Data_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'ordered' => $row->ordered,
		'date' => $row->date,
		'purpose' => $row->purpose,
		'restriction' => $row->restriction,
		'sequence' => $row->sequence,
		'year' => $row->year,
		'box' => $row->box,
		'comments' => $row->comments,
	    );
            $this->template->set('title', 'Primer details');
			$this->template->load('_layout/database', 'databases/primers_read',$data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/primers'));
        }
    }
    
    
 function getLists(){
        $data = array();
         $items = $this->Data_model->getRows($_POST);
         if(isset($_POST['start']) && isset($_POST['draw'])){
         }else{
				// need start and draw 
				die(); 
			}
         foreach($items as $record) {
           $data[] = array(
                $record->name,
                $record->date,
                $record->purpose,
                $record->restriction,
                $record->box,
                $record->sequence
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

/* End of file Primers.php */
/* Location: ./application/controllers/Primers.php */
