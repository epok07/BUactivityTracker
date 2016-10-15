<!-- <h2>Viewing <span class='muted'>#<?php echo $order->id; ?></span></h2> -->

<!-- <p>
	<strong>Hash:</strong>
	<?php echo $order->hash; ?></p>
<p>
	<strong>Client id:</strong>
	<?php echo $order->client->name; ?></p>
<p>
	<strong>Issuer id:</strong>
	<?php echo $order->issuer_id; ?></p>
<p>
	<strong>Status id:</strong>
	<?php echo $order->status_id; ?></p>
<p>
	<strong>Company id:</strong>
	<?php echo $order->company->title; ?></p> -->


	<!-- Invoice  -->
	<div class="wrapper wrapper-content animated fadeInRight">
                    <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>From:</h5>
                                    <address>
                                        <strong><?php echo $sitetitle; ?></strong><br>
                                        106 Jorg Avenu, 600/10<br>
                                        Chicago, VT 32456<br>
                                        <abbr title="Phone">P:</abbr> (123) 601-4590
                                    </address>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <h4>Invoice No.</h4>
                                    <h4 class="text-navy"><?php echo $order->hash; ?></h4>
                                    <span>To:</span>
                                    <address>
                                        <strong><?php echo $order->client->name; ?></strong><br>
                                        <?php echo $order->client->address; ?> <br/>
                                         
                                        <abbr title="Phone">tel:</abbr> (120) 9000-4321
                                    </address>
                                    <p>
                                        <span><strong>Invoice Date:</strong> <?php echo Date::forge($order->created_at)->format("eu_named"); ; ?></span><br>
                                        <span><strong>Due Date:</strong> <?php echo '' ;//$order->due_on ; ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Item List</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Tax (19.25%)</th>
                                        <th>Total Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                    $subtotal = 0;
                                    $subtax = 0;
                                    $total = $subtotal + $subtax;
                                    foreach ($order->operations as $item): ?>		
                                    <tr>

										<td>
											<div><strong><?php echo $item->product->name; ?></strong></div>
										    <small><?php echo $item->summary; ?> </small>
										</td>
										<td><?php echo $item->quantity; ?></td>
										<td><?php echo $item->product->price; ?></td>
										<td>
										<?php $tax = $item->quantity . $item->product->price * 0.1925 ; echo $tax ; //$item->order_id; 
												 $subtax =+ $tax;
										?>
											
										</td>
										<td>
										<?php  echo "Fr. CFA ". $item->quantity . $item->product->price ; 
													$subtotal =+ $item->quantity . $item->product->price ;
										?></td>

										<!-- <td><?php //echo $item->unit_id; ?></td>
										<td><?php // echo $item->packagetype_id; ?></td> -->
                                    <!-- <tr>
                                        <td><div><strong><?php echo $item->product->name; ?></strong></div>
                                            <small><?php echo $item->summary; ?> </small></td>
                                        <td>1</td>
                                        <td>$26.00</td>
                                        <td>$5.98</td>
                                        <td>$31,98</td>
                                    </tr> -->
                                <?php endforeach;?>
                                    <!-- <tr>
                                        <td><div><strong>Wodpress Them customization</strong></div>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </small></td>
                                        <td>2</td>
                                        <td>$80.00</td>
                                        <td>$36.80</td>
                                        <td>$196.80</td>
                                    </tr>
                                    <tr>
                                        <td><div><strong>Angular JS &amp; Node JS Application</strong></div>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></td>
                                        <td>3</td>
                                        <td>$420.00</td>
                                        <td>$193.20</td>
                                        <td>$1033.20</td>
                                    </tr> -->

                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Sub Total :</strong></td>
                                    <td><?php echo $subtotal; ?></td>
                                </tr>
                                <tr>
                                    <td><strong>TAX :</strong></td>
                                    <td><?php echo $subtax; ?></td>
                                </tr>
                                <tr>
                                    <td><strong>TOTAL :</strong></td>
                                    <td><?php echo $total =   $subtax + $subtotal; ?></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="text-right">
                                <button class="btn btn-primary"><i class="fa fa-dollar"></i> Make A Payment</button>
                            </div>

                            <div class="well m-t"><strong>Comments</strong>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            </div>
                        </div>
                </div>

	<!-- End Invoice -->

<?php echo Html::anchor('order/edit/'.$order->id, 'Edit'); ?> |
<?php echo Html::anchor('order', 'Back'); ?>

 <p>
	<?php echo Html::anchor('#', 'Add new Operation', 
								array(
									'class'       => 'btn btn-w-m btn-primary',
									'data-toggle' =>"modal",
									'data-target' =>"#OperationFormModal"
	)); ?>
 
</p>

<div class="wrapper wrapper-content animated fadeInRight">
 <?php echo View::forge('operation/index', array("operations" => $order->operations)) ?>
	</div>
 				

<div class="modal inmodal" id="OrderFormModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> 

                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">Edit Order</h4>
                                            <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                                    <div class="form-group"><label>Sample Input</label> <input placeholder="Enter your email" class="form-control" type="email"></div>
                                                    <?php echo View::forge('order/_form-modal', array("order" => $order)) ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

  <div class="modal inmodal" id="OperationFormModal" tabindex="-2" role="dialog" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">New Operation </h4>
                                            <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                                    <div class="form-group"><label>Sample Input</label> <input placeholder="Enter your email" class="form-control" type="email"></div>
                                                    <?php echo View::forge('operation/_form-modal', array("order" => $order)) ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

