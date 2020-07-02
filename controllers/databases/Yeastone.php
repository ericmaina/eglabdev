<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Yeastone extends MY_Controller
{
    function __construct()
    {
       
        parent::__construct();
        $this->load->model('Yeastone_model');
        $this->column_search = array('gene_model','tf_model','tf_name','label','host','plate','plate');
		$this->column_order = array('yeast_one_hybrid_id','gene_model','gene_name','tf_model','tf_name','material_type', null,null,null,'label',null,'plate');
        $this->order = array('yeast_one_hybrid_id' => 'Asc');
        
    }

    public function index()
    {
	    
        $this->template->set('title', 'Yeast One Hybrid Records');
        $this->template->load('_layout/database', 'databases/yeastone');
	    
    } 
    
 public function read($id) 
    {
        $row = $this->Yeastone_model->get_by_id($id);
        if ($row) {
            $data = array(
				'genemodel' =>$row->gene_model,
                'genename' =>$row->gene_name,
                'tfmodel' =>$row->tf_model,
				'tfname' =>$row->tf_name,
				'material' =>$row->material_type,
				'concentration' =>$row->concentration_3at,
				'marker' =>$row->marker,
				'host' =>$row->host,
				'label' =>$row->label, 
				'shelf' =>$row->shelf,
				'plate' =>$row->plate,
	    );
          
            $this->template->set('title', 'Yeast One hybrid details');
			$this->template->load('_layout/database', 'databases/yeastone_read',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/yeastone'));
        }
    }
    
    
function getLists(){
	
        $data = $row = array();
        
        // Fetch  records
        $items = $this->Yeastone_model->getRows($_POST);
        
       if(isset($_POST['start']) && isset($_POST['draw']))
         {
         foreach($items as $row) {
           $data[] = array(
                $row->gene_model,
                $row->gene_name,
                $row->tf_model,
				$row->tf_name,
				$row->material_type,
				$row->marker,
				$row->concentration_3at,
				$row->host,
				$row->label, 
				$row->shelf,
				$row->plate,
                 );
              
        }
        
      }
         else
         {
			die();
		  }
        
        $output = array(
            "draw" => intval($_POST['draw']),
            "recordsTotal" => $this->Yeastone_model->countAll(),
            "recordsFiltered" => $this->Yeastone_model->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
        
	
    
}

}

/* End of file Yeastone.php */
/* Location: ./application/controllers/Yeastone.php */
