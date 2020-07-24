<div class="container"> 
	<div class="row justify-content-center">
		
		<?php if($this->session->flashdata('message')) { ?>
			<div class="alert alert-danger">
				<?php echo $this->session->flashdata('message')?>
			</div>
		<?php } ?>

		<?php if($this->session->flashdata('error')) { 
        echo '<div class="alert alert alert-success">';
        echo $this->session->flashdata('message');
        echo  "</div>";
        }
       ?>



	</div>
</div>    
    
    
    
    
    
    
    <div class="container">    
        <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
            <h3 style="font-family:arial; font-weight:bold; font-size:30px;">
                 Photo Gallery
        </h3>
        </div>
        
        <ul class="row ">
            <?php foreach ($picture_list as $pic): ?>
            
				<li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 img">
					
					<img class="img-responsive" src="<?=base_url().'uploads/photos/'.$pic->url;?>" title="<?php echo $pic->title;?>">
					<div class="caption">
                      <p><?php echo $pic->title;?></p>
                     </div>
                     <div>
                    <?php if($this->session->userdata('logged_in') and $this->session->userdata('userlevel')==='admin'): ?>
                     <a href="<?php echo base_url('gallery/photo/delete/'.$pic->id); ?>" 
                     class="btn btn-danger" onclick="return confirm('Are you sure to delete data?')?true:false;">delete</a>
                      <?php endif; ?>
                     </div>
				</li>
			<?php endforeach ?>

          </ul>  
			  <?php if($this->session->userdata('logged_in')): ?>
          	  <a href="<?=base_url().'gallery/photo/upload/';?>" class="btn btn-primary">Upload More</a>
			  <?php endif; ?>
    </div> <!-- /container -->
    
     
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
 
