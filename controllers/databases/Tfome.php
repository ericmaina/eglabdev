<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Tfome extends MY_Controller
{
    function __construct()
    {
       
        parent::__construct();
        $this->load->model('Tfome_model');
        $this->column_search = array('gene_model','gene_name','label', 'ut_number','first_name');
		$this->column_order = array('tfome_id','gene_model','gene_name','ut_number','vector',null,'label', null,null,'first_name',null);
        $this->order = array('tfome_id' => 'Asc');
        
    }

    public function index()
    {
	    
        $this->template->set('title', 'Tfome Records');
        $this->template->load('_layout/database', 'databases/tfome');
	    
    } 
    
 public function read($id) 
    {
        $row = $this->Tfome_model->get_by_id($id);
        if ($row) {
            $data = array(
		'genemodel' => $row->gene_model,
		'genename' => $row->gene_name,
		'utname' => $row->ut_number,
		'vector' => $row->vector,
		'genetictype' => $row->material_type,
		'antibiotic'=>$row->drug,
		'bacteria' => $row->bacteria,
		'building' => $row->building,
		'freezer' => $row->freezer,
		'shelf'=>$row->shelf,
		'plate'=>$row->plate,
		'rack'=>$row->rack,
		'position'=>$row->position,
		'label'=>$row->label,
		'creator' => $row->first_name,
	    );
          
            $this->template->set('title', 'Tfome details');
			$this->template->load('_layout/database', 'databases/tfome_read',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/tfome'));
        }
    }
    
    
function getLists(){
	
        $data = $row = array();
        
        // Fetch  records
        $items = $this->Tfome_model->getRows($_POST);
        
       if(isset($_POST['start']) && isset($_POST['draw']))
         {
     
         foreach($items as $row) {
			$data[] = array(
                $row->gene_model,
				$row->gene_name,
				$row->ut_number,
				$row->vector,
				$row->material_type,
				$row->label, 
				$row->rack,
				$row->plate,
				$row->position,
				$row->first_name,   
				'<a href="tfome/read/'.$row->tfome_id.'" class="btn btn-link  mr-1">Read</a>'
                 );
              
        }
        
      }
         else
         {
			die();
		  }
        
        $output = array(
            "draw" => intval($_POST['draw']),
            "recordsTotal" => $this->Tfome_model->countAll(),
            "recordsFiltered" => $this->Tfome_model->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
        
	
    
}

}

/* End of file Tfome.php */
/* Location: ./application/controllers/Tfome.php */
