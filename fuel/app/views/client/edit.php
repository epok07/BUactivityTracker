<h2>Editing <span class='muted'>Client</span></h2>
<br>

<?php echo render('client/_form'); ?>
<p>
	<?php echo Html::anchor('client/view/'.$client->id, 'View'); ?> |
	<?php echo Html::anchor('client', 'Back'); ?></p>
