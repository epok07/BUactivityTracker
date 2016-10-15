<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Summary', 'summary', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('summary', Input::post('summary', isset($operation) ? $operation->summary : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Summary')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Order id', 'order_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('order_id', Input::post('order_id', isset($operation) ? $operation->order_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Order id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Owner id', 'owner_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('owner_id', Input::post('owner_id', isset($operation) ? $operation->owner_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Owner id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Product id', 'product_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('product_id', Input::post('product_id', isset($operation) ? $operation->product_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Product id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Quantity', 'quantity', array('class'=>'control-label')); ?>

				<?php echo Form::input('quantity', Input::post('quantity', isset($operation) ? $operation->quantity : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Quantity')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Unit id', 'unit_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('unit_id', Input::post('unit_id', isset($operation) ? $operation->unit_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Unit id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Packagetype id', 'packagetype_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('packagetype_id', Input::post('packagetype_id', isset($operation) ? $operation->packagetype_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Packagetype id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>