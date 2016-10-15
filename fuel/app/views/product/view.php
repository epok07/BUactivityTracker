<h2>Viewing <span class='muted'>#<?php echo $product->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $product->name; ?></p>
<p>
	<strong>Price:</strong>
	<?php echo $product->price; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $product->description; ?></p>
<p>
	<strong>Metadata:</strong>
	<?php echo $product->metadata; ?></p>

<?php echo Html::anchor('product/edit/'.$product->id, 'Edit'); ?> |
<?php echo Html::anchor('product', 'Back'); ?>