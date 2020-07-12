<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Plasmidmaps extends CI_Controller 
 {
  public function __construct() {
   parent::__construct ();
   
   $this->load->helper('download');
  }
 
  function index()
    {
	    $dir  = 'uploads/plasmid/';
	    $scanned_directory = array_diff(scandir($dir), array('..', '.'));
        //$filelist = scandir($dir);
		$data['files']=$scanned_directory;
	    $this->template->set('title', 'Plasmid maps ');
        $this->template->load('_layout/default', 'plasmid-maps',$data);
    }
 
   
  function download($filename = NULL){
		$path = file_get_contents('uploads/plasmid/'.$filename);
		force_download($filename,$path);

		
	}
	
		 
 }
