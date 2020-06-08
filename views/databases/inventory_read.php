<h3>Inventory record</h3>

<div class="table-responsive">
    <table class="table table-striped thead-dark">
        <tr>
            <th>Item Name</th>
            <td><?php echo $itemname; ?></td>
        </tr>
        <tr>
            <th>Vendor</th>
            <td><?php echo $vendor; ?></td>
        </tr>
        <tr>
            <th>Catalog Number</th>
            <td><?php echo $catalognumber; ?></td>
        </tr>
        <tr>
            <th>Location</th>
            <td><?php echo $location; ?></td>
        </tr>
        <tr>
            <th>Sub Location</th>
            <td><?php echo $sublocation; ?></td>
        </tr>
        <tr>
            <th>Date Opened</th>
            <td><?php echo $dateopened; ?></td>
        </tr>
        <tr>
            <th>Unit size</th>
            <td><?php echo $unitsize; ?></td>
        </tr>
        <tr>
            <th>Price</th>
            <td><?php echo $price; ?></td>
        </tr>

        <tr>
            <td><a href="<?php echo site_url('databases/inventory') ?>" class="btn btn-primary">Back </a></td>
        </tr>
    </table>
</div>
