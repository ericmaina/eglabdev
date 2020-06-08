<h3>RNA prep record</h3>

<table class="table table-striped thead-dark">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Type</td>
        <td><?php echo $type; ?></td>
    </tr>
    <tr>
        <td>Quantity</td>
        <td><?php echo $quantity; ?></td>
    </tr>
    <tr>
        <td>Volume</td>
        <td><?php echo $volume; ?></td>
    </tr>
    <tr>
        <td>Concentration</td>
        <td><?php echo $concentration; ?></td>
    </tr>
    <tr>
        <td>Total RNA</td>
        <td><?php echo $total_rna; ?></td>
    </tr>
    <tr>
        <td>RNA Type</td>
        <td><?php echo $rna_type; ?></td>
    </tr>
    <tr>
        <td>Date</td>
        <td><?php echo $date; ?></td>
    </tr>
    <tr>
        <td>Made</td>
        <td><?php echo $made; ?></td>
    </tr>
    <tr>
        <td></td>
        <td><a href="<?php echo site_url('databases/rnapreps') ?>" class="btn btn-primary">Back</a></td>
    </tr>
</table>
