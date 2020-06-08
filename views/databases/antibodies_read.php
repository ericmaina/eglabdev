<h3>Antibody record</h3>

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
            <th>Antigen</th>
            <td><?php echo $antigen; ?></td>
        </tr>
        <tr>
            <th>Dilution</th>
            <td><?php echo $dilution; ?></td>
        </tr>
        <tr>
            <th>Storage</th>
            <td><?php echo $storage; ?></td>
        </tr>
        <tr>
            <th>Comments</th>
            <td><?php echo $comments; ?></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="<?php echo site_url('databases/antibodies') ?>" class="btn btn-primary">Back</a></td>
        </tr>
    </table>
</div>
