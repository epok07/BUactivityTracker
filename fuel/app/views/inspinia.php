<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?></title>

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
 -->

    <?php echo Asset::css(array('bootstrap.css', 'font-awesome.css','animate.css', 'style.css','plugins/toastr/toastr.min.css')); ?>

    <?php echo Asset::css(array(
            'plugins/toastr/toastr.min.css',
            'plugins/footable/footable.core.css',

    )); ?>

    <?php echo Asset::css(array( 'style.css')); ?>



</head>

<body>

<div id="wrapper">



    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Romuald Ketchanga</strong>
                             </span> <span class="text-muted text-xs block">General Manager <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Logout</a></li>
                            </ul>
                    </div>
                    <div class="logo-element">
                        SODiSNi
                    </div>
                </li>
                <?php //Debug::dump(Str::sub($modules[1], 0, -1) );?>
				
				<?php $alt_icons = Str::alternator('fa-bell', 'fa-bank', 'fa-folder', 'fa-copyrigth' , 
                    'fa-dashboard', 'fa-database', 'fa-bold', 'fa-exchange', 'fa-check',
                'fa-bars', 'fa-search') ;?>

                <?php foreach($endpoints as $module => $pages) :?>

                	<!-- <li class="active">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                       
                    </li> -->

                <?php if ($module == 'dashboard'): ?>
                 		
                 	
                <li class="<?php echo Arr::get($subnav, "index" ); ?>">

                 	<?php   $dash_icon = $alt_icons();echo Html::anchor($module .'/', 
                 	'<i class="fa fa-th-large"></i><span class="nav-label">'.   Str::upper($module)  .'</span>') 
                 	;?>
                 	
                 	 <ul class="nav nav-second-level collapse in">
                 	 <?php foreach( $pages as $pos => $page) :?>
                            <li class="<?php echo Arr::get($subnav, "index" ); ?>">
                            	<a href="<?php echo Uri::create("$module/$page");?>"><?php echo (preg_replace('/.php/', "", $page));?></a>
                            </li>
                     <?php endforeach; ?>        
                     </ul>
					
               

                </li>
                <?php else: ?>

                <li>
                        <a href="javascript:"><i class="fa <?php echo $alt_icons();?>"></i> <span class="nav-label"><?php  echo Str::upper( $module ) ;?></span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <?php foreach( $pages as $pos => $page) :?>
                                <?php if($page == 'index.php') : ?>
                                    
                                <li class="<?php echo Arr::get($subnav, "index" ); ?>">
                                    <a href="<?php echo Uri::create("$module/$page");?>"><?php echo Inflector::pluralize($module) ;?></a>
                                </li>

                                 <? else: ?>
        
                                <li class="<?php echo Arr::get($subnav, "index" ); ?>">
                                	<a href="<?php echo Uri::create("$module/$page");?>"><?php echo (preg_replace('/.php/', "", $page));?></a>
                                </li>
                                 <?php endif ?>
                     		<?php endforeach; ?>      
                        </ul>
                    </li>
                
                 <?php endif ?>
                 <?php endforeach; ?>
                <!--  <li>
                    <a href="minor.html"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
                </li> -->
            </ul>

        </div>
    </nav>



    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>


        <!-- Page header -->
        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2><?php echo $title;?></h2>
                     <?php echo Breadcrumb::create_links() ; ?>
                    <!-- <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>UI Elements</a>
                        </li>
                        <li class="active">
                            <strong>Typography</strong>
                        </li>
                    </ol> -->

                </div>
                <div class="col-lg-4">
                <?php echo $top_action_btns; ?>
                </div>
            </div>


        <!--  -->
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
				<?php //Debug::dump($modules) ;?>
			    <?php //Debug::dump($endpoints) ;?>

				<?php //Debug::dump($controllers) ;?>
                <?php echo $content; ?>
                    
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
            <footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
			</footer>
        </div>

    </div>
</div>

<!-- Mainly scripts -->
<!-- <script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->
<?php echo Asset::js(array('jquery-2.1.1.js', 'bootstrap.min.js',
'plugins/metisMenu/jquery.metisMenu.js', 'plugins/slimscroll/jquery.slimscroll.min.js')); ?>

<!-- Custom and plugin javascript -->
<!-- <script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script> -->
<?php echo Asset::js(array('inspinia.js', 'plugins/pace/pace.min.js')); ?>

<?php echo Asset::js(array('plugins/footable/footable.all.min.js')); ?>

<script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>


    <!-- Rapport page Lib -->
     <!-- Flot -->
     <?php echo Asset::js(array(
            'plugins/footable/footable.all.min.js',

            // Flot 
            "plugins/flot/jquery.flot.js",
            "plugins/flot/jquery.flot.tooltip.min.js",
            "plugins/flot/jquery.flot.spline.js",
            "plugins/flot/jquery.flot.resize.js",
            "plugins/flot/jquery.flot.pie.js",
            "plugins/flot/jquery.flot.symbol.js",
            "plugins/flot/jquery.flot.time.js",
            
            //jQuery UI 
            "plugins/jquery-ui/jquery-ui.min.js",

            //EayPIE
            "plugins/easypiechart/jquery.easypiechart.js",

            //Sparkline
            "plugins/sparkline/jquery.sparkline.min.js",

            //Sparkline demo data
            "demo/sparkline-demo.js",

            //iCheck library
            "plugins/iCheck/icheck.min.js",

            //Sparkline demo data
            "plugins/peity/jquery.peity.min.js",

            //Toastr
            "plugins/toastr/toastr.min.js"
            )); ?>
    

    <!-- Peity -->
    <!-- <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script> -->

     
    <!-- Rapport Page Lib end  -->


<!-- ChartJS-->
     
    <?php echo Asset::js(array('plugins/chartJs/Chart.min.js')); ?>

    
    <?php if ( Str::ends_with(\Uri::current(), 'public/', true ) OR preg_match('/dashboard\/index/' , \Uri::current() ) == 1 )  : ?>
    <script>
        $(document).ready(function() {

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: "Example dataset",
                        fillColor: "rgba(26,179,148,0.5)",
                        strokeColor: "rgba(26,179,148,0.7)",
                        pointColor: "rgba(26,179,148,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(26,179,148,1)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };

            var lineOptions = {
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleGridLineWidth: 1,
                bezierCurve: true,
                bezierCurveTension: 0.4,
                pointDot: true,
                pointDotRadius: 4,
                pointDotStrokeWidth: 1,
                pointHitDetectionRadius: 20,
                datasetStroke: true,
                datasetStrokeWidth: 2,
                datasetFill: true,
                responsive: true,
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

        });
    </script>

     <?php endif ; ?>


    <?php if (preg_match('/rapport/' , \Uri::current() ) )  : ?>
    <!-- Rappot DEMO Stuff -->
    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
            //                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
            //                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "ne"
                },
                grid: {
                    hoverable: true,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
    <?php endif ; ?>

    <?php if (preg_match('/delivery/' , \Uri::current() ) )  : ?>
        <script>
            $(function() {
                    $("span.pie").peity("pie", {
                        fill: ['#1ab394', '#d7d7d7', '#ffffff']
                    })

                    $(".line").peity("line",{
                        fill: '#1ab394',
                        stroke:'#169c81',
                    })

                    $(".bar").peity("bar", {
                        fill: ["#1ab394", "#d7d7d7"]
                    })

                    $(".bar_dashboard").peity("bar", {
                        fill: ["#1ab394", "#d7d7d7"],
                        width:100
                    })

                    var updatingChart = $(".updating-chart").peity("line", { fill: '#1ab394',stroke:'#169c81', width: 64 })

                    setInterval(function() {
                        var random = Math.round(Math.random() * 10)
                        var values = updatingChart.text().split(",")
                        values.shift()
                        values.push(random)

                        updatingChart
                            .text(values.join(","))
                            .change()
                    }, 1000);

                });

        </script>
    <?php endif ; ?>

    <!-- Notifications -->
    <script type="text/javascript">
    <?php if (Session::get_flash('success')): ?>
             
                <?php $msg =  implode('</p><p>', e((array) Session::get_flash('success'))); ?>
                toastr["success"]( "<?php echo $msg;?>", "Opertion succeded !!!")
                 
    <?php endif; ?>
    <?php if (Session::get_flash('error')): ?>
             
                    <?php $msg_error =  implode('</p><p>', e((array) Session::get_flash('error'))); ?>
                    toastr["error"]( "<?php echo $msg_error;?>", "System Error: ")
                
    <?php endif; ?>
    
   
        //toastr["success"]( "Dear User,  <br/> this is the Dashboard of your Business. ", "Welcome !!!")
    </script>
    <!-- Notifications END -->

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//<?php echo $_SERVER['HTTP_HOST'] ;?>/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 6]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//<?php echo $_SERVER['HTTP_HOST'] ;?>/piwik/piwik.php?idsite=6" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>

</html>
