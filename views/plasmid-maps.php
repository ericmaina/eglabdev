<div class="table-responsive">
	<table class="table table-bordered table-condensed">
		<thead>
			<tr>
				<th>Plasmid</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($files as $filename):?>	
			<tr>
				 <td><?php echo $filename ?></td>
				 <td><?php echo anchor('plasmidmaps/download/'.$filename,'Download','class="btn-sm btn-success"');?></td> 
			</tr>
			<?php endforeach;?>
		</tbody>
	 </table>    
</div>

