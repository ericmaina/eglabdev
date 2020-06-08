<div class="table-responsive">
    <table class="table table-striped thead-dark">
        <tr>
            <th>Gene Locus</th>
            <td><?php echo $genemodel;?></td>
            <th>Gene Name</th>
            <td><?php echo $genename; ?></td>
        </tr>
        <tr>
            <th>Vector</th>
            <td><?php echo $vector; ?></td>
            <th>Construct</th>
            <td><?php echo $construct; ?></td>
        </tr>
        <tr>
            <th>Material</th>
            <td><?php echo $material;?></td>
            <th>Host</th>
            <td><?php echo $host; ?></td>
        </tr>
        <tr>
            <th>Tube Label</th>
            <td><?php echo $label;?></td>
            <th>Bacteria</th>
            <td><?php echo $host; ?></td>
        </tr>
        <tr>
            <th>Antibiotic</th>
            <td><?php echo $antibiotic;?></td>
            <th>Creator</th>
            <td><?php echo $creator; ?></td>
        </tr>
        <tr>
            <th>Plate</th>
            <td><?php echo $plate; ?></td>
            <td></td>
        </tr>

        <tr>
            <th></th>
            <td><a href="<?php echo site_url('databases/transcient') ?>" class="btn btn-primary">Back</a></td>
        </tr>
    </table>
</div>
