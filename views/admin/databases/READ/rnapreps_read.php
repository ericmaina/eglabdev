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
        <h2 style="margin-top:0px">Rnapreps Read</h2>
        <table class="table">
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Type</td><td><?php echo $type; ?></td></tr>
	    <tr><td>Quantity</td><td><?php echo $quantity; ?></td></tr>
	    <tr><td>Volume</td><td><?php echo $volume; ?></td></tr>
	    <tr><td>Concentration</td><td><?php echo $concentration; ?></td></tr>
	    <tr><td>Total Rna</td><td><?php echo $total_rna; ?></td></tr>
	    <tr><td>Rna Type</td><td><?php echo $rna_type; ?></td></tr>
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Made</td><td><?php echo $made; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('rnapreps') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>