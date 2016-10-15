<h2>Viewing <span class='muted'>#<?php echo $operation->id; ?></span></h2>

<p>
	<strong>Summary:</strong>
	<?php echo $operation->summary; ?></p>
<p>
	<strong>Order id:</strong>
	<?php echo $operation->order_id; ?></p>
<p>
	<strong>Owner id:</strong>
	<?php echo $operation->owner_id; ?></p>
<p>
	<strong>Product id:</strong>
	<?php echo $operation->product_id; ?></p>
<p>
	<strong>Quantity:</strong>
	<?php echo $operation->quantity; ?></p>
<p>
	<strong>Unit id:</strong>
	<?php echo $operation->unit_id; ?></p>
<p>
	<strong>Packagetype id:</strong>
	<?php echo $operation->packagetype_id; ?></p>

<?php echo Html::anchor('operation/edit/'.$operation->id, 'Edit'); ?> |
<?php echo Html::anchor('operation', 'Back'); ?>