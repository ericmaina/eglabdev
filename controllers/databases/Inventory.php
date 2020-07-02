<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Inventory extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
          $this->load->model('Data_model');
          $this->table = 'inventory';
		  $this->column_search = array('itemname','vendor','catalognumber','location','sublocation');  
		  $this->column_order = array('id','itemname','vendor','catalognumber','location','sublocation','dateopened','unitsize',null);  
		  $this->order = array('id' => 'desc');
    }

    public function index()
    {
	    
        $this->template->set('title', 'Inventory Records');
        $this->template->load('_layout/database', 'databases/inventory');
	    
    } 
    
 public function read($id) 
    {
        $row = $this->Data_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'itemname' => $row->itemname,
		'vendor' => $row->vendor,
		'catalognumber' => $row->catalognumber,
		'location' => $row->location,
		'sublocation' => $row->sublocation,
		'dateopened' => $row->dateopened,
		'unitsize' => $row->unitsize,
		'price' => $row->price,
	    );
          
            $this->template->set('title', 'Inventory details');
			$this->template->load('_layout/database', 'databases/inventory_read',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('databases/inventory'));
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
				$record->itemname,
                $record->vendor,
                $record->catalognumber,
                $record->location,
                $record->sublocation,
                $record->dateopened,
                $record->unitsize,
                $record->price,
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

/* End of file Inventory.php */
/* Location: ./application/controllers/Inventory.php */
