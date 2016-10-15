<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($client) ? $client->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('City', 'city', array('class'=>'control-label')); ?>

				<?php echo Form::input('city', Input::post('city', isset($client) ? $client->city : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'City')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Country', 'country', array('class'=>'control-label')); ?>

				<?php echo Form::input('country', Input::post('country', isset($client) ? $client->country : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Country')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($client) ? $client->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>