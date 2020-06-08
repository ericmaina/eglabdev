<!doctype html>
<html>
    <head>
        <title>Administrator section</title>
        
        <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		
		
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css') ?>"/>
	             <?php
	             if(isset($css_files)){ 
				 foreach($css_files as $file):
				 echo "<link type='text/css' rel='stylesheet' href='$file' />\n";
	             endforeach;
				  }
	            ?>
	    <!-- JS Libs -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js" type="text/javascript"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

    </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">EGLAB Database</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
         
            <li><a href="#">Logged in as <?php echo $this->session->userdata('username');?></a></li>
            <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
            
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo site_url('admin/alter/dashboard'); ?>">Data Tables <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo site_url('admin/alter/antibody'); ?>">Antibodies</a></li>
             <li><a href="<?php echo site_url('admin/alter/inventory'); ?>">Inventory</a></li>
             <li><a href="<?php echo site_url('admin/alter/mutant'); ?>">Mutants</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo site_url('admin/alter/plasmid'); ?>">Plasmids</a></li>
            <li><a href="<?php echo site_url('admin/alter/primer'); ?>">Primers</a></li>
            <li><a href="<?php echo site_url('admin/alter/strain'); ?>">Strains</a></li>
            <li><a href="<?php echo site_url('admin/alter/vector'); ?>">Vectors</a></li>
            
            <li><a href="<?php echo site_url('admin/alter/rnaprep'); ?>">RnaPreps</a></li>
          </ul>
          <ul class="nav nav-sidebar">
			 <li><a href="<?php echo site_url('admin/alter/polyclone'); ?>">Polyclonals</a></li>
            <li><a href="<?php echo site_url('admin/alter/antigen'); ?>">Edit Antigens</a></li>
            <li><a href="<?php echo site_url('admin/alter/company'); ?>">Edit Comapany</a></li>
             <li><a href="<?php echo site_url('admin/alter/sampletype'); ?>">Edit Sample types</a></li>
             <li><a href="<?php echo site_url('admin/alter/species'); ?>">Edit Species</a></li>
            <li><a href="<?php echo site_url('admin/alter/user'); ?>">User</a></li>

          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h3 class="page-header">Records</h3>

         
        <?php
         if(isset($output)){ 
         echo $output;
	     }
	     else
	     {
			echo $contents;
		  }
        ?>
  
        
        </div>
      </div>
    </div>
    
    <footer class="footer">
      <div class="container-fluid bg-light text-center custom-footer">
		 <div class="col-md-12 col-sm-12">
					© 2019 Copyright:
					<a href="https://bmb.natsci.msu.edu/faculty/erich-grotewold/"> GrotewoldLab</a>
			</div>
      </div>
	</footer>

    
   <!-- JavaScript-->
    <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
 <?php
	if(isset($js_files)){
	foreach($js_files as $file): 
	echo "<script src=$file></script>\n";
	endforeach;
	}
 ?>
  </body>
</html>
