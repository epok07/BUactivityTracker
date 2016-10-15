<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Hash', 'hash', array('class'=>'control-label')); ?>

				<?php echo Form::input('hash', Input::post('hash', isset($delivery) ? $delivery->hash : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hash')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Client id', 'client_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('client_id', Input::post('client_id', isset($delivery) ? $delivery->client_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Client id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Order id', 'order_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('order_id', Input::post('order_id', isset($delivery) ? $delivery->order_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Order id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Issuer id', 'issuer_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('issuer_id', Input::post('issuer_id', isset($delivery) ? $delivery->issuer_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Issuer id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Status id', 'status_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('status_id', Input::post('status_id', isset($delivery) ? $delivery->status_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Status id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>