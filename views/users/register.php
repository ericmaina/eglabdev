<div class="row">
	<div class="col-md-8 col-md-offset-8">
		<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
		
		<?php echo form_open('users/register','class="well" id="register"'); ?>
		
	    <div class="header">
		<h3 class="form-header text-center">Create user</h3>
		</div>
		<?php if($this->session->flashdata('message')) { ?>
            <div class="alert alert alert-success">
                <?php echo $this->session->flashdata('message')?>
            </div>
        <?php } ?>
		
					<div class="form-group">
					 <label>First Name</label>
					 <input type="text" class="form-control" name="firstname" placeholder="First Name">
				   </div>
				
				
				
				   <div class="form-group">
					 <label>Last Name</label>
					 <input type="text" name="lastname" class="form-control" placeholder="Last Name">
				   </div>
				 
				 
				 
				 
				 
		
		   
		   <div class="form-group">
		   	 <label>Email</label>
		   	 <input type="text" name="email" class="form-control" placeholder="Email">
		   </div>
		   
		   <div class="form-group">
		   	 <label>Password</label>
		   	 <input type="password" class="form-control" name="password" placeholder="Password">
		   </div>
		   
		   <div class="form-group">
		   	 <label>Confirm Password</label>
		   	 <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
		   </div>
		   
		   
					<div class="form-group">
						<label>Select User Level</label>
				     		<select class="form-control" id="level" name="level">
								<option value="user">User</option>
								<option value="admin">Administrator</option>
							</select>
						</div>
				
		   
		   <button type="submit" class="btn btn-primary">Register account</button>
		<?php echo form_close() ?>
	</div>
</div>
