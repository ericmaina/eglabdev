<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Promoter extends MY_Controller
{
    function __construct()
    {
       
        parent::__construct();
        
        $this->load->model('promoter_model');
        $this->column_search = array('gene_name','gene_model','label');
		$this->column_order = array('promoter_id','gene_name','gene_model',null,null,null,null,null,null,'label',null);
        $this->order = array('promoter_id' => 'Asc'); 
        
    }

    public function index()
    {
	    $data['tablename']='promoter';
        $this->template->set('title', 'Promoter Records');
        $this->template->load('_layout/database', 'databases/promoter',$data);
	    
    } 
    
 public function read($id) 
    {
        $row = $this->promoter_model->get_by_id($id);
        if ($row) {
            $data = array(
				'genename' =>$row->gene_name,
		'genemodel' =>$row->gene_model,
		'transcript' =>$row->transcript,
		'shortname' =>$row->shortname,
		'vector' =>$row->vector,
		'material' =>$row->material_type,
		'drug' =>$row->drug,
		'freezer' =>$row->freezer,
		'label' =>$row->label,
		'plate' =>$row->plate,            
		'chromosome' =>$row->chromosome,      
		'start_position' =>$row->start_position,            
		'stop_position' =>$row->stop_position,                   
		'strand' =>$row->strand,           
		'pcrproduct' =>$row->pcrproduct,       
		'pcrlength' =>$row->pcrlength,        
		'forwardprimer' =>$row->fowardprimer,     
		'reverseprimer' =>$row->reverseprimer,
	    );
          
            $this->template->set('title', 'Promoter details');
			$this->template->load('_layout/database', 'databases/promoter_read',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/promoter'));
        }
    }
    
    
function getLists(){
	
        $data = $row = array();
        
        // Fetch  records
        $items = $this->promoter_model->getRows($_POST);
        
       if(isset($_POST['start']) && isset($_POST['draw']))
         {
        
         foreach($items as $row) {
			
           $data[] = array(
                $row->gene_model,
                $row->gene_name,
				$row->transcript,
				$row->shortname,
				$row->vector,
				$row->material_type,
				$row->drug,
				$row->freezer,
				$row->label,
				'<a href="promoter/read/'.$row->promoter_id.'" class="btn btn-link  mr-1">Read</a>'
                 );
              
        }
        
      }
         else
         {
			die();
		  }
        
        $output = array(
            "draw" => intval($_POST['draw']),
            "recordsTotal" => $this->promoter_model->countAll(),
            "recordsFiltered" => $this->promoter_model->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
        
	
    
}

}

/* End of file Promoter.php */
/* Location: ./application/controllers/Promoter.php */
