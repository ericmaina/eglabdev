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
        <h2 style="margin-top:0px">Strains <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Species <?php echo form_error('species') ?></label>
            <input type="text" class="form-control" name="species" id="species" placeholder="Species" value="<?php echo $species; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Strain <?php echo form_error('strain') ?></label>
            <input type="text" class="form-control" name="strain" id="strain" placeholder="Strain" value="<?php echo $strain; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Constructs <?php echo form_error('constructs') ?></label>
            <input type="text" class="form-control" name="constructs" id="constructs" placeholder="Constructs" value="<?php echo $constructs; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Genes <?php echo form_error('genes') ?></label>
            <input type="text" class="form-control" name="genes" id="genes" placeholder="Genes" value="<?php echo $genes; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Plasmid <?php echo form_error('plasmid') ?></label>
            <input type="text" class="form-control" name="plasmid" id="plasmid" placeholder="Plasmid" value="<?php echo $plasmid; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Marker <?php echo form_error('marker') ?></label>
            <input type="text" class="form-control" name="marker" id="marker" placeholder="Marker" value="<?php echo $marker; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Source <?php echo form_error('source') ?></label>
            <input type="text" class="form-control" name="source" id="source" placeholder="Source" value="<?php echo $source; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Comments <?php echo form_error('comments') ?></label>
            <input type="text" class="form-control" name="comments" id="comments" placeholder="Comments" value="<?php echo $comments; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('strains') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>