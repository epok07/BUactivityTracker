<h2>Viewing <span class='muted'>#<?php echo $order->id; ?></span></h2>

<p>
	<strong>Hash:</strong>
	<?php echo $order->hash; ?></p>
<p>
	<strong>Client id:</strong>
	<?php echo $order->client_id; ?></p>
<p>
	<strong>Issuer id:</strong>
	<?php echo $order->issuer_id; ?></p>
<p>
	<strong>Status id:</strong>
	<?php echo $order->status_id; ?></p>
<p>
	<strong>Company id:</strong>
	<?php echo $order->company_id; ?></p>

<?php echo Html::anchor('order/edit/'.$order->id, 'Edit'); ?> |
<?php echo Html::anchor('order', 'Back'); ?>