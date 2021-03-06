<h2>Listing <span class='muted'>Clients</span></h2>
<br>
<?php if ($clients): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>City</th>
			<th>Country</th>
			<th>Address</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($clients as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->city; ?></td>
			<td><?php echo $item->country; ?></td>
			<td><?php echo $item->address; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('client/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('client/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('client/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Clients.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('client/create', 'Add new Client', array('class' => 'btn btn-success')); ?>

</p>



<div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-8">
                    <div class="ibox">
                        <div class="ibox-content">
                            <span class="text-muted small pull-right">
                            Last modification: <i class="fa fa-clock-o"></i> <!-- 2:10 pm - 12.06.2014// --> <?php echo  $last_update  ;?>   <?php //echo  $last_update->toDateString();?>
                             
                            </span>
                            <h2>Clients</h2>
                            <p>
                                All clients need to be verified before you can send email and set a project.
                            </p>
                            <div class="input-group">
                                <input placeholder="Search client " class="input form-control" type="text">
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                                </span>
                            </div>
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <span class="pull-right small text-muted"><?php echo count($contacts);?> Elements</span>
                                <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"><i class="fa fa-user"></i> Contacts</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"><i class="fa fa-briefcase"></i> Companies</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                <?php foreach ($contacts as $item): ?>       

                                                <tr>
                                                    <td class="client-avatar"><img alt="image" src="img/a2.jpg"> </td>
                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link" aria-expanded="true"><?php echo $item->firtname ." ". $item->lastname; ?> </a></td>
                                                    <td> <?php echo $item->client->name; ?></td>
                                                    <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                                    <td><?php echo $item->email;?> </td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                 <?php endforeach ; ?> 
                                              
                                                <!-- <tr>
                                                    <td class="client-avatar"><img alt="image" src="img/a3.jpg"> </td>
                                                    <td><a data-toggle="tab" href="#contact-2" class="client-link" aria-expanded="true">Rooney Lindsay</a></td>
                                                    <td>Proin Limited</td>
                                                    <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                                    <td> rooney@proin.com</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><img alt="image" src="img/a4.jpg"> </td>
                                                    <td><a data-toggle="tab" href="#contact-3" class="client-link" aria-expanded="true">Lionel Mcmillan</a></td>
                                                    <td>Et Industries</td>
                                                    <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                                    <td> +432 955 908</td>
                                                    <td class="client-status"></td>
                                                </tr> 
                                                 
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="img/a7.jpg"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-4" class="client-link" aria-expanded="true">Reuben Pacheco</a></td>
                                                    <td>Magna Associates</td>
                                                    <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                                    <td> pacheco@manga.com</td>
                                                    <td class="client-status"></td>
                                                </tr>-->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 365.112px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                <?php foreach ($clients as $item): ?>   
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link" aria-expanded="false"> <?php echo $item->name . " " . '(' .count($item->contacts) .')'; ?></a></td>
                                                    <td> <?php echo $item->city; ?></td>
                                                    <td><i class="fa fa-flag"></i>  <?php echo $item->country; ?></td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <?php endforeach ; ?> 
                                                <!-- <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="false">Velit Industries</a></td>
                                                    <td>Maglie</td>
                                                    <td><i class="fa fa-flag"></i> Luxembourg</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link" aria-expanded="false">Art Limited</a></td>
                                                    <td>Sooke</td>
                                                    <td><i class="fa fa-flag"></i> Philippines</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link" aria-expanded="false">Tempor Arcu Corp.</a></td>
                                                    <td>Eisden</td>
                                                    <td><i class="fa fa-flag"></i> Korea, North</td>
                                                    <td class="client-status"><span class="label label-warning">Waiting</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="false">Penatibus Consulting</a></td>
                                                    <td>Tribogna</td>
                                                    <td><i class="fa fa-flag"></i> Montserrat</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link" aria-expanded="false"> Ultrices Incorporated</a></td>
                                                    <td>Basingstoke</td>
                                                    <td><i class="fa fa-flag"></i> Tunisia</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="false">Et Arcu Inc.</a></td>
                                                    <td>Sioux City</td>
                                                    <td><i class="fa fa-flag"></i> Burundi</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link" aria-expanded="false">Tellus Institute</a></td>
                                                    <td>Rexton</td>
                                                    <td><i class="fa fa-flag"></i> Angola</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="false">Velit Industries</a></td>
                                                    <td>Maglie</td>
                                                    <td><i class="fa fa-flag"></i> Luxembourg</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link" aria-expanded="false">Art Limited</a></td>
                                                    <td>Sooke</td>
                                                    <td><i class="fa fa-flag"></i> Philippines</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link" aria-expanded="false">Tempor Arcu Corp.</a></td>
                                                    <td>Eisden</td>
                                                    <td><i class="fa fa-flag"></i> Korea, North</td>
                                                    <td class="client-status"><span class="label label-warning">Waiting</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="false">Penatibus Consulting</a></td>
                                                    <td>Tribogna</td>
                                                    <td><i class="fa fa-flag"></i> Montserrat</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link" aria-expanded="false"> Ultrices Incorporated</a></td>
                                                    <td>Basingstoke</td>
                                                    <td><i class="fa fa-flag"></i> Tunisia</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="false">Et Arcu Inc.</a></td>
                                                    <td>Sioux City</td>
                                                    <td><i class="fa fa-flag"></i> Burundi</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link" aria-expanded="false">Tellus Institute</a></td>
                                                    <td>Rexton</td>
                                                    <td><i class="fa fa-flag"></i> Angola</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="false">Velit Industries</a></td>
                                                    <td>Maglie</td>
                                                    <td><i class="fa fa-flag"></i> Luxembourg</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link" aria-expanded="false">Art Limited</a></td>
                                                    <td>Sooke</td>
                                                    <td><i class="fa fa-flag"></i> Philippines</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link" aria-expanded="false">Tempor Arcu Corp.</a></td>
                                                    <td>Eisden</td>
                                                    <td><i class="fa fa-flag"></i> Korea, North</td>
                                                    <td class="client-status"><span class="label label-warning">Waiting</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="false">Penatibus Consulting</a></td>
                                                    <td>Tribogna</td>
                                                    <td><i class="fa fa-flag"></i> Montserrat</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link" aria-expanded="false"> Ultrices Incorporated</a></td>
                                                    <td>Basingstoke</td>
                                                    <td><i class="fa fa-flag"></i> Tunisia</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="false">Et Arcu Inc.</a></td>
                                                    <td>Sioux City</td>
                                                    <td><i class="fa fa-flag"></i> Burundi</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 365.112px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ibox ">

                        <div class="ibox-content">
                            <div class="tab-content">
                                <div id="contact-1" class="tab-pane active">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h2>Nicki Smith</h2>

                                            <div class="m-b-sm">
                                                <img alt="image" class="img-circle" src="img/a2.jpg" style="width: 62px">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <strong>
                                                About me
                                            </strong>

                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">

                                        <strong>Last activity</strong>

                                        <ul class="list-group clear-list">
                                            <li class="list-group-item fist-item">
                                                <span class="pull-right"> 09:00 pm </span>
                                                Please contact me
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pull-right"> 10:16 am </span>
                                                Sign a contract
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pull-right"> 08:22 pm </span>
                                                Open new shop
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pull-right"> 11:06 pm </span>
                                                Call back to Sylvia
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pull-right"> 12:00 am </span>
                                                Write a letter to Sandra
                                            </li>
                                        </ul>
                                        <strong>Notes</strong>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <hr>
                                        <strong>Timeline activity</strong>
                                        <div id="vertical-timeline" class="vertical-container dark-timeline">
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-coffee"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>Conference on the sales results for the previous year.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>Many desktop publishing packages and web page editors now use Lorem.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-bolt"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>There are many variations of passages of Lorem Ipsum available.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon navy-bg">
                                                    <i class="fa fa-warning"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>The generated Lorem Ipsum is therefore.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-coffee"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>Conference on the sales results for the previous year.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon gray-bg">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                                <div class="vertical-timeline-content">
                                                    <p>Many desktop publishing packages and web page editors now use Lorem.
                                                    </p>
                                                    <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 346.306px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </div>
                                </div>
                                <div id="contact-2" class="tab-pane">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h2>Edan Randall</h2>

                                            <div class="m-b-sm">
                                                <img alt="image" class="img-circle" src="img/a3.jpg" style="width: 62px">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <strong>
                                                About me
                                            </strong>

                                            <p>
                                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default tempor incididunt model text.
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">

                                            <strong>Last activity</strong>

                                            <ul class="list-group clear-list">
                                                <li class="list-group-item fist-item">
                                                    <span class="pull-right"> 09:00 pm </span>
                                                    Lorem Ipsum available
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 10:16 am </span>
                                                    Latin words, combined
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 08:22 pm </span>
                                                    Open new shop
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 11:06 pm </span>
                                                    The generated Lorem Ipsum
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 12:00 am </span>
                                                    Content here, content here
                                                </li>
                                            </ul>
                                            <strong>Notes</strong>
                                            <p>
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.
                                            </p>
                                            <hr>
                                            <strong>Timeline activity</strong>
                                            <div id="vertical-timeline" class="vertical-container dark-timeline">
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon navy-bg">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>The generated Lorem Ipsum is therefore.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </div>
                                </div>
                                <div id="contact-3" class="tab-pane">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h2>Jasper Carson</h2>

                                            <div class="m-b-sm">
                                                <img alt="image" class="img-circle" src="img/a4.jpg" style="width: 62px">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <strong>
                                                About me
                                            </strong>

                                            <p>
                                                Latin professor at Hampden-Sydney College in Virginia, looked  embarrassing hidden in the middle.
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">

                                            <strong>Last activity</strong>

                                            <ul class="list-group clear-list">
                                                <li class="list-group-item fist-item">
                                                    <span class="pull-right"> 09:00 pm </span>
                                                    Aldus PageMaker including
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 10:16 am </span>
                                                    Finibus Bonorum et Malorum
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 08:22 pm </span>
                                                    Write a letter to Sandra
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 11:06 pm </span>
                                                    Standard chunk of Lorem
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 12:00 am </span>
                                                    Open new shop
                                                </li>
                                            </ul>
                                            <strong>Notes</strong>
                                            <p>
                                                Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                            </p>
                                            <hr>
                                            <strong>Timeline activity</strong>
                                            <div id="vertical-timeline" class="vertical-container dark-timeline">
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon navy-bg">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>The generated Lorem Ipsum is therefore.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </div>
                                </div>
                                <div id="contact-4" class="tab-pane">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h2>Reuben Pacheco</h2>

                                            <div class="m-b-sm">
                                                <img alt="image" class="img-circle" src="img/a5.jpg" style="width: 62px">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <strong>
                                                About me
                                            </strong>

                                            <p>
                                                Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,written in 45 BC. This book is a treatise on.
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">

                                            <strong>Last activity</strong>

                                            <ul class="list-group clear-list">
                                                <li class="list-group-item fist-item">
                                                    <span class="pull-right"> 09:00 pm </span>
                                                    The point of using
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 10:16 am </span>
                                                    Lorem Ipsum is that it has
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 08:22 pm </span>
                                                    Text, and a search for 'lorem ipsum'
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 11:06 pm </span>
                                                    Passages of Lorem Ipsum
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 12:00 am </span>
                                                    If you are going
                                                </li>
                                            </ul>
                                            <strong>Notes</strong>
                                            <p>
                                                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                            </p>
                                            <hr>
                                            <strong>Timeline activity</strong>
                                            <div id="vertical-timeline" class="vertical-container dark-timeline">
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon navy-bg">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>The generated Lorem Ipsum is therefore.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </div>
                                </div>
                                <div id="company-1" class="tab-pane">
                                    <div class="m-b-lg">
                                            <h2>Tellus Institute</h2>

                                            <p>
                                                Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,written in 45 BC. This book is a treatise on.
                                            </p>
                                            <div>
                                                <small>Active project completion with: 48%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 48%;" class="progress-bar"></div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">

                                            <strong>Last activity</strong>

                                            <ul class="list-group clear-list">
                                                <li class="list-group-item fist-item">
                                                    <span class="pull-right"> <span class="label label-primary">NEW</span> </span>
                                                    The point of using
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> <span class="label label-warning">WAITING</span></span>
                                                    Lorem Ipsum is that it has
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> <span class="label label-danger">BLOCKED</span> </span>
                                                    If you are going
                                                </li>
                                            </ul>
                                            <strong>Notes</strong>
                                            <p>
                                                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                            </p>
                                            <hr>
                                            <strong>Timeline activity</strong>
                                            <div id="vertical-timeline" class="vertical-container dark-timeline">
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon navy-bg">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>The generated Lorem Ipsum is therefore.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </div>
                                </div>
                                <div id="company-2" class="tab-pane">
                                    <div class="m-b-lg">
                                        <h2>Penatibus Consulting</h2>

                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.
                                        </p>
                                        <div>
                                            <small>Active project completion with: 22%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 22%;" class="progress-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">

                                            <strong>Last activity</strong>

                                            <ul class="list-group clear-list">
                                                <li class="list-group-item fist-item">
                                                    <span class="pull-right"> <span class="label label-warning">WAITING</span> </span>
                                                    Aldus PageMaker
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"><span class="label label-primary">NEW</span> </span>
                                                    Lorem Ipsum, you need to be sure
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> <span class="label label-danger">BLOCKED</span> </span>
                                                    The generated Lorem Ipsum
                                                </li>
                                            </ul>
                                            <strong>Notes</strong>
                                            <p>
                                                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                            </p>
                                            <hr>
                                            <strong>Timeline activity</strong>
                                            <div id="vertical-timeline" class="vertical-container dark-timeline">
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon navy-bg">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>The generated Lorem Ipsum is therefore.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </div>
                                </div>
                                <div id="company-3" class="tab-pane">
                                    <div class="m-b-lg">
                                        <h2>Ultrices Incorporated</h2>

                                        <p>
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
                                        </p>
                                        <div>
                                            <small>Active project completion with: 72%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 72%;" class="progress-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">

                                            <strong>Last activity</strong>

                                            <ul class="list-group clear-list">
                                                <li class="list-group-item fist-item">
                                                    <span class="pull-right"> <span class="label label-danger">BLOCKED</span> </span>
                                                    Hidden in the middle of text
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"><span class="label label-primary">NEW</span> </span>
                                                    Non-characteristic words etc.
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right">  <span class="label label-warning">WAITING</span> </span>
                                                    Bonorum et Malorum
                                                </li>
                                            </ul>
                                            <strong>Notes</strong>
                                            <p>
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                                            </p>
                                            <hr>
                                            <strong>Timeline activity</strong>
                                            <div id="vertical-timeline" class="vertical-container dark-timeline">
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon navy-bg">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>The generated Lorem Ipsum is therefore.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
