<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
    
      
    function index()
    {
        	    
	        
	    $this->template->set('title', 'Home page');
        $this->template->load('_layout/default', 'home');
        
    }
    
    
    
}