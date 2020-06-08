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
        <h2 style="margin-top:0px">Inventory <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Itemname <?php echo form_error('itemname') ?></label>
            <input type="text" class="form-control" name="itemname" id="itemname" placeholder="Itemname" value="<?php echo $itemname; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Vendor <?php echo form_error('vendor') ?></label>
            <input type="text" class="form-control" name="vendor" id="vendor" placeholder="Vendor" value="<?php echo $vendor; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Catalognumber <?php echo form_error('catalognumber') ?></label>
            <input type="text" class="form-control" name="catalognumber" id="catalognumber" placeholder="Catalognumber" value="<?php echo $catalognumber; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Location <?php echo form_error('location') ?></label>
            <input type="text" class="form-control" name="location" id="location" placeholder="Location" value="<?php echo $location; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sublocation <?php echo form_error('sublocation') ?></label>
            <input type="text" class="form-control" name="sublocation" id="sublocation" placeholder="Sublocation" value="<?php echo $sublocation; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Dateopened <?php echo form_error('dateopened') ?></label>
            <input type="text" class="form-control" name="dateopened" id="dateopened" placeholder="Dateopened" value="<?php echo $dateopened; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Unitsize <?php echo form_error('unitsize') ?></label>
            <input type="text" class="form-control" name="unitsize" id="unitsize" placeholder="Unitsize" value="<?php echo $unitsize; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Price <?php echo form_error('price') ?></label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="<?php echo $price; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('inventory') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>