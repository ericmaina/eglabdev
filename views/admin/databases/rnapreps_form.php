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
        <h2 style="margin-top:0px">Rnapreps <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Type <?php echo form_error('type') ?></label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="<?php echo $type; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Quantity <?php echo form_error('quantity') ?></label>
            <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity" value="<?php echo $quantity; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Volume <?php echo form_error('volume') ?></label>
            <input type="text" class="form-control" name="volume" id="volume" placeholder="Volume" value="<?php echo $volume; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Concentration <?php echo form_error('concentration') ?></label>
            <input type="text" class="form-control" name="concentration" id="concentration" placeholder="Concentration" value="<?php echo $concentration; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Total Rna <?php echo form_error('total_rna') ?></label>
            <input type="text" class="form-control" name="total_rna" id="total_rna" placeholder="Total Rna" value="<?php echo $total_rna; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Rna Type <?php echo form_error('rna_type') ?></label>
            <input type="text" class="form-control" name="rna_type" id="rna_type" placeholder="Rna Type" value="<?php echo $rna_type; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Date <?php echo form_error('date') ?></label>
            <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Made <?php echo form_error('made') ?></label>
            <input type="text" class="form-control" name="made" id="made" placeholder="Made" value="<?php echo $made; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('rnapreps') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>