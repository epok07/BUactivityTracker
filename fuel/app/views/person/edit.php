<h2>Editing <span class='muted'>Person</span></h2>
<br>

<?php echo render('person/_form'); ?>
<p>
	<?php echo Html::anchor('person/view/'.$person->id, 'View'); ?> |
	<?php echo Html::anchor('person', 'Back'); ?></p>
