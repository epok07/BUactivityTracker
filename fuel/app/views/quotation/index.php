<h2>Listing <span class='muted'>Quotations</span></h2>
<br>
<?php if ($quotations): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Price</th>
			<th>Product id</th>
			<th>Owner id</th>
			<th>Company id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($quotations as $item): ?>		<tr>

			<td><?php echo $item->price; ?></td>
			<td><?php echo $item->product_id; ?></td>
			<td><?php echo $item->owner_id; ?></td>
			<td><?php echo $item->company_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('quotation/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('quotation/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('quotation/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Quotations.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('quotation/create', 'Add new Quotation', array('class' => 'btn btn-success')); ?>

</p>
