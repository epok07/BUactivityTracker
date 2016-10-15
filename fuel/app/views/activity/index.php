<h2>Listing <span class='muted'>Activities</span></h2>
<br>
<?php if ($activities): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>User id</th>
			<th>Action</th>
			<th>Entity</th>
			<th>Payload</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($activities as $item): ?>		<tr>

			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->action; ?></td>
			<td><?php echo $item->entity; ?></td>
			<td><?php echo $item->payload; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('activity/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('activity/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('activity/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Activities.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('activity/create', 'Add new Activity', array('class' => 'btn btn-success')); ?>

</p>
