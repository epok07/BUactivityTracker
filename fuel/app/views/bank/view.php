<h2>Viewing <span class='muted'>#<?php echo $bank->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $bank->name; ?></p>
<p>
	<strong>Contact:</strong>
	<?php echo $bank->contact; ?></p>
<p>
	<strong>Address:</strong>
	<?php echo $bank->address; ?></p>

<?php echo Html::anchor('bank/edit/'.$bank->id, 'Edit'); ?> |
<?php echo Html::anchor('bank', 'Back'); ?>