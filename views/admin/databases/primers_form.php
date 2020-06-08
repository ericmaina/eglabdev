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
        <h2 style="margin-top:0px">Primers <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ordered <?php echo form_error('ordered') ?></label>
            <input type="text" class="form-control" name="ordered" id="ordered" placeholder="Ordered" value="<?php echo $ordered; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Date <?php echo form_error('date') ?></label>
            <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
	    <div class="form-group">
            <label for="purpose">Purpose <?php echo form_error('purpose') ?></label>
            <textarea class="form-control" rows="3" name="purpose" id="purpose" placeholder="Purpose"><?php echo $purpose; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Restriction <?php echo form_error('restriction') ?></label>
            <input type="text" class="form-control" name="restriction" id="restriction" placeholder="Restriction" value="<?php echo $restriction; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sequence <?php echo form_error('sequence') ?></label>
            <input type="text" class="form-control" name="sequence" id="sequence" placeholder="Sequence" value="<?php echo $sequence; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Year <?php echo form_error('year') ?></label>
            <input type="text" class="form-control" name="year" id="year" placeholder="Year" value="<?php echo $year; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Box <?php echo form_error('box') ?></label>
            <input type="text" class="form-control" name="box" id="box" placeholder="Box" value="<?php echo $box; ?>" />
        </div>
	    <div class="form-group">
            <label for="comments">Comments <?php echo form_error('comments') ?></label>
            <textarea class="form-control" rows="3" name="comments" id="comments" placeholder="Comments"><?php echo $comments; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('primers') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>