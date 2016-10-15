<h2>Viewing <span class='muted'>#<?php echo $person->id; ?></span></h2>

<p>
	<strong>Firtname:</strong>
	<?php echo $person->firtname; ?></p>
<p>
	<strong>Lastname:</strong>
	<?php echo $person->lastname; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $person->email; ?></p>
<p>
	<strong>Tel:</strong>
	<?php echo $person->tel; ?></p>
<p>
	<strong>Client id:</strong>
	<?php echo $person->client_id; ?></p>

<?php echo Html::anchor('person/edit/'.$person->id, 'Edit'); ?> |
<?php echo Html::anchor('person', 'Back'); ?>