
<div class="row">
  <div class="col-sm-12">
    <img class="img-responsive" src="<?php echo base_url('assets/images/maize3.jpg'); ?>" alt="maize varieties" >
  </div>
</div>


<br>
<div class="row">
  <div class="col-sm-12">
    <?php if($this->session->flashdata('message')) { ?>
    <div class="alert alert alert-success">
      <?php echo $this->session->flashdata('message')?>
    </div>
    <?php } ?>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
<h2>Grotewold Database Site
</h2>
<br>
<p>This is the lab internal&nbsp;site to house all the databases,resouces and information of the lab in a centralised location.&nbsp;
Access to the database information is restricted to current lab members with an account.To obtain an account contact the 
current lab manager or database administrator.The site can only be accessed from within the Biochemistry building building(BMB)
 or using the MSU VPN when outside the building.
    </p>
  </div> 
</div>
<hr>

<div class="row">
  <div class="col-md-4">
    <h4>Databases
    </h4>
    <p>This are a number of databases that are for the internal use of the lab that make it easier to 
      either locate various lab stocks.
    </p>
  </div>
  <div class="col-md-4">
    <h4>Resources
    </h4>
    <p>A collection of the available tools that you have access to as a member of the lab.
      These are added as they become available
    </p>
  </div>
  <div class="col-md-4">
    <h4>Publications
    </h4>
    <p>Compilation of lab generated publications from lab members 
      who have been part of the lab over several years.
    </p>
  </div>
</div>
