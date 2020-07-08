<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Administrator section</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("assets/dashboard/bootstrap/css/bootstrap.min.css") ?>"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url("assets/dashboard/font-awesome/css/font-awesome.min.css") ?>"/>
      <!-- Custom Theme Style -->
	<link rel="stylesheet" href="<?php echo base_url("assets/dashboard/css/custom.min.css") ?>"/>
	<!-- grocery crude themes -->
	             <?php
	             if(isset($css_files)){ 
				 foreach($css_files as $file):
				 echo "<link type='text/css' rel='stylesheet' href='$file' />\n";
	             endforeach;
				  }
	            ?>
  </head>

  <body class="nav-md">
	 <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo site_url('home'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>EGLAB DASHBOARD</span></a>
            </div>
            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Controls</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('admin/alter/'); ?>">Admin Home</a></li>
                      <li><a href="<?php echo site_url('home'); ?>">Main Home</a></li>
                     </ul>
                  </li>
                  
                  <li><a><i class="fa fa-table"></i> Databases <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					  <li><a href="<?php echo site_url('admin/alter/antibody'); ?>">Antibodies</a></li>
					  <li><a href="<?php echo site_url('admin/alter/inventory'); ?>">Inventory</a></li>
					  <li><a href="<?php echo site_url('admin/alter/mutant'); ?>">Mutants</a></li>
					  <li><a href="<?php echo site_url('admin/alter/plasmid'); ?>">Plasmids</a></li>
					  <li><a href="<?php echo site_url('admin/alter/primer'); ?>">Primers</a></li>
					  <li><a href="<?php echo site_url('admin/alter/polyclone'); ?>">Polyclonals</a></li>
					  <li><a href="<?php echo site_url('admin/alter/rnaprep'); ?>">RnaPreps</a></li>
					  <li><a href="<?php echo site_url('admin/alter/strain'); ?>">Strains</a></li>
					 <li><a href="<?php echo site_url('admin/alter/vector'); ?>">Vectors</a></li>
					 <li><a href="<?php echo site_url('admin/alter/company'); ?>">Company</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					  <li><a href="<?php echo site_url('users/register'); ?>">Register user</a></li>
					  <li><a href="<?php echo site_url('users'); ?>">Edit users</a></li>
                      
                    </ul>
                  </li>
                  
                  </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                
                              
              <nav class="nav navbar-nav ">
					<ul class=" navbar-right">
						<?php if(!$this->session->userdata('logged_in')): ?>
						<li><a href="<?php echo site_url('users/login'); ?>">Login</a></li>
						<?php endif; ?>
					</ul>
					  
					<ul class=" navbar-right">
						<?php if($this->session->userdata('logged_in')): ?>
							<li><a href="<?php echo site_url('users/logout');?>">Logout</a></li>
						<?php endif; ?>
					</ul>        
			</nav>
              
              
              
              
            </div>
          </div>
         
        <!-- /top navigation -->
				<div class="right_col" role="main">
				 
					<div class="">
						<div class="page-title">
							<div class="title_left">
								<h4>
									<small>Administrators page </small>
								</h4>
							</div>
						</div>
						<div class="clearfix"></div>
				 
						<div class="row">
							<div class="col-md-12">
								<div class="x_panel">
								  
									<div class="x_content">
										<!-- content starts here -->
											
										<?php
											 if(isset($output)){ 
											 echo $output;
											 }
											 else
											 {
												echo $contents;
											  }
											?>	
											
										<!-- content ends here -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

        <!-- footer content -->

        <footer>
          <div class="pull-right">
            <div class="container-fluid bg-light text-center custom-footer">
				<div class="col-md-12 col-sm-12">
				© 2019 Copyright:
					<a href="https://bmb.natsci.msu.edu/faculty/erich-grotewold/"> GrotewoldLab</a>
			</div>
			</div>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    
      <!-- JavaScript-->
    <script src="<?php echo base_url('/assets/dashboard/jquery/jquery.min.js') ?>"></script>
 <?php
	if(isset($js_files)){
	foreach($js_files as $file): 
	echo "<script src=$file></script>\n";
	endforeach;
	}
 ?>
   <script src="<?php echo base_url('/assets/dashboard/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
   <script src="<?php echo base_url('/assets/dashboard/js/custom.min.js') ?>"></script>  
    

  </body>
</html>
