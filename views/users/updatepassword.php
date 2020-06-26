<div class="row justify-content-center">
    <div class="col-6">
        
        <?php echo form_open('users/updatePassword', array('id' => 'passwordForm'))?>
        <div class="form-group">
			<?php echo form_input(['name' => 'user_id', 'class' => 'form-control', 'placeholder' => 'User ID', 'value'=>set_value('name', $user->user_id)]); ?>
		</div>
         <div class="form-group">
            <label for="Firstname" class="control-label col-xs-2">First Name</label>
            <div class="col-xs-10">
                <p class="form-control-static">setname</p>
            </div>
        </div>
               
            <div class="form-group">
                <input type="password" name="newpass" id="newpass" class="form-control" placeholder="New Password" />
                <?php echo form_error('newpass', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
                <input type="password" name="passconf" id="passconf" class="form-control" placeholder="Confirm Password" />
                <?php echo form_error('passconf', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Change Password</button>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>
