<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "index" ); ?>'><?php echo Html::anchor('demo/index','Index');?></li>
	<li class='<?php echo Arr::get($subnav, "test" ); ?>'><?php echo Html::anchor('demo/test','Test');?></li>
	<li class='<?php echo Arr::get($subnav, "dummy" ); ?>'><?php echo Html::anchor('demo/dummy','Dummy');?></li>

</ul>
<p>Test</p>