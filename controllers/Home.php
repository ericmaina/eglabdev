<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Home extends CI_Controller
{
    
     public function __construct()
    {
        parent::__construct();
        
    }
    
    function index()
    {
	    $this->template->set('title', 'Home page');
        $this->template->load('_layout/default', 'home');
    }
       
}
