<div class="table-responsive">
    <table class="table table-striped thead-dark">
        <tr>
            <th>Gene Locus</th>
            <td><?php echo $genemodel; ?></td>
            <th>Gene Name</th>
            <td><?php echo $genename; ?></td>
        </tr>
        <tr>
            <th>Ut name</th>
            <td><?php echo $utname; ?></td>
             <th>Tube Label</th>
            <td><?php echo $label; ?></td>
        </tr>
        <tr>
            <th>Building</th>
            <td><?php echo $building; ?></td>
            <th>Freezer</th>
            <td><?php echo $freezer; ?></td>
        </tr>
        <tr>
            <th>Shelf</th>
            <td><?php echo $shelf; ?></td>
            <th>Rack</th>
            <td><?php echo $rack; ?></td>
        </tr>
        <tr></tr>
        <tr>
            <th>Plate</th>
            <td><?php echo $plate; ?></td>
            <th>Position</th>
            <td><?php echo $position; ?></td>
        </tr>
        <tr>
            <th>Vector</th>
            <td><?php echo $vector; ?></td>
            <th>Material type</th>
            <td><?php echo $genetictype; ?></td>
        </tr>
        <tr>
            <th>Antibiotic</th>
            <td><?php echo $antibiotic; ?></td>
            <th>Bacteria</th>
            <td><?php echo $bacteria; ?></td>
        </tr>
        <tr>
            <th>Creator</th>
            <td><?php echo $creator; ?></td>
        </tr>
                <tr>
            <th></th>
            <td><a href="<?php echo site_url('databases/tfome') ?>" class="btn btn-primary">Back</a></td>
        </tr>

    </table>
</div>
