<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Alter extends MY_Controller {
 
    function __construct()
    {
        parent::__construct();
  
        $this->load->library('grocery_CRUD');
        
    }
    
    function index()
    {
		
        //$this->template->load('admin/template', 'admin/dash');
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
        $crud->set_field_upload('vectormap','assets/uploads/');
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
		$this->db = $this->load->database('db2',true);
		$crud=$this->_getGroceryCrude('antibody','Polyclone');
		$crud->display_as('sampletypeid','Sample Type');
		$crud->display_as('companyid','Company');
		$crud->display_as('antigenid','Antigen');
		$crud->display_as('speciesid','Species');
		$crud->display_as('userid','User');
		$crud->order_by('projectid','desc');
		$crud->set_relation('sampletypeid','sampletype','category');
		$crud->set_relation('companyid','company','companyname');
		$crud->set_relation('antigenid','antigen','name');
		$crud->set_relation('speciesid','species','speciesname');
		$crud->set_relation('userid','users','firstname');
		$crud->unset_columns('animalnum','purpose','sequence','comments','speciesnamedrop','volume','box','date');
		$crud->unset_texteditor('comments','purpose','sequence');
		$output = $crud->render();
		$this->_table_output($output);
	}
	
	public function antigen()
    {
         $this->db = $this->load->database('db2',true);
         $crud=$this->_getGroceryCrude('antigen','Antigen');
         $crud->unset_delete();
         $crud->unset_texteditor('sequence');
         $output = $crud->render();
         $this->_table_output($output);                
    }
    
    public function company()
    {
         $this->db = $this->load->database('db2',true);
         $crud=$this->_getGroceryCrude('company','Company');
         $crud->unset_clone();
         $crud->unset_delete();
         $output = $crud->render();
         $this->_table_output($output);                
    }
	
	public function sampletype()
    {
         $this->db = $this->load->database('db2',true);
         $crud=$this->_getGroceryCrude('sampletype','Sample Type');
         $crud->unset_delete();
         $output = $crud->render();
         $this->_table_output($output);                
    }
    
    public function species()
    {
         $this->db = $this->load->database('db2',true);
         $crud=$this->_getGroceryCrude('species','Species');
         $crud->unset_delete();
         $output = $crud->render();
         $this->_table_output($output);                
    }
    
   public function user()  //has errors when updating 
	{
		$crud = new grocery_CRUD();
		$crud->set_table('lab_users');
		$crud->set_subject('Users');
		$crud->columns('firstname','lastname','email','level');
		$crud->edit_fields('firstname','lastname','email','level');
		$crud->unset_read()->unset_export()->unset_print()->unset_clone()->unset_add();
		$crud->field_type('level','dropdown',
            array('editor' => 'editor', 'admin' => 'admin','user' => 'user'));
		$output = $crud->render();
		$this->_table_output($output);
	}	

	function use_md5_password($post_array) 
	{
	    $this->load->helper('security');
	    $post_array['password'] = do_hash($post_array['password'], 'md5');
	    return $post_array;
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
