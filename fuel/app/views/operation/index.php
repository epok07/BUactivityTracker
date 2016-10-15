<h2>Listing <span class='muted'>Operations</span></h2>
<br>
<?php if ($operations): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Summary</th>
			<th>Order id</th>
			<th>Owner id</th>
			<th>Product id</th>
			<th>Quantity</th>
			<th>Unit id</th>
			<th>Packagetype id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($operations as $item): ?>		<tr>

			<td><?php echo $item->summary; ?></td>
			<td><?php echo $item->order_id; ?></td>
			<td><?php echo $item->owner_id; ?></td>
			<td><?php echo $item->product_id; ?></td>
			<td><?php echo $item->quantity; ?></td>
			<td><?php echo $item->unit_id; ?></td>
			<td><?php echo $item->packagetype_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('operation/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('operation/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('operation/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Operations.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('operation/create', 'Add new Operation', array('class' => 'btn btn-success')); ?>

</p>
