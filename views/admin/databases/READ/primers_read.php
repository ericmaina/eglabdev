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
        <h2 style="margin-top:0px">Primers Read</h2>
        <table class="table">
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Ordered</td><td><?php echo $ordered; ?></td></tr>
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Purpose</td><td><?php echo $purpose; ?></td></tr>
	    <tr><td>Restriction</td><td><?php echo $restriction; ?></td></tr>
	    <tr><td>Sequence</td><td><?php echo $sequence; ?></td></tr>
	    <tr><td>Year</td><td><?php echo $year; ?></td></tr>
	    <tr><td>Box</td><td><?php echo $box; ?></td></tr>
	    <tr><td>Comments</td><td><?php echo $comments; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('primers') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>