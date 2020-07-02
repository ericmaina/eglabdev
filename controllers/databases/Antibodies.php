<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Antibodies extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model');
        
          $this->table = 'antibodies';
		  $this->column_search = array('name','date','antigen','storage');  
		  $this->column_order = array('id','name','date','antigen','dilution','storage','comments');   
		  $this->order = array('id' => 'desc');
	
    }

    public function index()
    {
        $this->template->set('title', 'Antibodies Records');
        $this->template->load('_layout/database', 'databases/antibodies');
	    
    } 
    
    public function read($id) 
    {
        $row = $this->Data_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'date' => $row->date,
		'antigen' => $row->antigen,
		'dilution' => $row->dilution,
		'storage' => $row->storage,
		'comments' => $row->comments
	    );
            $this->template->set('title', 'Antibody details');
            $this->template->load('_layout/database', 'databases/antibodies_read',$data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/antibodies'));
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
                $record->date,
                $record->antigen,
                $record->dilution,
                $record->storage,
                $record->comments
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

/* End of file Antibodies.php */
/* Location: ./application/controllers/Antibodies.php */
