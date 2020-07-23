<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Transcient extends MY_Controller
{
    function __construct()
    {
       
        parent::__construct();
        $this->load->model('Transcient_model');
        $this->column_search = array('gene_model','gene_name','label','vector','plate','construct');
		$this->column_order = array('transcient_id','gene_model','gene_name','vector',null,null,null,'label', 'drug','plate','first_name');
        $this->order = array('transcient_id' => 'Asc');
        
    }

    public function index()
    {
	    $data['tablename']='transcient';
        $this->template->set('title', 'Transcient Records');
        $this->template->load('_layout/database', 'databases/transcient',$data);
	    
    } 
    
 public function read($id) 
    {
        $row = $this->Transcient_model->get_by_id($id);
        if ($row) {
            $data = array(
				'genemodel' =>$row->gene_model,
				'genename' =>$row->gene_name,
				'vector' =>$row->vector,
				'construct' =>$row->construct,
				'material' =>$row->material_type,
				'host' =>$row->bacteria,
				'label' =>$row->label, 
				'antibiotic' =>$row->drug,
				'plate' =>$row->plate,
				'creator' =>$row->first_name,
	    );
          
            $this->template->set('title', 'Transcient details');
			$this->template->load('_layout/database', 'databases/transcient_read',$data);
        } else {
            //$this->session->set_flashdata('message', 'Record Not Found');
            //redirect(site_url('databases/transcient'));
        }
    }
    
    
function getLists(){
	
        $data = $row = array();
        
        // Fetch  records
        $items = $this->Transcient_model->getRows($_POST);
        
       if(isset($_POST['start']) && isset($_POST['draw']))
         {
         foreach($items as $row) {
			
           $data[] = array(
                $row->gene_model,
				$row->gene_name,
				$row->vector,
				$row->construct,
				$row->material_type,
				$row->bacteria,
				$row->label, 
				$row->drug,
				$row->plate,
				$row->first_name,
                 );
              
        }
        
      }
         else
         {
			die();
		  }
        
        $output = array(
            "draw" => intval($_POST['draw']),
            "recordsTotal" => $this->Transcient_model->countAll(),
            "recordsFiltered" => $this->Transcient_model->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
        
	
    
}

}

/* End of file Transcient.php */
/* Location: ./application/controllers/Transcients.php */
