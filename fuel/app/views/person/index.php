<h2>Listing <span class='muted'>People</span></h2>
<br>
<?php if ($people): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Firtname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Tel</th>
			<th>Client id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($people as $item): ?>		<tr>

			<td><?php echo $item->firtname; ?></td>
			<td><?php echo $item->lastname; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->tel; ?></td>
			<td><?php echo $item->client_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('person/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('person/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('person/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No People.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('person/create', 'Add new Person', array('class' => 'btn btn-success')); ?>

</p>
