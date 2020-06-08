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
        <h2 style="margin-top:0px">Vectors Read</h2>
        <table class="table">
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Concentration</td><td><?php echo $concentration; ?></td></tr>
	    <tr><td>Markers</td><td><?php echo $markers; ?></td></tr>
	    <tr><td>Vector</td><td><?php echo $vector; ?></td></tr>
	    <tr><td>Inserts</td><td><?php echo $inserts; ?></td></tr>
	    <tr><td>Size</td><td><?php echo $size; ?></td></tr>
	    <tr><td>Box</td><td><?php echo $box; ?></td></tr>
	    <tr><td>Reference</td><td><?php echo $reference; ?></td></tr>
	    <tr><td>Keywords</td><td><?php echo $keywords; ?></td></tr>
	    <tr><td>Comments</td><td><?php echo $comments; ?></td></tr>
	    <tr><td>Vectormap</td><td><?php echo $vectormap; ?></td></tr>
	    <tr><td>Modified</td><td><?php echo $modified; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('vectors') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>