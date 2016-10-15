<h2>Editing <span class='muted'>Status</span></h2>
<br>

<?php echo render('status/_form'); ?>
<p>
	<?php echo Html::anchor('status/view/'.$status->id, 'View'); ?> |
	<?php echo Html::anchor('status', 'Back'); ?></p>
