<h2>Viewing <span class='muted'>#<?php echo $packagetype->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $packagetype->name; ?></p>
<p>
	<strong>Quantity:</strong>
	<?php echo $packagetype->quantity; ?></p>
<p>
	<strong>Product id:</strong>
	<?php echo $packagetype->product_id; ?></p>
<p>
	<strong>Baseunit id:</strong>
	<?php echo $packagetype->baseunit_id; ?></p>

<?php echo Html::anchor('packagetype/edit/'.$packagetype->id, 'Edit'); ?> |
<?php echo Html::anchor('packagetype', 'Back'); ?>