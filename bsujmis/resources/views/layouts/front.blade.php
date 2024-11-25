<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Benue State Judiciary Unified Information Mangement</title>
    <meta name="description" content="Lawe is responsive multi-purpose HTML5 template compatible with Bootstrap 4. Take your Startup business website to the next level. It is designed for lawyer, Attorney, businesses or any type of person or business who wants to showcase their work, services and professional way.">
    <meta name="keywords" content="advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
    <meta name="author" content="rometheme.net"> 
	

	<link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/frontend/images/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/frontend/images/apple-touch-icon-114x114.png') }}">
	

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/owl.theme.default.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/magnific-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/animate.min.css') }}">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}" />
	
    <script src="{{ asset('assets/frontend/js/vendor/modernizr.min.js') }}"></script>

</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">

    	<!-- TOPBAR -->
    	<div class="topbar d-none d-md-block">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-8 col-md-6">
						<div class="info">
							<div class="info-item">
								<i class="fa fa-phone"></i> +234 7144 3300
							</div>
							<div class="info-item">
								<i class="fa fa-envelope-o"></i> <a href="mailto:hello@lawyer.com" title="">hello@bsujims.com</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-6">
						<div class="sosmed-icon pull-right d-inline-flex">
							<a href="#"><i class="fa fa-facebook"></i></a> 
							<a href="#"><i class="fa fa-twitter"></i></a> 
							<a href="#"><i class="fa fa-instagram"></i></a> 
							<a href="#"><i class="fa fa-linkedin"></i></a> 
						</div>
					</div>
				</div>
			</div>
		</div>

		


    @yield('content')

    <!-- FOOTER SECTION -->
	<div class="footer">
		<div class="content-wrap">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo bottom" class="logo-bottom">
							<div class="spacer-30"></div>
							<p>Benue State Judiciary & Information Managemnt System is a digital platform designed to streamline judicial processes, enhance efficiency, and improve access to justice for the people of Benue State.</p>
							<div class="sosmed-icon icon-bg-primary d-inline-flex">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-instagram"></i></a> 
								<!-- <a href="#"><i class="fa fa-pinterest"></i></a>  -->
								<a href="#"><i class="fa fa-linkedin"></i></a> 
							</div>
						</div>
					</div>					

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								Contact Info
							</div>
							<ul class="list-info">
								<li>
									<div class="info-icon">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="info-text">Agan Dankaro St, Makurdi-Benue. Nigeria</div> </li>
								<li>
									<div class="info-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="info-text">(+234) 803-81493323</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="info-text">info@bsujims.com</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="info-text">Mon - Fri 09:00 - 16:00</div>
								</li>
							</ul>

						</div>
					</div>

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								Our Services
							</div>
							
							<ul class="list">
								<li><a href="practice-area-single.html" title="Family Law">Change of Name</a></li>
								<li><a href="practice-area-single.html" title="Financial Law">Lost of Items</a></li>
								<li><a href="practice-area-single.html" title="Sexual Offences">E-Verification</a></li>
								<li><a href="practice-area-single.html" title="Drug Offences">Book Appointment</a></li>
								<li><a href="practice-area-single.html" title="Fire Accident">Case Management</a></li>
								<!-- <li><a href="practice-area-single.html" title="Shoplifthing">Shoplifthing</a></li> -->
							</ul>
								
						</div>
					</div>
					
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								Usefull Link
							</div>
							
							<ul class="list">
								<li><a href="#" title="About Us">About Us</a></li>
								<li><a href="#" title="Attorney">E-Payment</a></li>
								<li><a href="#" title="Practice Areas">Affidavit Application</a></li>
								<li><a href="#" title="FAQ">E-Case Filling</a></li>
								<li><a href="#" title="Contact Us">Contact Me></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">Copyright 2024 &copy; <span class="color-primary">Benue State Judiciary</span> Information  <span class="color-primary">Management</span></p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>






<script src="{{ asset('assets/frontend/js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/jquery.magnific-popup.min.js') }}"></script>

	<!-- SENDMAIL -->
	<script src="{{ asset('assets/frontend/js/vendor/validator.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/form-scripts.js') }}"></script>

	<script src="{{ asset('assets/frontend/js/script.js') }}"></script>

</body>
</html>