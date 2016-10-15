<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($activity) ? $activity->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Action', 'action', array('class'=>'control-label')); ?>

				<?php echo Form::input('action', Input::post('action', isset($activity) ? $activity->action : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Action')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Entity', 'entity', array('class'=>'control-label')); ?>

				<?php echo Form::input('entity', Input::post('entity', isset($activity) ? $activity->entity : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Entity')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Payload', 'payload', array('class'=>'control-label')); ?>

				<?php echo Form::input('payload', Input::post('payload', isset($activity) ? $activity->payload : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Payload')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>