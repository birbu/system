<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>

		<!-- ==============================================
		Title and Meta Tags1
		=============================================== -->
		<meta charset="utf-8">
		<title>BirBu | Kurumsal İş Ortağınız</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- ==============================================
		Favicons
		=============================================== -->
		<link rel="shortcut icon" href="assets/favicon.ico">
		<link rel="apple-touch-icon" href="assets/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/apple-touch-icon-114x114.png">
		
		<!-- ==============================================
		CSS
		=============================================== -->    
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/flexslider.css">
		<link id="main" rel="stylesheet" href="css/shapes-blue.css">
		
		
		<!-- ==============================================
		Fonts
		=============================================== -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<!-- ==============================================
		JS
		=============================================== -->
			
		<!--[if lt IE 9]>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		
		<script type="text/javascript" src="js/libs/modernizr.min.js"></script>
		
		
	</head>
  
	<body data-spy="scroll" data-target="#main-nav" data-offset="400">
	
		<!--=== PAGE PRELOADER ===-->
		<div id="page-loader"><h1 class='loader-logo'>Shapes<span> / Creative Studio</span></h1><span class="page-loader-gif"></span></div>
		
		<!--=== BACKGROUND ===-->
		<div id="backgrounds" data-backgrounds="assets/back_img_1.jpg,assets/back_img_2.jpg,assets/back_img_3.jpg"></div>
		<div id="color-overlay"></div>
	
		<!-- ==============================================
		MAIN NAV
		=============================================== -->
		<div id="main-nav" class="navbar navbar-fixed-top">
			<div class="container">
			
				<div class="navbar-header">
				
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
					
					<!-- ======= LOGO ========-->
					<a class="navbar-brand scrollto" href="#home">BirBu<span> / Kurumsal İş Ortağınız</span></a>
					<!-- <a class="navbar-brand scrollto ir-logo" href="#home">SHAPES<span> / Creative Studio</span></a> -->
				
				</div>
				
				<div id="site-nav" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="sr-only">
							<a href="#home" class="scrollto">ANA SAYFA</a>
						</li>
						<li>
							<a href="#services" class="scrollto">HİZMETLER</a>
						</li>
						<li>
							<a href="#portfolio" class="scrollto">REFERANSLAR</a>
						</li>
						<!--<li>
							<a href="#about" class="scrollto">About</a>
						</li>-->
						<li>
							<a href="#contact" class="scrollto">İLETİŞİM</a>
						</li>
					</ul>
				</div><!--End navbar-collapse -->
				
			</div><!--End container -->
			
		</div><!--End main-nav -->
		
		<!-- ==============================================
		HEADER
		=============================================== -->
		<header id="home" class="jumbotron">
		
			<div class="container">
			
				<img class="img-responsive img-center header-logo" src="assets/drop.png" alt="">
			
				<div class="message-box clearfix">
				
					<div class="first-line">
						<p>The best things in life</p>
					</div>	
					
					<div class="second-line flexslider home-slider">
					
						<ul class="slides">
						
							<li><p>are not things</p></li>
							
							<li><p>are Shapes</p></li>
							
						</ul>
						
					</div><!--End home-slider -->
					
				</div><!--End message-box -->
				
			</div><!--End container -->
			
		</header><!--End header -->
		
		<!-- ==============================================
		SERVICES
		=============================================== -->
		 <?php include 'service.php'; ?>
		<!--End services section-->
		
		<!-- ==============================================
		CALL TO ACTION
		=============================================== -->			
	<!--End Call to Action -->

		<!-- ==============================================
		PORTFOLIO
		=============================================== -->	
		<?php include 'portfolio.php'; ?>	
		<!-- End portfolio section -->
			
		<!-- ==============================================
		TESTIMONIALS
		=============================================== -->	
		
	<!-- End Testimonials section -->

		
		
		<!-- ==============================================
		ABOUT
		=============================================== -->
		
		<!--End about section-->

	
		<!-- ==============================================
		TWITTER FEED
		=============================================== -->	
		<section id="twitter" class="bg-transparent">
		
			<div class="container scrollimation fade-right">
			
				<div class="twitter-icon"><!-- Twitter Icon -->
					<i class="fa fa-twitter"></i>
				</div>
				
				<div class="row">
				
					<div class="col-sm-8 col-sm-offset-2">
					
						<div id="twitter-slider" class="flexslider" data-widget-id="386017398488186880" data-tweets-length="3">
						
						</div><!-- End slider -->
						
					</div><!-- End col -->
					
				</div><!-- End row -->
				
			</div><!-- End container -->
			
		</section><!-- End Twitter section -->

		<!-- ==============================================
		CONTACT
		=============================================== -->	
		<?php include 'contact1.php'; ?>
	<!-- End contact section -->

		<!-- ==============================================
		SOCIAL LINKS
		=============================================== -->	
		
		<section id="social-links" class="bg-transparent">
		
			<div class="container">
				<ul>
					<li class="scrollimation fade-up">
						<a href="#twitterlink" class="icon"><i class="fa fa-twitter"></i></a>
						<h4>Follow us on Twitter</h4>
					</li>
					<li class="scrollimation fade-up d1">
						<a href="#facebooklink" class="icon"><i class="fa fa-facebook"></i></a>
						<h4>Like us on Facebook</h4>
					</li>
					<li class="scrollimation fade-up d2">
						<a href="#dribbblelink" class="icon"><i class="fa fa-dribbble"></i></a>
						<h4>Find us on Dribbble</h4>
					</li>
					<li class="scrollimation fade-up d3">
						<a href="#gpluslink" class="icon"><i class="fa fa-google-plus"></i></a>
						<h4>Find us on Google+</h4>
					</li>
				</ul>
					
			</div><!--End container -->
			
		</section><!--End skills section -->
		
		<!-- ==============================================
		FOOTER
		=============================================== -->	
		<footer id="main-footer">
		
			<div class="container">
			
				<div class="row">
				
					<div class="col-sm-6 left-col">
						<p><span>BİRBU</span> &copy;Copyright 2014 / Tüm Hakları Saklıdır</p>
					</div>
					
					<div class="col-sm-6 right-col">
						
						<ul class="footer-nav">
							<li><a class="scrollto" href="#home">ANA SAYFA</a></li>
							<li><a class="scrollto" href="#services">HİZMETLER</a></li>
							<li><a class="scrollto" href="#portfolio">REFERANSLAR</a></li>
							<li><a class="scrollto" href="#contact">İLETİŞİM</a></li>
						</ul>
						
					</div>
					
				</div><!-- End row -->
				
			</div><!-- End container -->
			
		</footer><!-- End footer -->
		
		
		<!-- ==============================================
		SCRIPTS
		=============================================== -->	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.2.min.js">\x3C/script>')</script>
		
		<script src="js/libs/bootstrap.min.js"></script>
		<script src='js/jquery.scrollto.js'></script>
		<script src='js/jquery.flexslider.min.js'></script>
		<script src='js/twitterFetcher_v10_min.js'></script>
		<script src='js/jquery.fitvids.js'></script>
		<script src='js/jquery.masonry.min.js'></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.backstretch.min.js"></script>
		<script src="js/contact.js"></script>
		<script src="js/shapes.js"></script>
		
	</body>
	
</html>