    <div class="container">    
        <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
            <h3 style="font-family:arial; font-weight:bold; font-size:30px;">
                 Photo Gallery
        </h3>
        </div>
        
        <ul class="row ">
            <?php foreach ($picture_list as $pic): ?>
				<li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 img">
					<img class="img-responsive" src="<?=base_url().'assets/uploads/'.$pic->url;?>" title="<?php echo $pic->title;?>">
				</li>
			<?php endforeach ?>

          </ul>  
          
          	  <a href="<?=base_url().'gallery/photo/form';?>" class="btn btn-primary">Upload More</a>
           
    </div> <!-- /container -->
    
     
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
 
