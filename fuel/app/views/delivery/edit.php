<h2>Editing <span class='muted'>Delivery</span></h2>
<br>

<?php echo render('delivery/_form'); ?>
<p>
	<?php echo Html::anchor('delivery/view/'.$delivery->id, 'View'); ?> |
	<?php echo Html::anchor('delivery', 'Back'); ?></p>
