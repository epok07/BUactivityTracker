<h2>Viewing <span class='muted'>#<?php echo $delivery->id; ?></span></h2>

<p>
	<strong>Hash:</strong>
	<?php echo $delivery->hash; ?></p>
<p>
	<strong>Client id:</strong>
	<?php echo $delivery->client_id; ?></p>
<p>
	<strong>Order id:</strong>
	<?php echo $delivery->order_id; ?></p>
<p>
	<strong>Issuer id:</strong>
	<?php echo $delivery->issuer_id; ?></p>
<p>
	<strong>Status id:</strong>
	<?php echo $delivery->status_id; ?></p>

<?php echo Html::anchor('delivery/edit/'.$delivery->id, 'Edit'); ?> |
<?php echo Html::anchor('delivery', 'Back'); ?>