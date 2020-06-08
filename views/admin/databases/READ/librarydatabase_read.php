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
        <h2 style="margin-top:0px">Librarydatabase Read</h2>
        <table class="table">
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Othernames</td><td><?php echo $othernames; ?></td></tr>
	    <tr><td>Species</td><td><?php echo $species; ?></td></tr>
	    <tr><td>Type</td><td><?php echo $type; ?></td></tr>
	    <tr><td>Vector</td><td><?php echo $vector; ?></td></tr>
	    <tr><td>Tissue</td><td><?php echo $tissue; ?></td></tr>
	    <tr><td>Source</td><td><?php echo $source; ?></td></tr>
	    <tr><td>Description</td><td><?php echo $description; ?></td></tr>
	    <tr><td>Preparedby</td><td><?php echo $preparedby; ?></td></tr>
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Concentration</td><td><?php echo $concentration; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('librarydatabase') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>