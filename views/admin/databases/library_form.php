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
        <h2 style="margin-top:0px">Librarydatabase <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Othernames <?php echo form_error('othernames') ?></label>
            <input type="text" class="form-control" name="othernames" id="othernames" placeholder="Othernames" value="<?php echo $othernames; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Species <?php echo form_error('species') ?></label>
            <input type="text" class="form-control" name="species" id="species" placeholder="Species" value="<?php echo $species; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Type <?php echo form_error('type') ?></label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="<?php echo $type; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Vector <?php echo form_error('vector') ?></label>
            <input type="text" class="form-control" name="vector" id="vector" placeholder="Vector" value="<?php echo $vector; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tissue <?php echo form_error('tissue') ?></label>
            <input type="text" class="form-control" name="tissue" id="tissue" placeholder="Tissue" value="<?php echo $tissue; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Source <?php echo form_error('source') ?></label>
            <input type="text" class="form-control" name="source" id="source" placeholder="Source" value="<?php echo $source; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Description <?php echo form_error('description') ?></label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?php echo $description; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Preparedby <?php echo form_error('preparedby') ?></label>
            <input type="text" class="form-control" name="preparedby" id="preparedby" placeholder="Preparedby" value="<?php echo $preparedby; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Date <?php echo form_error('date') ?></label>
            <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Concentration <?php echo form_error('concentration') ?></label>
            <input type="text" class="form-control" name="concentration" id="concentration" placeholder="Concentration" value="<?php echo $concentration; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('librarydatabase') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>