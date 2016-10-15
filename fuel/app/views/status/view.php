<h2>Viewing <span class='muted'>#<?php echo $status->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $status->name; ?></p>

<?php echo Html::anchor('status/edit/'.$status->id, 'Edit'); ?> |
<?php echo Html::anchor('status', 'Back'); ?>