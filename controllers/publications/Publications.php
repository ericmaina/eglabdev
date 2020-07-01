<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Publications extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        
    }

	

    function index()
    {
	    $this->template->set('title', 'Publications information');
        $this->template->load('_layout/default', 'publications/index');
        
    }
    public function research()
    {
	    $this->template->set('title', 'Research');
        $this->template->load('_layout/default', 'publications/research');
        
    } 
    public function reviews()
    {
        $this->template->set('title', 'Reviews');
        $this->template->load('_layout/default', 'publications/reviews');
    } 
    
    public function editorials()
    {
	    $this->template->set('title', 'Editorials');
        $this->template->load('_layout/default', 'publications/editorials');

    } 
    
    public function procedings()
    {
	    $this->template->set('title', 'Procedings');
        $this->template->load('_layout/default', 'publications/procedings');
    } 
    
    public function books()
    {
        
	    $this->template->set('title', 'Books');
        $this->template->load('_layout/default', 'publications/books');
        
    } 
 }

/* End of file Publications.php */
/* Location: ./application/controllers/Publications.php */
