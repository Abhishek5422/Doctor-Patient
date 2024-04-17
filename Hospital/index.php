<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->	
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<link rel="stylesheet" href="css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="index.html">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					UI Components
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
					<a class="subnav-text" href="buttons.html">
					Buttons
					</a>
					</li>
					<li>
					<a class="subnav-text" href="grids.html">
					Grids
					</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-check-square-o nav_icon"></i>
				<span class="nav-text">
				Forms
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="inputs.html">Inputs</a>
					</li>
					<li>
						<a class="subnav-text" href="validation.html">Form Validation</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-file-text-o nav_icon"></i>
						<span class="nav-text">Pages</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="gallery.html">
							Image Gallery
						</a>
					</li>
					<li>
						<a class="subnav-text" href="calendar.html">
							Calendar
						</a>
					</li>
					<li>
						<a class="subnav-text" href="signup.html">
							Sign Up Page
						</a>
					</li>
					<li>
						<a class="subnav-text" href="login.html">
							Login Page
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="charts.html">
					<i class="fa fa-bar-chart nav_icon"></i>
					<span class="nav-text">
						Charts
					</span>
				</a>
			</li>
			<li>
				<a href="typography.html">
					<i class="icon-font nav-icon"></i>
					<span class="nav-text">
					Typography
					</span>
				</a>
			</li>
			<li>
				<a href="tables.html">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Tables
					</span>
				</a>
			</li>
			<li>
				<a href="maps.html">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span class="nav-text">
					Maps
					</span>
				</a>
			</li>
			<li>
				<a href="error.html">
					<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					<span class="nav-text">
					Error Page
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Extras</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="faq.html">FAQ</a>
					</li>
					<li>
						<a class="subnav-text" href="blank.html">Blank Page</a>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="login.html">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="index.html"><img src="images/logo.png" alt="" />Colored</a></h1>
			</div>
			
			
			
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		</div>
					</div>
			</div>
			
			
						
			
			
						
						<script>
						// Use Morris.Bar
						Morris.Bar({
						  element: 'graph5',
						  data: [
							{x: '2011 Q1', y: 3, z: 2, a: 3},
							{x: '2011 Q2', y: 2, z: null, a: 1},
							{x: '2011 Q3', y: 0, z: 2, a: 4},
							{x: '2011 Q4', y: 2, z: 4, a: 3}
						  ],
						  xkey: 'x',
						  ykeys: ['y', 'z', 'a'],
						  labels: ['Y', 'Z', 'A'],
						  stacked: true
						});
						</script>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
						<script>
						// This crosses a DST boundary in the UK.
						Morris.Area({
						  element: 'graph7',
						  data: [
							{x: '2013-03-30 22:00:00', y: 3, z: 3},
							{x: '2013-03-31 00:00:00', y: 2, z: 0},
							{x: '2013-03-31 02:00:00', y: 0, z: 2},
							{x: '2013-03-31 04:00:00', y: 4, z: 4}
						  ],
						  xkey: 'x',
						  ykeys: ['y', 'z'],
						  labels: ['Y', 'Z']
						});
						</script>

					</div>
				</div>
				
						<script>
						/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
						var day_data = [
						  {"period": "2012-10-01", "licensed": 3407, "sorned": 660},
						  {"period": "2012-09-30", "licensed": 3351, "sorned": 629},
						  {"period": "2012-09-29", "licensed": 3269, "sorned": 618},
						  {"period": "2012-09-20", "licensed": 3246, "sorned": 661},
						  {"period": "2012-09-19", "licensed": 3257, "sorned": 667},
						  {"period": "2012-09-18", "licensed": 3248, "sorned": 627},
						  {"period": "2012-09-17", "licensed": 3171, "sorned": 660},
						  {"period": "2012-09-16", "licensed": 3171, "sorned": 676},
						  {"period": "2012-09-15", "licensed": 3201, "sorned": 656},
						  {"period": "2012-09-10", "licensed": 3215, "sorned": 622}
						];
						Morris.Bar({
						  element: 'graph8',
						  data: day_data,
						  xkey: 'period',
						  ykeys: ['licensed', 'sorned'],
						  labels: ['Licensed', 'SORN'],
						  xLabelAngle: 60
						});
						</script>
					</div>
				</div>
				
						<script>
						var day_data = [
						  {"elapsed": "I", "value": 34},
						  {"elapsed": "II", "value": 24},
						  {"elapsed": "III", "value": 3},
						  {"elapsed": "IV", "value": 12},
						  {"elapsed": "V", "value": 13},
						  {"elapsed": "VI", "value": 22},
						  {"elapsed": "VII", "value": 5},
						  {"elapsed": "VIII", "value": 26},
						  {"elapsed": "IX", "value": 12},
						  {"elapsed": "X", "value": 19}
						];
						Morris.Line({
						  element: 'graph9',
						  data: day_data,
						  xkey: 'elapsed',
						  ykeys: ['value'],
						  labels: ['value'],
						  parseTime: false
						});
						</script>

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
							<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
							<script type="text/javascript">
								$('#example').countdown({
									date: '12/24/2020 18:59:59',
									offset: -8,
									day: 'Day',
									days: 'Days'
								}, function () {
									alert('Done!');
								});
							</script>
						</div>
				</div>
				
								
								<script>
									 var icons = new Skycons({"color": "#fcb216"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
								<script>
									 var icons = new Skycons({"color": "#000"}),
										  list  = [
											"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- footer -->
		<div class="footer">
			<p>© 2016 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>
