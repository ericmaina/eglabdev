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
        <h2 style="margin-top:0px">Antibodies Read</h2>
        <table class="table">
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Antigen</td><td><?php echo $antigen; ?></td></tr>
	    <tr><td>Dilution</td><td><?php echo $dilution; ?></td></tr>
	    <tr><td>Storage</td><td><?php echo $storage; ?></td></tr>
	    <tr><td>Comments</td><td><?php echo $comments; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('antibodies') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>