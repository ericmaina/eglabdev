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
        <h2 style="margin-top:0px">Vectors <?php echo $button ?></h2>
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
            <label for="varchar">Concentration <?php echo form_error('concentration') ?></label>
            <input type="text" class="form-control" name="concentration" id="concentration" placeholder="Concentration" value="<?php echo $concentration; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Markers <?php echo form_error('markers') ?></label>
            <input type="text" class="form-control" name="markers" id="markers" placeholder="Markers" value="<?php echo $markers; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Vector <?php echo form_error('vector') ?></label>
            <input type="text" class="form-control" name="vector" id="vector" placeholder="Vector" value="<?php echo $vector; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Inserts <?php echo form_error('inserts') ?></label>
            <input type="text" class="form-control" name="inserts" id="inserts" placeholder="Inserts" value="<?php echo $inserts; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Size <?php echo form_error('size') ?></label>
            <input type="text" class="form-control" name="size" id="size" placeholder="Size" value="<?php echo $size; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Box <?php echo form_error('box') ?></label>
            <input type="text" class="form-control" name="box" id="box" placeholder="Box" value="<?php echo $box; ?>" />
        </div>
	    <div class="form-group">
            <label for="reference">Reference <?php echo form_error('reference') ?></label>
            <textarea class="form-control" rows="3" name="reference" id="reference" placeholder="Reference"><?php echo $reference; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="keywords">Keywords <?php echo form_error('keywords') ?></label>
            <textarea class="form-control" rows="3" name="keywords" id="keywords" placeholder="Keywords"><?php echo $keywords; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="comments">Comments <?php echo form_error('comments') ?></label>
            <textarea class="form-control" rows="3" name="comments" id="comments" placeholder="Comments"><?php echo $comments; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Vectormap <?php echo form_error('vectormap') ?></label>
            <input type="text" class="form-control" name="vectormap" id="vectormap" placeholder="Vectormap" value="<?php echo $vectormap; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Modified <?php echo form_error('modified') ?></label>
            <input type="text" class="form-control" name="modified" id="modified" placeholder="Modified" value="<?php echo $modified; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('vectors') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>