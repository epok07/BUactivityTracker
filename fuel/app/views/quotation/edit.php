<h2>Editing <span class='muted'>Quotation</span></h2>
<br>

<?php echo render('quotation/_form'); ?>
<p>
	<?php echo Html::anchor('quotation/view/'.$quotation->id, 'View'); ?> |
	<?php echo Html::anchor('quotation', 'Back'); ?></p>
