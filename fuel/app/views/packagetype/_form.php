<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($packagetype) ? $packagetype->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Quantity', 'quantity', array('class'=>'control-label')); ?>

				<?php echo Form::input('quantity', Input::post('quantity', isset($packagetype) ? $packagetype->quantity : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Quantity')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Product id', 'product_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('product_id', Input::post('product_id', isset($packagetype) ? $packagetype->product_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Product id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Baseunit id', 'baseunit_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('baseunit_id', Input::post('baseunit_id', isset($packagetype) ? $packagetype->baseunit_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Baseunit id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>