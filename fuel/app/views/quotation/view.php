<h2>Viewing <span class='muted'>#<?php echo $quotation->id; ?></span></h2>

<p>
	<strong>Price:</strong>
	<?php echo $quotation->price; ?></p>
<p>
	<strong>Product id:</strong>
	<?php echo $quotation->product_id; ?></p>
<p>
	<strong>Owner id:</strong>
	<?php echo $quotation->owner_id; ?></p>
<p>
	<strong>Company id:</strong>
	<?php echo $quotation->company_id; ?></p>

<?php echo Html::anchor('quotation/edit/'.$quotation->id, 'Edit'); ?> |
<?php echo Html::anchor('quotation', 'Back'); ?>