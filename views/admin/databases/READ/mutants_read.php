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
        <h2 style="margin-top:0px">Mutants Read</h2>
        <table class="table">
	    <tr><td>Locus</td><td><?php echo $locus; ?></td></tr>
	    <tr><td>Geneproduct</td><td><?php echo $geneproduct; ?></td></tr>
	    <tr><td>Synonym</td><td><?php echo $synonym; ?></td></tr>
	    <tr><td>Mutantname</td><td><?php echo $mutantname; ?></td></tr>
	    <tr><td>Seedcollection</td><td><?php echo $seedcollection; ?></td></tr>
	    <tr><td>Insertionsite</td><td><?php echo $insertionsite; ?></td></tr>
	    <tr><td>Stocknumber</td><td><?php echo $stocknumber; ?></td></tr>
	    <tr><td>Comments</td><td><?php echo $comments; ?></td></tr>
	    <tr><td>Tubelabel</td><td><?php echo $tubelabel; ?></td></tr>
	    <tr><td>Box</td><td><?php echo $box; ?></td></tr>
	    <tr><td>Position</td><td><?php echo $position; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('mutants') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>