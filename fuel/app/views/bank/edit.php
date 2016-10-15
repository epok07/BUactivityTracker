<h2>Editing <span class='muted'>Bank</span></h2>
<br>

<?php echo render('bank/_form'); ?>
<p>
	<?php echo Html::anchor('bank/view/'.$bank->id, 'View'); ?> |
	<?php echo Html::anchor('bank', 'Back'); ?></p>
