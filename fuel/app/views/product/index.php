<h2>Listing <span class='muted'>Products</span></h2>
<br>
<?php if ($products): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Description</th>
			<th>Metadata</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($products as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->price; ?></td>
			<td><?php echo $item->description; ?></td>
			<td><?php echo $item->metadata; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('product/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('product/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('product/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Products.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('product/create', 'Add new Product', array('class' => 'btn btn-success')); ?>

</p>


<div class="wrapper wrapper-content animated fadeInRight ecommerce">


            <div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="product_name">Product Name</label>
                            <input id="product_name" name="product_name" value="" placeholder="Product Name" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label" for="price">Price</label>
                            <input id="price" name="price" value="" placeholder="Price" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label" for="quantity">Quantity</label>
                            <input id="quantity" name="quantity" value="" placeholder="Quantity" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" selected="">Enabled</option>
                                <option value="0">Disabled</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny tablet breakpoint footable-loaded" data-page-size="15">
                                <thead>
                                <tr>

                                    <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">Product Name<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Model<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="all" style="display: none;" class="footable-sortable">Description<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Price<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone,tablet" style="display: none;" class="footable-sortable">Quantity<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Status<span class="footable-sort-indicator"></span></th>
                                    <th class="text-right footable-visible footable-last-column" data-sort-ignore="true">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                       Example product 1
                                    </td>
                                    <td class="footable-visible">
                                        Model 1
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $50.00
                                    </td>
                                    <td style="display: none;">
                                        1000
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 2
                                    </td>
                                    <td class="footable-visible">
                                        Model 2
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $40.00
                                    </td>
                                    <td style="display: none;">
                                        4300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 3
                                    </td>
                                    <td class="footable-visible">
                                        Model 3
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $22.00
                                    </td>
                                    <td style="display: none;">
                                        300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-danger">Disabled</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 4
                                    </td>
                                    <td class="footable-visible">
                                        Model 4
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $67.00
                                    </td>
                                    <td style="display: none;">
                                        2300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 5
                                    </td>
                                    <td class="footable-visible">
                                        Model 5
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $76.00
                                    </td>
                                    <td style="display: none;">
                                        800
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-warning">Low stock</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 6
                                    </td>
                                    <td class="footable-visible">
                                        Model 6
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $60.00
                                    </td>
                                    <td style="display: none;">
                                        6000
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-danger">Disabled</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 7
                                    </td>
                                    <td class="footable-visible">
                                        Model 7
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $32.00
                                    </td>
                                    <td style="display: none;">
                                        700
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-danger">Disabled</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 8
                                    </td>
                                    <td class="footable-visible">
                                        Model 8
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $86.00
                                    </td>
                                    <td style="display: none;">
                                        5180
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 9
                                    </td>
                                    <td class="footable-visible">
                                        Model 9
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $97.00
                                    </td>
                                    <td style="display: none;">
                                        450
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 10
                                    </td>
                                    <td class="footable-visible">
                                        Model 10
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $43.00
                                    </td>
                                    <td style="display: none;">
                                        7600
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 1
                                    </td>
                                    <td class="footable-visible">
                                        Model 1
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $50.00
                                    </td>
                                    <td style="display: none;">
                                        1000
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 2
                                    </td>
                                    <td class="footable-visible">
                                        Model 2
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $40.00
                                    </td>
                                    <td style="display: none;">
                                        4300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 3
                                    </td>
                                    <td class="footable-visible">
                                        Model 3
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $22.00
                                    </td>
                                    <td style="display: none;">
                                        300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-warning">Low stock</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 4
                                    </td>
                                    <td class="footable-visible">
                                        Model 4
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $67.00
                                    </td>
                                    <td style="display: none;">
                                        2300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 5
                                    </td>
                                    <td class="footable-visible">
                                        Model 5
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $76.00
                                    </td>
                                    <td style="display: none;">
                                        800
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: none;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 6
                                    </td>
                                    <td class="footable-visible">
                                        Model 6
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $60.00
                                    </td>
                                    <td style="display: none;">
                                        6000
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: none;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 7
                                    </td>
                                    <td class="footable-visible">
                                        Model 7
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $32.00
                                    </td>
                                    <td style="display: none;">
                                        700
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: none;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 8
                                    </td>
                                    <td class="footable-visible">
                                        Model 8
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $86.00
                                    </td>
                                    <td style="display: none;">
                                        5180
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: none;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 9
                                    </td>
                                    <td class="footable-visible">
                                        Model 9
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $97.00
                                    </td>
                                    <td style="display: none;">
                                        450
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: none;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 10
                                    </td>
                                    <td class="footable-visible">
                                        Model 10
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $43.00
                                    </td>
                                    <td style="display: none;">
                                        7600
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>


                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6" class="footable-visible">
                                        <ul class="pagination pull-right"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>





</div>


<div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>FooTable with row toggler, sorting and pagination</h5>

                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content" style="display: block;">

                            <table class="footable table table-stripped toggle-arrow-tiny default breakpoint footable-loaded" data-page-size="8">
                                <thead>
                                <tr>

                                    <th data-toggle="true" class="footable-visible footable-first-column footable-sortable footable-sorted">Project<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-visible footable-sortable">Name<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-visible footable-sortable">Phone<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="all" style="display: none;" class="footable-sortable">Company<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="all" style="display: none;" class="footable-sortable">Completed<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="all" style="display: none;" class="footable-sortable">Task<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="all" style="display: none;" class="footable-sortable">Date<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-visible footable-last-column footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Alpha project</td>
                                    <td class="footable-visible">Alice Jackson</td>
                                    <td class="footable-visible">0500 780909</td>
                                    <td style="display: none;">Nec Euismod In Company</td>
                                    <td style="display: none;"><span class="pie">6,9</span></td>
                                    <td style="display: none;">40%</td>
                                    <td style="display: none;">Jul 16, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Alpha project</td>
                                    <td class="footable-visible">Alice Jackson</td>
                                    <td class="footable-visible">0500 780909</td>
                                    <td style="display: none;">Nec Euismod In Company</td>
                                    <td style="display: none;"><span class="pie">6,9</span></td>
                                    <td style="display: none;">40%</td>
                                    <td style="display: none;">Jul 16, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Alpha project</td>
                                    <td class="footable-visible">Alice Jackson</td>
                                    <td class="footable-visible">0500 780909</td>
                                    <td style="display: none;">Nec Euismod In Company</td>
                                    <td style="display: none;"><span class="pie">6,9</span></td>
                                    <td style="display: none;">40%</td>
                                    <td style="display: none;">Jul 16, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Alpha project</td>
                                    <td class="footable-visible">Alice Jackson</td>
                                    <td class="footable-visible">0500 780909</td>
                                    <td style="display: none;">Nec Euismod In Company</td>
                                    <td style="display: none;"><span class="pie">6,9</span></td>
                                    <td style="display: none;">40%</td>
                                    <td style="display: none;">Jul 16, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Betha project</td>
                                    <td class="footable-visible">John Smith</td>
                                    <td class="footable-visible">0800 1111</td>
                                    <td style="display: none;">Erat Volutpat</td>
                                    <td style="display: none;"><span class="pie">3,1</span></td>
                                    <td style="display: none;">75%</td>
                                    <td style="display: none;">Jul 18, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr class="footable-row-detail" style="display: none;"><td class="footable-row-detail-cell" colspan="4"><div class="footable-row-detail-inner"><div class="footable-row-detail-row"><div class="footable-row-detail-name">Company:</div><div class="footable-row-detail-value">Erat Volutpat</div></div><div class="footable-row-detail-row"><div class="footable-row-detail-name">Completed:</div><div class="footable-row-detail-value"><span class="pie">3,1</span></div></div><div class="footable-row-detail-row"><div class="footable-row-detail-name">Task:</div><div class="footable-row-detail-value">75%</div></div><div class="footable-row-detail-row"><div class="footable-row-detail-name">Date:</div><div class="footable-row-detail-value">Jul 18, 2013</div></div></div></td></tr><tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Betha project</td>
                                    <td class="footable-visible">John Smith</td>
                                    <td class="footable-visible">0800 1111</td>
                                    <td style="display: none;">Erat Volutpat</td>
                                    <td style="display: none;"><span class="pie">3,1</span></td>
                                    <td style="display: none;">75%</td>
                                    <td style="display: none;">Jul 18, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: table-row;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Gamma project</td>
                                    <td class="footable-visible">Anna Jordan</td>
                                    <td class="footable-visible">(016977) 0648</td>
                                    <td style="display: none;">Tellus Ltd</td>
                                    <td style="display: none;"><span class="pie">4,9</span></td>
                                    <td style="display: none;">18%</td>
                                    <td style="display: none;">Jul 22, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: table-row;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Gamma project</td>
                                    <td class="footable-visible">Anna Jordan</td>
                                    <td class="footable-visible">(016977) 0648</td>
                                    <td style="display: none;">Tellus Ltd</td>
                                    <td style="display: none;"><span class="pie">4,9</span></td>
                                    <td style="display: none;">18%</td>
                                    <td style="display: none;">Jul 22, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: none;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Gamma project</td>
                                    <td class="footable-visible">Anna Jordan</td>
                                    <td class="footable-visible">(016977) 0648</td>
                                    <td style="display: none;">Tellus Ltd</td>
                                    <td style="display: none;"><span class="pie">4,9</span></td>
                                    <td style="display: none;">18%</td>
                                    <td style="display: none;">Jul 22, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: none;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Gamma project</td>
                                    <td class="footable-visible">Anna Jordan</td>
                                    <td class="footable-visible">(016977) 0648</td>
                                    <td style="display: none;">Tellus Ltd</td>
                                    <td style="display: none;"><span class="pie">4,9</span></td>
                                    <td style="display: none;">18%</td>
                                    <td style="display: none;">Jul 22, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: none;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Project
                                        <small>This is example of project</small>
                                    </td>
                                    <td class="footable-visible">Patrick Smith</td>
                                    <td class="footable-visible">0800 051213</td>
                                    <td style="display: none;">Inceptos Hymenaeos Ltd</td>
                                    <td style="display: none;"><span class="pie">0.52/1.561</span></td>
                                    <td style="display: none;">20%</td>
                                    <td style="display: none;">Jul 14, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr class="footable-row-detail" style="display: none;"><td class="footable-row-detail-cell" colspan="4"><div class="footable-row-detail-inner"><div class="footable-row-detail-row"><div class="footable-row-detail-name">Company:</div><div class="footable-row-detail-value">Inceptos Hymenaeos Ltd</div></div><div class="footable-row-detail-row"><div class="footable-row-detail-name">Completed:</div><div class="footable-row-detail-value"><span class="pie">0.52/1.561</span></div></div><div class="footable-row-detail-row"><div class="footable-row-detail-name">Task:</div><div class="footable-row-detail-value">20%</div></div><div class="footable-row-detail-row"><div class="footable-row-detail-name">Date:</div><div class="footable-row-detail-value">Jul 14, 2013</div></div></div></td></tr><tr style="display: none;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Project
                                        <small>This is example of project</small>
                                    </td>
                                    <td class="footable-visible">Patrick Smith</td>
                                    <td class="footable-visible">0800 051213</td>
                                    <td style="display: none;">Inceptos Hymenaeos Ltd</td>
                                    <td style="display: none;"><span class="pie">0.52/1.561</span></td>
                                    <td style="display: none;">20%</td>
                                    <td style="display: none;">Jul 14, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: none;" class="footable-even">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Project
                                        <small>This is example of project</small>
                                    </td>
                                    <td class="footable-visible">Patrick Smith</td>
                                    <td class="footable-visible">0800 051213</td>
                                    <td style="display: none;">Inceptos Hymenaeos Ltd</td>
                                    <td style="display: none;"><span class="pie">0.52/1.561</span></td>
                                    <td style="display: none;">20%</td>
                                    <td style="display: none;">Jul 14, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr><tr style="display: none;" class="footable-odd">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Project - This is example of project</td>
                                    <td class="footable-visible">Patrick Smith</td>
                                    <td class="footable-visible">0800 051213</td>
                                    <td style="display: none;">Inceptos Hymenaeos Ltd</td>
                                    <td style="display: none;"><span class="pie">0.52/1.561</span></td>
                                    <td style="display: none;">20%</td>
                                    <td style="display: none;">Jul 14, 2013</td>
                                    <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr></tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5" class="footable-visible">
                                        <ul class="pagination pull-right"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>