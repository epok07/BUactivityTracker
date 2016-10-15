<h2>Listing <span class='muted'>Banks</span></h2>
<br>
<?php if ($banks): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Contact</th>
			<th>Address</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($banks as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->contact; ?></td>
			<td><?php echo $item->address; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('bank/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('bank/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('bank/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Banks.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('bank/create', 'Add new Bank', array('class' => 'btn btn-success')); ?>

</p>
