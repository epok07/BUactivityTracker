<h2>Viewing <span class='muted'>#<?php echo $paymentcategory->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $paymentcategory->name; ?></p>

<?php echo Html::anchor('paymentcategory/edit/'.$paymentcategory->id, 'Edit'); ?> |
<?php echo Html::anchor('paymentcategory', 'Back'); ?>