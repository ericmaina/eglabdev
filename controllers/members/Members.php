<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Members extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        
    }

    public function index()
    {
	    $this->template->set('title', 'Team Members');
        $this->template->load('_layout/default', 'members/team');
        
    } 
  }

/* End of file Members.php */
/* Location: ./application/controllers/Members.php */
