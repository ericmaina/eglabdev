<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Inventory Read</h2>
        <table class="table">
	    <tr><td>Itemname</td><td><?php echo $itemname; ?></td></tr>
	    <tr><td>Vendor</td><td><?php echo $vendor; ?></td></tr>
	    <tr><td>Catalognumber</td><td><?php echo $catalognumber; ?></td></tr>
	    <tr><td>Location</td><td><?php echo $location; ?></td></tr>
	    <tr><td>Sublocation</td><td><?php echo $sublocation; ?></td></tr>
	    <tr><td>Dateopened</td><td><?php echo $dateopened; ?></td></tr>
	    <tr><td>Unitsize</td><td><?php echo $unitsize; ?></td></tr>
	    <tr><td>Price</td><td><?php echo $price; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('inventory') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>