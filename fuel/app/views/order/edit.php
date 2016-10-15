<h2>Editing <span class='muted'>Order</span></h2>
<br>

<?php echo render('order/_form'); ?>
<p>
	<?php echo Html::anchor('order/view/'.$order->id, 'View'); ?> |
	<?php echo Html::anchor('order', 'Back'); ?></p>
