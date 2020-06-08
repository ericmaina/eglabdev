<div class="table-responsive">
    <table class="table table-striped thead-dark">
        <tr>
            <th>Gene Locus</th>
            <td><?php echo $genemodel;?></td>
            <th>Gene Name</th>
            <td><?php echo $genename; ?></td>
        </tr>
        <tr>
            <th>TF Name</th>
            <td><?php echo $tfname; ?></td>
            <th>TF Model</th>
            <td><?php echo $tfmodel; ?></td>
        </tr>
        <tr>
            <th>Material</th>
            <td><?php echo $material;?></td>
            <th>Concenttration(3at)</th>
            <td><?php echo $concentration; ?></td>
        </tr>
        <tr>
            <th>Marker</th>
            <td><?php echo $marker;?></td>
            <th>Host</th>
            <td><?php echo $host; ?></td>
        </tr>
        <tr>
            <th>Label</th>
            <td><?php echo $label;?></td>
            <th>Shelf</th>
            <td><?php echo $shelf; ?></td>
        </tr>
        <tr>
            <th>PromoterID</th>
            <td><?php echo $promoterid; ?></td>
            <th>Plate</th>
            <td><?php echo $plate; ?></td>
        </tr>

        <tr>
            <th></th>
            <td><a href="<?php echo site_url('databases/yeastone') ?>" class="btn btn-primary">Back</a></td>
        </tr>
    </table>
</div>
