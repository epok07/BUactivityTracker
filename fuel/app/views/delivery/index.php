<h2>Listing <span class='muted'>Deliveries</span></h2>
<br>
<?php if ($deliveries): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Hash</th>
			<th>Client id</th>
			<th>Order id</th>
			<th>Issuer id</th>
			<th>Status id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($deliveries as $item): ?>		<tr>

			<td><?php echo $item->hash; ?></td>
			<td><?php echo $item->client_id; ?></td>
			<td><?php echo $item->order_id; ?></td>
			<td><?php echo $item->issuer_id; ?></td>
			<td><?php echo $item->status_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('delivery/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('delivery/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('delivery/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Deliveries.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('delivery/create', 'Add new Delivery', array('class' => 'btn btn-success')); ?>

</p>
