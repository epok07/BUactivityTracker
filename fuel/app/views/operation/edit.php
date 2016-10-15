<h2>Editing <span class='muted'>Operation</span></h2>
<br>

<?php echo render('operation/_form'); ?>
<p>
	<?php echo Html::anchor('operation/view/'.$operation->id, 'View'); ?> |
	<?php echo Html::anchor('operation', 'Back'); ?></p>
