<h2>Listing <span class='muted'>Packagetypes</span></h2>
<br>
<?php if ($packagetypes): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Product id</th>
			<th>Baseunit id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($packagetypes as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->quantity; ?></td>
			<td><?php echo $item->product_id; ?></td>
			<td><?php echo $item->baseunit_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('packagetype/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('packagetype/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('packagetype/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Packagetypes.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('packagetype/create', 'Add new Packagetype', array('class' => 'btn btn-success')); ?>

</p>
