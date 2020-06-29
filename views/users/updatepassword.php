<div class="row justify-content-center">
    <div class="col-6">
        
        <?php echo form_open('users/updatePassword', array('id' => 'passwordForm'))?>
        <div class="form-group">
			 <input class="form-control" placeholder="User ID" name="user_id" type="hidden" value="<?= $user->user_id ?>">
		</div>
         <div class="form-group">
            <label for="Firstname" class="control-label">First Name:</label>
            <div class="form-control">
                <p class="form-control-static"><?= $user->firstname ?></p>
            </div>
            <label for="Firstname" class="control-label">Last Name:</label>
            <div class="form-control">
                <p class="form-control-static"><?= $user->lastname ?></p>
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
                <button type="button" onclick="location.href='<?php echo site_url('users');?>'" class="btn btn-primary">Go Back</button>

            </div>
        <?php echo form_close(); ?>
    </div>
</div>
