<h3>Mutant Record</h3>

<div class="table-responsive">
    <table class="table table-striped thead-dark">
        <tr>
            <th>Locus</th>
            <td><?php echo $locus; ?></td>
        </tr>
        <tr>
            <th>Gene product</th>
            <td><?php echo $geneproduct; ?></td>
        </tr>
        <tr>
            <th>Synonym</th>
            <td><?php echo $synonym; ?></td>
        </tr>
        <tr>
            <th>Mutant Name</th>
            <td><?php echo $mutantname; ?></td>
        </tr>
        <tr>
            <th>Seed Collection</th>
            <td><?php echo $seedcollection; ?></td>
        </tr>
        <tr>
            <th>Insertion Site</th>
            <td><?php echo $insertionsite; ?></td>
        </tr>
        <tr>
            <th>Stock Number</th>
            <td><?php echo $stocknumber; ?></td>
        </tr>
        <tr>
            <th>Comments</th>
            <td><?php echo $comments; ?></td>
        </tr>
        <tr>
            <th>Tube Label</th>
            <td><?php echo $tubelabel; ?></td>
        </tr>
        <tr>
            <th>Box</th>
            <td><?php echo $box; ?></td>
        </tr>
        <tr>
            <th>Position</th>
            <td><?php echo $position; ?></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="<?php echo site_url('databases/mutants') ?>" class="btn btn-primary">Back</a></td>
        </tr>
    </table>
</div>
