<h3>Primer Record</h3>
<div class="table-responsive">
    <table class="table table-striped thead-dark">
        <tr>
            <th>Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Ordered</th>
            <td><?php echo $ordered; ?></td>
        </tr>
        <tr>
            <th>Date</th>
            <td><?php echo $date; ?></td>
        </tr>
        <tr>
            <th>Purpose</th>
            <td><?php echo $purpose; ?></td>
        </tr>
        <tr>
            <th>Restriction</th>
            <td><?php echo $restriction; ?></td>
        </tr>
        <tr>
            <th>Sequence</th>
            <td><?php echo $sequence; ?></td>
        </tr>
        <tr>
            <th>Year</th>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <th>Box</th>
            <td><?php echo $box; ?></td>
        </tr>
        <tr>
            <th>Comments</th>
            <td><?php echo $comments; ?></td>
        </tr>
        <tr>
            <th></th>
            <td><a href="<?php echo site_url('databases/primers') ?>" class="btn btn-primary">Back</a></td>
        </tr>
    </table>
</div>
