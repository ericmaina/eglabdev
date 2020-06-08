<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Dashboard</title>

<head>
    <!-- Bootstrap CSS -->
			<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>        
        		<!-- custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css') ?>"/>
		<!-- google font CSS -->
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700|Poppins|Alegreya+Sans" rel="stylesheet">
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
          <a class="navbar-brand" href="">EGLAB Database</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
<!--
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
-->
            <li><a href="#">Logged in as <?php echo $this->session->userdata('username');?></a></li>
            <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
            
            
          </ul>
<!--
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo site_url('admin/alter/dashboard'); ?>">Dashboard home <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo site_url('admin/alter/antibody'); ?>">Antibodies</a></li>
             <li><a href="<?php echo site_url('admin/alter/inventory'); ?>">Inventory</a></li>
             <li><a href="<?php echo site_url('admin/alter/mutant'); ?>">Mutants</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo site_url('admin/alter/plasmid'); ?>">Plasmids</a></li>
            <li><a href="<?php echo site_url('admin/alter/primer'); ?>">Primers</a></li>
            <li><a href="<?php echo site_url('admin/alter/polyclone'); ?>">Polyclonals</a></li>
            <li><a href="<?php echo site_url('admin/alter/rnaprep'); ?>">RnaPreps</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo site_url('admin/alter/strain'); ?>">Strains</a></li>
            <li><a href="<?php echo site_url('admin/alter/vector'); ?>">Vectors</a></li>
            <li><a href="<?php echo site_url('admin/alter/vector'); ?>">Vectors</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h3 class="page-header">Welcome</h3>


         
       <div class="panel panel-default">
                <div class="panel-heading">
                    <b>	Hello <?php echo $this->session->userdata('username');?> You are Logged in! </b> 
                </div>
                <div class="panel-body">
                    Welcome to the administator page use the menu on the side to selct the database to modify.
                    
                    You can edit add or delete any of the records in the database.<br>
                    To create a new user select the signup button on the menu bar and enter user details.
                    The user name and password are mandatory 
                    
                </div>
            </div>
  
   <h2 class="sub-header">Section title</h2>
  
        
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
