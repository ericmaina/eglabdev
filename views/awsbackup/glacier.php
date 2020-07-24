<h3>Raw Data </h3>
<br>
<div class="table-responsive">
<table class="table table-bordered table-striped table-condensed" id="mytable"> 
        <thead> 
            <tr> 
				<th>No</th> 
                <th>Key words</th> 
                 <th>Species</th>  
                <th>Technique</th>
                <th>Tissue</th> 
                <th>Vault Name</th> 
                <th>Metadata file</th> 
                <th>Details</th> 
                
            </tr> 
        </thead> 
        <tbody> 
           <?php 
            $start = 0; 
             foreach ($archiverecord as $row)
            { 
                ?> 
                <tr> 
                    <td> 
                        <?php echo ++$start ?> 
                    </td> 
                    <td> 
                        <?php echo $row->title; ?> 
                    </td> 
                     <td> 
                        <?php echo $row->species; ?> 
                    </td> 
                    <td> 
                        <?php echo $row->technique; ?> 
                    </td> 
                    <td> 
                        <?php echo $row->tissue; ?> 
                    </td> 
                    <td> 
                        <?php echo $row->archive_vault; ?> 
                    </td> 
                    
                    <td> 
					<?php 
						if($row->local_metadata) {
						   
						   echo anchor("awsglacier/download/".$row->local_metadata,'Download');
						} else { 
						   echo "not available";
						}
					?>
                    
                    </td>
                    
                    <td> 
                        <?php echo anchor("awsglacier/read/".$row->awsglacier_id,'Read'); ?>
                    </td> 
                </tr> 
                <?php 
            } 
            ?> 
        </tbody> 
    </table> 


</div>
