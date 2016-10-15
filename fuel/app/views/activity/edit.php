<h2>Editing <span class='muted'>Activity</span></h2>
<br>

<?php echo render('activity/_form'); ?>
<p>
	<?php echo Html::anchor('activity/view/'.$activity->id, 'View'); ?> |
	<?php echo Html::anchor('activity', 'Back'); ?></p>
