<nav class="navbar  navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >EGLAB
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url('home'); ?>"">Home <span class="sr-only">(current)</span></a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Databases <span class="caret"></span></a>
          <ul class="dropdown-menu">
			 <li><a href="<?php echo site_url('databases/antibodies'); ?>">Antibody</a></li>
             <li><a href="<?php echo site_url('databases/inventory'); ?>">Inventory</a></li>
             <li><a href="<?php echo site_url('databases/mutants'); ?>">Mutants</a></li>
            <li><a href="<?php echo site_url('databases/plasmid'); ?>">Plasmids</a></li>
            <li><a href="<?php echo site_url('databases/primers'); ?>">Primers</a></li>
            <li><a href="<?php echo site_url('databases/polyclone'); ?>">Clones</a></li>
            <li><a href="<?php echo site_url('databases/rnapreps'); ?>">RnaPreps</a></li>
            <li><a href="<?php echo site_url('databases/strains'); ?>">Strains</a></li>
            <li><a href="<?php echo site_url('databases/vectors'); ?>">Vectors</a></li>
            <li><a href="<?php echo site_url('databases/tfome'); ?>">Tfome</a></li>
            <li><a href="<?php echo site_url('databases/transcient'); ?>">Transcient</a></li>
             <li><a href="<?php echo site_url('databases/yeastone'); ?>">Yeast one hybrid</a></li>
             <li><a href="<?php echo site_url('databases/promoter'); ?>">Promoter</a></li>

          </ul>
        </li>
      </ul>
    
      <ul class="nav navbar-nav ">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publications <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('publications/publications/research'); ?>">Research</a></li>
            <li><a href="<?php echo site_url('publications/publications/reviews'); ?>">Reviews</a></li>
            <li><a href="<?php echo site_url('publications/publications/editorials'); ?>">Editorials</a></li>
            <li><a href="<?php echo site_url('publications/publications/procedings'); ?>">Procedings</a></li>
            <li><a href="<?php echo site_url('publications/publications/books'); ?>">Books</a></li>
          </ul>
        </li>
        <li><a href="<?php echo site_url('gallery/photo'); ?>">Photo gallery</a></li>
        <li><a href="<?php echo site_url('members/members'); ?>">Team</a></li>
        <li><a href="<?php echo site_url('databases/mutants/autocomplete'); ?>">Search</a></li>
      </ul>
      
<ul class="nav navbar-nav ">
	<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="#">Data Available</a></li>
			<li><a href="#">General infor</a></li>
			<li><a href="#">Documents</a></li>
			
		</ul>
	</li>
</ul>
      
      
      
     <ul class="nav navbar-nav navbar-right">
     <li><a href="<?php echo site_url('login'); ?>"><i class="fa fa-fw fa-user"></i>Login</a></li>
    </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
