<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Rnapreps extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
          $this->load->model('Data_model');
          $this->table = 'rnapreps';
		  $this->column_search = array('name','type','date','made');  
		  $this->column_order = array('id','name','type','quantity','volume','concentration','total_rna','rna_type','date','made');  
		  $this->order = array('id' => 'desc');
		
    }

    public function index()
    {
        $data['tablename']='rnapreps';             
        $this->template->set('title', 'Rnapreps Records');
        $this->template->load('_layout/database', 'databases/rnapreps',$data);
    } 
   

    public function read($id) 
    {
        $row = $this->Data_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'type' => $row->type,
		'quantity' => $row->quantity,
		'volume' => $row->volume,
		'concentration' => $row->concentration,
		'total_rna' => $row->total_rna,
		'rna_type' => $row->rna_type,
		'date' => $row->date,
		'made' => $row->made,
	    );
            $this->template->set('title', 'Rnaprep details');
			$this->template->load('_layout/database', 'databases/rnapreps_read',$data);

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/rnapreps'));
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
                $record->type,
                $record->quantity,
                $record->volume,
                $record->concentration,
                $record->total_rna,
                $record->rna_type,
                $record->date,
                $record->made,
 
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

/* End of file Rnapreps.php */
/* Location: ./application/controllers/Rnapreps.php */
