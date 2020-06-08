<div class="table-responsive">
    <table class="table table-striped thead-dark">
        <tr>
            <th>Gene Locus</th>
            <td><?php echo $genemodel;?></td>
            <th>Gene Name</th>
            <td><?php echo $genename; ?></td>
        </tr>
        <tr>
            <th>Transcript</th>
            <td><?php echo $transcript; ?></td>
            <th>Short Name</th>
            <td><?php echo $shortname; ?></td>
        </tr>
        <tr>
            <th>Material</th>
            <td><?php echo $material;?></td>
            <th>vector</th>
            <td><?php echo $vector; ?></td>
        </tr>
        <tr>
            <th>Drug</th>
            <td><?php echo $drug;?></td>
            <th>Freezer</th>
            <td><?php echo $freezer; ?></td>
        </tr>
        <tr>
            <th>Label</th>
            <td><?php echo $label;?></td>
            <th>Plate</th>
            <td><?php echo $plate; ?></td>
        </tr>
        <tr>
            <th>Chromosome</th>
            <td><?php echo $chromosome; ?></td>
            <th>Strand</th>
            <td><?php echo $strand; ?></td>
        </tr>
        
        <tr>
            <th>Start</th>
            <td><?php echo $start_position; ?></td>
            <th>Stop</th>
            <td><?php echo $stop_position; ?></td>
        </tr>
        
        <tr>
            <th>Foward Prime</th>
            <td><?php echo $forwardprimer; ?></td>
            <th>Reverse Prime</th>
            <td><?php echo $reverseprimer; ?></td>
        </tr>
               <tr>
            
       
    </table>
    
	<div class="form-group">
	  <label for="pcrproduct">PCR product</label>
	  <textarea class="form-control rounded-0" id="pcrproduct" rows="5"><?php echo $pcrproduct; ?></textarea>
	</div>
    
    <div>
     <a href="<?php echo site_url('databases/promoter') ?>" class="btn btn-primary">Back</a>
	</div>
</div>
