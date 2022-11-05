<?php 

session_start();
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/gallery.php"); 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Air Pollution Category Flat Bootstrap Responsive Template | Gallery :: w3layouts</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fit&Spa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
<link rel="stylesheet" href="css/swipebox.css"> 
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
<link rel="stylesheet" href="css/jquery-ui.css" /> <!-- Calendar-CSS -->
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts --> 
</head> 
	<!-- banner --> 
	<div class="jarallax about-w3banner">    
		<!-- header --> 
		<div class="w3header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="Home.php">AIR POLLUTION</a></h1> 
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
						<ul class="nav navbar-nav navbar-right">
							<li><a href="Home.php" class="active">Home</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">For Users<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="userlogin.php">User Login</a></li>
									<li><a href="user_register.php">User Register</a></li>
									<li><a href="userupdate.php">User Info Updating</a></li>
									<li><a href="Contact Us.php">Contact Us</a></li>
									<li><a href="Q&A.php">Questions & Answers</a></li>
									<li><a href="countrydisplay.php">Countries Airpollution Rate</a></li>
									<li><a href="Feedback.php">Feedback</a></li>
									<li><a href="History.php">History</a></li>
									<li><a href="userlogout.php">Logout</a></li>
								</ul>
							</li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">For Staffs<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="staff_login.php">Staff Login</a></li>
									<li><a href="staff_register.php">Staff Register</a></li>
									<li><a href="ViewQuestion.php">Add Answers Here</a></li>
									<li><a href="CountryRegister.php">Add Countries Here</a></li>
								</ul>
							</li> 
						</ul> 
						<div class="clearfix"> </div>	
					</div>
				</nav>
			</div>  
		</div>
		<!-- //header -->   
	</div>	 
	<!-- //banner -->  
	<!-- portfolio -->
	<div class="portfolio">
		<div class="container">   
			<h2 class="agileits-title">Gallery</h2> 
			<div class="gallery-agileinfo">
				<ul class="simplefilter">
					<li class="active" data-filter="all"></li>
				</ul>
				<div class="filtr-container">
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="Busy streets">
						<div class="agileits-img">
							<a href="images/g1.jpg" class="swipebox">
								<img class="img-responsive  " src="images/g1.jpg" alt=""  /> 
							</a> 
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Luminous night">
						<div class="agileits-img">
							<a href="images/g2.jpg" class="swipebox">
								<img src="images/g2.jpg" alt="" class="img-responsive" />
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="City wonders">
						<div class="agileits-img">
							<a href="images/g3.jpg" class="swipebox">
								<img src="images/g3.jpg" alt="" class="img-responsive  " />
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="Industrial site">
						<div class="agileits-img">
							<a href="images/g4.jpg" class="swipebox">
								<img src="images/g4.jpg" alt="" class="img-responsive " />
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="In production">
						<div class="agileits-img">
							<a href="images/g5.jpg" class="swipebox">
								<img src="images/g5.jpg" alt="" class="img-responsive  " />
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="Peaceful lake">
						<div class="agileits-img">
							<a href="images/g6.jpg" class="swipebox">
								<img src="images/g6.jpg" alt="" class="img-responsive  " />
							</a>	
						</div>
					</div>
				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->   
	<!-- reservation -->
	<div class="reservation-info jarallax"> 
		<div class="reservation">
			<div class="container">			
				<h2 class="agileits-title w3title2">It's Time To Stop The Mess.<br> And<br> Save The Earth</h2>
			</div>
		</div>
	</div>	
	<!-- //reservation -->
	<!-- Time select -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({twentyFour: false});
	</script>
	<!-- //Time select --> 
	<!-- Calendar --> 
	<script src="js/jquery-ui.js"></script>
	<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	</script> 
	<!-- //Calendar --> 
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="clearfix"> </div> 
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p>© 2020 Air Pollution. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer --> 
	<!-- Kick off Filterizr js -->
	<script src="js/jquery.filterizr.js"></script>  
	<script src="js/controls.js"></script>	
	<script type="text/javascript">
		$(function() {
			//Initialize filterizr with default options
			$('.filtr-container').filterizr();
		});
	</script>	
	<!-- Kick off Filterizr -->
	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script> 
	<!-- //swipe box js --> 	 
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- jarallax effect -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>   
	<!-- //jarallax effect -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>