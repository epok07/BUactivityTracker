<h2>Viewing <span class='muted'>#<?php echo $company->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $company->title; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $company->description; ?></p>

<?php echo Html::anchor('company/edit/'.$company->id, 'Edit'); ?> |
<?php echo Html::anchor('company', 'Back'); ?>