<div class="row">
<div class="col-sm-8">
		<h1><?php echo $title ?></h1>
		<?php if($this->session->flashdata('message')) { ?>
			<div class="alert alert-danger">
				<?php echo $this->session->flashdata('message')?>
			</div>
		<?php } ?>
	</div>
</div>
<div class="row justify-content-center">
	  <div class="col-sm-8">
		<?php echo form_open('users/login', array('id' => 'loginForm','class'=>'form-horizontal')) ?>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-6">
				<input type="text" name="email" id="email" class="form-control" placeholder="Email" />
				<?php echo form_error('email', '<div class="error">', '</div>') ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Password:</label>
				<div class="col-sm-6">
				<input type="password" name="password" id="password" class="form-control" placeholder="Password" />
				<?php echo form_error('password', '<div class="error">', '</div>') ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-6">
				<input type="submit" name="submit" value="Login" class="btn btn-primary"/>
				<a href="<?=site_url('home');?>" class="btn btn-warning">Back</a>
				</div>
			</div>
		<?php echo form_close(); ?>
		
	</div>
</div>

<div class="center">
	  <div class="col-sm-offset-2 col-sm-6">
		 <p class="small center"> Need access ? contact the lab manager </p>
	</div>
</div>
