<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Alter extends MY_Controller {
 
    function __construct()
    {
        parent::__construct();
  
		if(!($this->session->userdata('userlevel')=='admin')){
			$this->session->set_flashdata('message', 'Sorry! you need to be an administrator to access this page');
			redirect('home');
		}
        $this->load->library('grocery_CRUD');
    }
    
    function index()
    {
		
        $this->template->load('admin/dash_template', 'admin/dash');

       
	}
		
    function antibody()
    {
        $crud=$this->_getGroceryCrude('antibodies','Antibody');
        $crud->required_fields('name','antigen','storage');
        $crud->unset_clone();
		$output = $crud->render();
		$this->_table_output($output);        
    }
    
    function vector()
    {
		$crud=$this->_getGroceryCrude('vectors','Vectors');
        $crud->set_field_upload('vectormap','assets/uploads/vector_maps');
        $crud->unset_columns('comments','reference','keywords','modified');
        $crud->required_fields('name','date','vector','markers');
        $crud->unset_texteditor('comments','reference','keywords');
        $output = $crud->render();
		$this->_table_output($output);        
          
    }
    
    function inventory()
    {
		$crud=$this->_getGroceryCrude('inventory','Inventory');
        $crud->unset_columns('price','unitsize');
        $crud->required_fields('itemname','vendor','location');
		$crud->display_as('itemname','Name');
		$crud->display_as('catalognumber','Catalog No');
		$crud->display_as('dateopened','Date Opened');
	    $crud->display_as('unitsize','Unit Size');
	    $crud->display_as('sublocation','Sub-location');
        $output = $crud->render();
		$this->_table_output($output);        
          
    }
    
    public function mutant()
    {
        $crud=$this->_getGroceryCrude('mutants','Mutant');
        $crud->unset_columns('mutantname','comments','synonym');
        $crud->required_fields('locus','geneproduct','tubelabel');
        $crud->display_as('geneproduct','Gene product');
        $crud->display_as('mutantname','Mutant Name');
        $crud->display_as('seedcollection','Seed Collection');
        $crud->display_as('insertionsite','Insertion Site');
        $crud->display_as('stocknumber','Stock Number');
        $crud->display_as('tubelabel','Tube Label');
        $crud->unset_texteditor('comments');
        $output = $crud->render();
		$this->_table_output($output);        
          
    }
    
    function plasmid()
    {
        $crud=$this->_getGroceryCrude('plasmid','Plasmid');
        $crud->unset_columns('comments','pcrgenerated','primers','enzymes','prepared','concentration','inserts');
        $crud->required_fields('name','markers','vector','inserts','date');
        $crud->display_as('pcrgenerated','PCR Generated');
        $crud->unset_texteditor('comments');
        $output = $crud->render();
		$this->_table_output($output);        
          
    }
    
    function primer()
    {
        $crud=$this->_getGroceryCrude('primers','Primers');
        $crud->unset_columns('sequence','box','comments');
        $crud->required_fields('name','date','purpose');
        $crud->unset_texteditor('comments','purpose');
        $output = $crud->render();
		$this->_table_output($output);        
          
    }
    
    function rnaprep()
    {
        $crud=$this->_getGroceryCrude('rnapreps','RNA preps');
        $crud->required_fields('name','date','type');
        $crud->display_as('total_rna','Total RNA');
        $crud->display_as('rna_type','RNA Type');
        $crud->display_as('made','Made By');
        $output = $crud->render();
		$this->_table_output($output);        
          
    }
    
    function strain()
    {
        $crud=$this->_getGroceryCrude('strains','Strains');
        $crud->unset_columns('source','comments');
        $crud->required_fields('species','strain','plasmid','marker');
        $output = $crud->render();
		$this->_table_output($output);        
          
    }
    
    function polyclone()
	{
		
		$crud=$this->_getGroceryCrude('clones','Clones');
		$crud->display_as('preparedby','Prepared by');
		$crud->display_as('companyid','Company');
		$crud->display_as('projectid','Project ID');
		$crud->display_as('sampletype','Sample Type');
		$crud->order_by('projectid','desc');
		$crud->set_relation('companyid','company','company_name');
		$output = $crud->render();
		$this->_table_output($output);
	}
	
	   
    public function company()
    {
         $crud=$this->_getGroceryCrude('company','Company');
         $crud->unset_clone();
         $crud->unset_delete();
         $output = $crud->render();
         $this->_table_output($output);                
    }
	
	function _getGroceryCrude($tableName,$tableSubject)
	{
		$crud = new grocery_CRUD();
		$crud->set_table($tableName);
		$crud->set_subject($tableSubject);
		$crud->unset_clone();
        $crud->unset_export();
		return $crud;
		
		
	}
	 

    function _table_output($output = null)
    {
        $this->load->view('admin/dash_template',$output);    
    }
}
 
/* End of file Alter.php */
/* Location: ./application/controllers/Alter.php */
