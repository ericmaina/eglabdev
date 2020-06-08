<!doctype html>
<html>
    <head>
        <title>Antibodies form</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Antibodies <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Date <?php echo form_error('date') ?></label>
            <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Antigen <?php echo form_error('antigen') ?></label>
            <input type="text" class="form-control" name="antigen" id="antigen" placeholder="Antigen" value="<?php echo $antigen; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Dilution <?php echo form_error('dilution') ?></label>
            <input type="text" class="form-control" name="dilution" id="dilution" placeholder="Dilution" value="<?php echo $dilution; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Storage <?php echo form_error('storage') ?></label>
            <input type="text" class="form-control" name="storage" id="storage" placeholder="Storage" value="<?php echo $storage; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Comments <?php echo form_error('comments') ?></label>
            <input type="text" class="form-control" name="comments" id="comments" placeholder="Comments" value="<?php echo $comments; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('antibodies_admin') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>
