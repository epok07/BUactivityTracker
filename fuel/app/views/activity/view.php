<h2>Viewing <span class='muted'>#<?php echo $activity->id; ?></span></h2>

<p>
	<strong>User id:</strong>
	<?php echo $activity->user_id; ?></p>
<p>
	<strong>Action:</strong>
	<?php echo $activity->action; ?></p>
<p>
	<strong>Entity:</strong>
	<?php echo $activity->entity; ?></p>
<p>
	<strong>Payload:</strong>
	<?php echo $activity->payload; ?></p>

<?php echo Html::anchor('activity/edit/'.$activity->id, 'Edit'); ?> |
<?php echo Html::anchor('activity', 'Back'); ?>