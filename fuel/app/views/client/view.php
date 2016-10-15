<h2>Viewing <span class='muted'>#<?php echo $client->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $client->name; ?></p>
<p>
	<strong>City:</strong>
	<?php echo $client->city; ?></p>
<p>
	<strong>Country:</strong>
	<?php echo $client->country; ?></p>
<p>
	<strong>Address:</strong>
	<?php echo $client->address; ?></p>

<?php echo Html::anchor('client/edit/'.$client->id, 'Edit'); ?> |
<?php echo Html::anchor('client', 'Back'); ?>