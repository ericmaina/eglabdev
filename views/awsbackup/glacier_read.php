<h5><b>Key words :</b><?php echo $title; ?></h5><br>

<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            
       
            <th>Species</th>
            <td><?php echo $species; ?></td>
            <th>Vault Name</th>
            <td><?php echo $vault; ?></td>
        </tr>
        <tr>
            <th>Tissue</th>
            <td><?php echo $tissue; ?></td>
        
            <th>Technique</th>
            <td><?php echo $technique; ?></td>
        </tr>
         
        
        <tr>
            <th>Archive Description</th>
            <td colspan="3"><?php echo $archiveDescription; ?></td>
        </tr>
        
        <tr>
            <th>Metadata File Name</th>
            <td colspan="3"><?php echo $archiveMetadata; ?></td>
        </tr>
        </table>
      </div>
      
  <div class="form-group">
  <label for="archiveID">Archive ID</label>
  <textarea class="form-control" rows="2"><?php echo $archiveID; ?></textarea>
</div>
	
     
      
            <a href="<?php echo site_url('awsglacier') ?>" class="btn btn-primary">Back</a>
        
   

