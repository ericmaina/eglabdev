<!-- Container -->
<div class="container">
<nav class="navbar navbar-default navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button> 
		 <a class="navbar-brand" href="#">EGLAB Database</a>
		</div>
		
     <div class="collapse navbar-collapse" id="navbarCollapse">	
		<ul class="nav navbar-nav">
		  <li class="active"><a href="<?php echo site_url('home'); ?>">Home</a></li>
		  		  
		  <li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Datatabase
				   <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				  <li><a href="
					<?php echo site_url('databases/antibodies'); ?>">Antibody
					</a>
					  </li>
					  <li>
						<a href="<?php echo site_url('databases/inventory'); ?>">Inventory
					</a>
					  </li>
					  <li>
						<a href="<?php echo site_url('databases/mutants'); ?>">Mutants
					</a>
					  </li>
					  <li>
						<a href="<?php echo site_url('databases/plasmid'); ?>">Plasmids
					</a>
					  </li>
					  <li>
						<a href="<?php echo site_url('databases/primers'); ?>">Primers
					</a>
					  </li>
					  <li>
						<a href="<?php echo site_url('databases/promoter'); ?>">Promoter
					</a>
					  </li>
					<li>
						<a href="<?php echo site_url('databases/polyclone'); ?>">Polyclones
					</a>
					  </li>
					  <li>
						<a href="<?php echo site_url('databases/rnapreps'); ?>">RNA-Preps
					</a>
					  </li>
					  <li>
						<a href="<?php echo site_url('databases/strains'); ?>">Strains
					</a>
					  </li>
					
					  <li>
						<a href="<?php echo site_url('databases/tfome'); ?>">Tfome
					</a>
					  </li>
					  <li>
						<a href="<?php echo site_url('databases/transcient'); ?>">Transcient
					</a>
					  </li>
					    <li>
						<a href="<?php echo site_url('databases/vectors'); ?>">Vectors
					</a>
					  </li>
					  <li>
						<a href="<?php echo site_url('databases/yeastone'); ?>">Yeast one hybrid
					</a>
					  </li>
					  
				</ul>
			  </li>
			  
		  <li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown"href="#">Publications
			  <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				 <li>
					  <a href="<?php echo site_url('publications/publications/research'); ?>">Research
				</a>
					</li>
					<li>
					  <a href="<?php echo site_url('publications/publications/reviews'); ?>">Reviews
				</a>
					</li>
					<li>
					  <a href="<?php echo site_url('publications/publications/editorials'); ?>">Editorials
				</a>
					</li>
					<li>
					  <a href="<?php echo site_url('publications/publications/procedings'); ?>">Procedings
				</a>
					</li>
					<li>
					  <a href="<?php echo site_url('publications/publications/books'); ?>">Books
				</a>
            </li>
				</ul>
		  </li>
		  <li>
          <a href="<?php echo site_url('gallery/photo'); ?>">Photo gallery
            </a>
        </li>
         
         <li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown"href="#">Resources
			  <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				 <li>
					 <a href="<?php echo site_url('awsglacier'); ?>">Raw Data Records</a>

					</li>
					
					<li>
					  <a href="<?php echo site_url('plasmidmaps'); ?>">Plasmid Maps</a>
					</li>
				</ul>
         </li>
        
       <?php if($this->session->userdata('logged_in') and $this->session->userdata('userlevel')==='admin'): ?>
			<ul class="nav navbar-nav">	
			  <li><a href="<?php echo site_url('admin/alter/'); ?>">Admin</a></li>
			</ul> 
    	<?php endif; ?>

		
		
		<ul class="nav navbar-nav navbar-right">
		<?php if($this->session->userdata('logged_in')): ?>
		   <li class="dropdown">
			   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				   Welcome <?php echo $this->session->userdata('firstname'); ?><span class="caret"></span></a>
			   <ul class="dropdown-menu">
					  <li><a href="<?php echo site_url('users/changePassword');?>">change password</a></li>
				</ul>
		   </li>
		   <li><a href="<?php echo site_url('users/logout');?>">Logout </a></li>
		<?php endif; ?>
  
		<?php if(!$this->session->userdata('logged_in')): ?>
  
		   <li><a href="<?php echo site_url('users/login'); ?>">login</a></li>
		   
		  <?php endif; ?>  
		 </ul>
		
		</div>
    </div>	
</nav>
</div>
