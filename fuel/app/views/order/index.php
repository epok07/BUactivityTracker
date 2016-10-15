<h2>Listing <span class='muted'>Orders</span></h2>
<br>
<?php if ($orders): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Hash</th>
			<th>Client id</th>
			<th>Issuer id</th>
			<th>Status id</th>
			<th>Company id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($orders as $item): ?>		<tr>

			<td><?php echo $item->hash; ?></td>
			<td><?php echo $item->client_id; ?></td>
			<td><?php echo $item->issuer_id; ?></td>
			<td><?php echo $item->status_id; ?></td>
			<td><?php echo $item->company_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('order/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('order/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('order/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Orders.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('order/create', 'Add new Order', array('class' => 'btn btn-success')); ?>

</p>
