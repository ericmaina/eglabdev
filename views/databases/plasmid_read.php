<h3>Plasmid Record</h3>

<div class="table-responsive">
    <table class="table table-striped thead-dark">
        <tr>
            <th>Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Date</th>
            <td><?php echo $date; ?></td>
        </tr>
        <tr>
            <th>Prepared</th>
            <td><?php echo $prepared; ?></td>
        </tr>
        <tr>
            <th>Concentration</th>
            <td><?php echo $concentration; ?></td>
        </tr>
        <tr>
            <th>Markers</th>
            <td><?php echo $markers; ?></td>
        </tr>
        <tr>
            <th>Vector</th>
            <td><?php echo $vector; ?></td>
        </tr>
        <tr>
            <th>Inserts</th>
            <td><?php echo $inserts; ?></td>
        </tr>
        <tr>
            <th>Size</th>
            <td><?php echo $size; ?></td>
        </tr>
        <tr>
            <th>Box</th>
            <td><?php echo $box; ?></td>
        </tr>
        <tr>
            <th>Comments</th>
            <td><class="form-control" rows="5" ><?php echo $comments; ?> </textarea></td>
        </tr>
        <tr>
            <th>PCR Generated</th>
            <td><?php echo $pcrgenerated; ?></td>
        </tr>
        <tr>
            <th>Primers</th>
            <td><?php echo $primers; ?></td>
        </tr>
        <tr>
            <th>Enzymes</th>
            <td><?php echo $enzymes; ?></td>
        </tr>
        <tr>
            <th></th>
            <td><a href="<?php echo site_url('databases/plasmid') ?>" class="btn btn-primary">Back</a></td>
        </tr>
    </table>
</div>
