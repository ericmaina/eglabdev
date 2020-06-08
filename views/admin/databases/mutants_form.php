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
        <h2 style="margin-top:0px">Mutants <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Locus <?php echo form_error('locus') ?></label>
            <input type="text" class="form-control" name="locus" id="locus" placeholder="Locus" value="<?php echo $locus; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Geneproduct <?php echo form_error('geneproduct') ?></label>
            <input type="text" class="form-control" name="geneproduct" id="geneproduct" placeholder="Geneproduct" value="<?php echo $geneproduct; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Synonym <?php echo form_error('synonym') ?></label>
            <input type="text" class="form-control" name="synonym" id="synonym" placeholder="Synonym" value="<?php echo $synonym; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mutantname <?php echo form_error('mutantname') ?></label>
            <input type="text" class="form-control" name="mutantname" id="mutantname" placeholder="Mutantname" value="<?php echo $mutantname; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Seedcollection <?php echo form_error('seedcollection') ?></label>
            <input type="text" class="form-control" name="seedcollection" id="seedcollection" placeholder="Seedcollection" value="<?php echo $seedcollection; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Insertionsite <?php echo form_error('insertionsite') ?></label>
            <input type="text" class="form-control" name="insertionsite" id="insertionsite" placeholder="Insertionsite" value="<?php echo $insertionsite; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Stocknumber <?php echo form_error('stocknumber') ?></label>
            <input type="text" class="form-control" name="stocknumber" id="stocknumber" placeholder="Stocknumber" value="<?php echo $stocknumber; ?>" />
        </div>
	    <div class="form-group">
            <label for="comments">Comments <?php echo form_error('comments') ?></label>
            <textarea class="form-control" rows="3" name="comments" id="comments" placeholder="Comments"><?php echo $comments; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Tubelabel <?php echo form_error('tubelabel') ?></label>
            <input type="text" class="form-control" name="tubelabel" id="tubelabel" placeholder="Tubelabel" value="<?php echo $tubelabel; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Box <?php echo form_error('box') ?></label>
            <input type="text" class="form-control" name="box" id="box" placeholder="Box" value="<?php echo $box; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Position <?php echo form_error('position') ?></label>
            <input type="text" class="form-control" name="position" id="position" placeholder="Position" value="<?php echo $position; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('mutants') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>