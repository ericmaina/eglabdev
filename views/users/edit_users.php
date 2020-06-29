
<h2 class="editTitle">Edit User</h2>

<?php echo form_open('users/saveupdate');
 
    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    
    if($this->session->flashdata('message')) { 
        echo '<div class="alert alert alert-success">';
        echo $this->session->flashdata('message');
        echo  "</div>";
        }
  ?>
	<div id="editForm" class="container">
		<div class="col-md-5">
		    <div class="form-area">  
		        <form role="form">
		        <br style="clear:both">
		                    <h3 style="margin-bottom: 25px; text-align: center;">Edit Form</h3>

		                    <div class="form-group">
								<?php echo form_input(['name' => 'user_id', 'type'=>'hidden' ,'class' => 'form-control', 'placeholder' => 'User ID', 'value'=>set_value('name', $user->user_id)]); ?>
							</div>

		    				<div class="form-group">
								<?php echo form_input(['name' => 'firstname', 'class' => 'form-control', 'placeholder' => 'firstname', 'value'=>set_value('firstname', $user->firstname)]); ?>
							</div>
							<div class="form-group">
								<?php echo form_input(['name' => 'lastname', 'class' => 'form-control', 'placeholder' => 'lastname', 'value'=>set_value('lastname', $user->lastname)]); ?>

							</div>
							<div class="form-group">
								<?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'email', 'value'=>set_value('email', $user->email)]); ?>
							</div>

						 <div class="form-group">
						       <label>Select User Level</label>
				     		     <select class="form-control" id="level" name="level">
								<option value="user">User</option>
								<option value="admin">Administrator</option>
							</select>
						</div>
		            
		        <button type="submit" value="submit" id="edit" class="submit btn btn-primary">Update User</button>
		        <button type="button" onclick="location.href='<?php echo site_url('users');?>'" class="btn btn-primary">Go Back</button>
		        </form>
		    </div>
		</div>
	</div>
<?php echo form_close(); ?>
