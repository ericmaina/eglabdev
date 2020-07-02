<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Vectors extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model');
        
          $this->table = 'vectors';
		  $this->column_search = array('name','date','concentration','vector','box','reference','keywords');  
		  $this->column_order = array('id','name','date','concentration','markers','vector','inserts','size','box','keywords',null,null,null);  
		  $this->order = array('id' => 'desc');
    }

    public function index()
    {
        
        $this->template->set('title', 'Vector Records');
        $this->template->load('_layout/database', 'databases/vectors');
    } 
    
    
    
    function download($filename = NULL){
        $this->load->helper('download');
		$data = file_get_contents(base_url('assets/uploads/'.$filename));
		force_download($filename,$data);
		 
	}
   
   
    public function read($id) {
        $row = $this->Data_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'date' => $row->date,
		'concentration' => $row->concentration,
		'markers' => $row->markers,
		'vector' => $row->vector,
		'inserts' => $row->inserts,
		'size' => $row->size,
		'box' => $row->box,
		'reference' => $row->reference,
		'keywords' => $row->keywords,
		'comments' => $row->comments,
		'vectormap' => $row->vectormap,
		'modified' => $row->modified,
	    );
           $this->template->set('title', 'Vector details');
		   $this->template->load('_layout/database', 'databases/vectors_read',$data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/vectors'));
        }
    }

 function getLists(){
        $data = array();
        
        // Fetch  records
         $items = $this->Data_model->getRows($_POST);
         if(isset($_POST['start']) && isset($_POST['draw'])){
         $i = $_POST['start'];
         }else{
				// need start and draw 
				die(); 
			}
         foreach($items as $record) {
			
			$read='<a href="vectors/read/'.$record->id.'" class="btn btn-link">Read</a>';
			$image='<a href="vectors/download/'.$record->vectormap.'" class="btn btn-link mr-1">Download</a>';
           $data[] = array(
               
                $record->name,
                $record->date,
                $record->concentration,
                $record->markers,
                $record->vector,
                $record->inserts,
                $record->size,
                $record->box,
                $record->keywords,
                $record->comments,
                $record->modified,
                $image,
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

/* End of file Vectors.php */
/* Location: ./application/controllers/Vectors.php */
