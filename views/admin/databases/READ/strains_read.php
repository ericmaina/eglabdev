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
        <h2 style="margin-top:0px">Strains Read</h2>
        <table class="table">
	    <tr><td>Species</td><td><?php echo $species; ?></td></tr>
	    <tr><td>Strain</td><td><?php echo $strain; ?></td></tr>
	    <tr><td>Constructs</td><td><?php echo $constructs; ?></td></tr>
	    <tr><td>Genes</td><td><?php echo $genes; ?></td></tr>
	    <tr><td>Plasmid</td><td><?php echo $plasmid; ?></td></tr>
	    <tr><td>Marker</td><td><?php echo $marker; ?></td></tr>
	    <tr><td>Source</td><td><?php echo $source; ?></td></tr>
	    <tr><td>Comments</td><td><?php echo $comments; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('strains') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>