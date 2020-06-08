
<?php if((isset($error))||(validation_errors())){ ?>
<div class="alert alert-danger">
	     <button type="button" class="close" data-dismiss="alert">&times;</button>

     <?php echo validation_errors();
      if(isset($error)){print $error;}?>
</div>
<?php } ?>

<h3>Upload picture </h3>

<?php echo form_open_multipart('gallery/photo/file_data');?>

  <div class="form-group">
    <label for="title">Picture Title*:</label>
    <input type="text" class="form-control" name="title" value="<?= set_value('title'); ?>" id="title">
  </div>
  <div class="form-group">
    <label for="category">Picture Description:</label>
    <textarea name="category" class="form-control" id="category"><?= set_value('category'); ?></textarea>
  </div>
  <div class="form-group">
    <label for="pic_file">Select Image*:</label>
    <input type="file" name="pic_file" class="form-control"  id="pic_file">
  </div>
  <a href="<?=base_url('gallery/photo');?>" class="btn btn-warning">Back</a>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
