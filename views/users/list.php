<div class="table-responsive">
<?php if($this->session->flashdata('message')) { ?>
            <div class="alert alert alert-success">
                <?php echo $this->session->flashdata('message')?>
            </div>
        <?php } ?>	
	
	
<table class="table table-bordered table-condensed" id="user-list">
 <thead class="thead-dark">
    <tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Status</th>
		<th>Actions</th>
     </tr>
   </thead>
   <tbody>	
	<?php foreach($users as $user){ ?>
	 <tr>
		<td><?php echo $user->firstname; ?></td>
		<td><?php echo $user->lastname; ?></td>
		<td><?php echo $user->email; ?></td>
		<td><?php echo $user->level; ?></td>
		<td>
            <a href="<?php echo site_url('users/edit/'.$user->user_id); ?>" class="btn btn-link btn-sm">Edit</a> 
            <a href="<?php echo site_url('users/editpass/'.$user->user_id); ?>" class="btn btn-link btn-sm">update password</a> 
            <a href="<?php echo site_url('users/delete/'.$user->user_id); ?>" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-link btn-sm">Delete</a>
            
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>
</div>


