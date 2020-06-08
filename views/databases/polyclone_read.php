
<h3>Polyclone Record</h3>

<div class="table-responsive">
    <table class="table table-sm table-striped thead-dark">
        <tr>
            <th>Antigen</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Sample Type</th>
            <td><?php echo $category; ?></td>
        </tr>
        <tr>
            <th>Date</th>
            <td><?php echo $date; ?></td>
        </tr>
        <tr>
            <th>Volume</th>
            <td><?php echo $volume; ?></td>
        </tr>
        <tr>
            <th>Lot</th>
            <td><?php echo $lot; ?></td>
        </tr>
        <tr>
            <th>Sequence</th>
            <td><?php echo $sequence; ?></td>
        </tr>
        <tr>
            <th>Storage</th>
            <td><?php echo $storage; ?></td>
        </tr>
        <tr>
            <th>Box</th>
            <td><?php echo $box; ?></td>
        </tr>
        <tr>
            <th>Company</th>
            <td><?php echo $companyname; ?></td>
        </tr>
        <tr>
            <th></th>
            <td><a href="<?php echo site_url('databases/polyclone') ?>" class="btn btn-primary">Back</a></td>
        </tr>
    </table>
</div>

