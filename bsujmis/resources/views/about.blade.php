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


		<!-- NAVBAR SECTION -->
		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav id="navbar-example" class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.html">
						<img src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav ml-auto">
			            	<li class="nav-item active">
			                    <a class="nav-link" href="index.html">HOME</a>
			                </li>
			            	<!-- <li class="nav-item">
			                    <a class="nav-link" href="about.html">ABOUT US</a>
			                </li> -->
							<li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          ABOUT US
						        </a>
			                    <div class="dropdown-menu">
			                    	<!-- <a class="dropdown-item" href="about.html"></a> -->
			                    	<a class="dropdown-item" href="{{ route('about') }}">Courts</a>
	          						<a class="dropdown-item" href="about.html">Judges</a>
	          						<a class="dropdown-item" href="about.html">Lawyers</a>
	          						<a class="dropdown-item" href="about.html">Testimonials</a>
	          						<a class="dropdown-item" href="about.html">FAQs</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          SERVICES
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="attorneys.html">e-filling</a>
	          						<a class="dropdown-item" href="attorneys-single.html">Affidavit Application</a>
									<a class="dropdown-item" href="attorneys.html"></a>
	          						<a class="dropdown-item" href="attorneys-single.html"></a>
							    </div>
			                </li>
			            	<li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          MEDIA
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="practice-area.html">News</a>
	          						<a class="dropdown-item" href="practice-area-single.html">Publications</a>
									<a class="dropdown-item" href="practice-area.html">Gallery</a>
	          						<a class="dropdown-item" href="practice-area-single.html"></a>
							    </div>
			                </li>
							<!-- <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          PAGES
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="page-gallery.html">GALLERY</a>
			                    	<a class="dropdown-item" href="page-testimonials.html">TESTIMONIALS</a>
	          						<a class="dropdown-item" href="page-faq.html">FAQ</a>
	          						<a class="dropdown-item" href="page-404.html">404 PAGE</a>
	          						<a class="dropdown-item" href="page-news.html">NEWS</a>
	          						<a class="dropdown-item" href="page-news-single.html">SINGLE NEWS</a>
							    </div>
			                </li> -->
			            	
			            	<li class="nav-item">
			                    <a class="nav-link" href="contact.html">CONTACT</a>
			                </li>
                
			            </ul>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>


	<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="d-flex bd-highlight mb-3">
							<div class="title-page">About Us</div>
						</div>
						<div class="d-flex bd-highlight mb-3">
						    <nav aria-label="breadcrumb">
							  <ol class="breadcrumb ">
							    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
							    <li class="breadcrumb-item active" aria-current="page">About Us</li>
							  </ol>
							</nav>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- WELCOME TO LAWE -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6">
						<h2 class="section-heading">
							Welcome to Lawe
						</h2>
						<p class="subheading mb-4">"we always take care of clients seriously"</p>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="#" class="btn btn-primary">LEARN MORE</a>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6">
						<img src="{{ asset('assets/frontend/images/dummy-img-600x400.jpg') }}" alt="" class="img-fluid mt-3">
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- FUN FACT -->
	<div class="section bgi-cover-center" data-background="{{ asset('assets/frontend/images/dummy-img-1920x900-3.jpg') }}">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					
					<!-- Item 1 -->
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-balance-scale"></i>
							</div>
							<div class="body-content">
								<h2>2120</h2>
								<p class="uk18">Succesful Cases</p>
							</div>
						</div>
					</div>

					<!-- Item 2 -->
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-gavel"></i>
							</div>
							<div class="body-content">
								<h2>312</h2>
								<p class="uk18">Cases Closed</p>
							</div>
						</div>
					</div>

					<!-- Item 3 -->
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="body-content">
								<h2>3120</h2>
								<p class="uk18">Trusted Clients</p>
							</div>
						</div>
					</div>

					<!-- Item 4 -->
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-briefcase"></i>
							</div>
							<div class="body-content">
								<h2>25</h2>
								<p class="uk18">Expert Team</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- FAQS -->
	<div class="section">
		<div class="content-wrap pb-0">
			<div class="container">

				<div class="row">
					
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Frequently Ask Question
						</h2>
						<p class="subheading mb-4">"we always take care of clients seriously"</p>
					</div>
				</div>

				<div class="row align-items-end mt-5">
					
					<div class="col-sm-12 col-md-12 col-lg-5">
						<img src="{{ asset('assets/frontend/images/dummy-img-600x700.jpg') }}" alt="" class="img-fluid img-border">
					</div>
					<div class="col-sm-12 col-md-12 col-lg-7">
												
						<div class="accordion rs-accordion" id="accordionExample">
						   <!-- Item 1 -->
						   <div class="card">
						      <div class="card-header" id="headingOne">
						         <h3 class="title">
						            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						            How do children learn?
						            </button>
						         </h3>
						      </div>
						      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						         <div class="card-body">
						            Create and publilsh dynamic websites for desktop, tablet, and mobile devices that meet the latest web standards- without writing code. Design freely using familiar tools and hundreds of web fonts. easily add interactivity, including slide shows, forms, and more.
						         </div>
						      </div>
						   </div>
						   <!-- Item 2 -->
						   <div class="card">
						      <div class="card-header" id="headingTwo">
						         <h3 class="title">
						            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						            When can I enroll?
						            </button>
						         </h3>
						      </div>
						      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						         <div class="card-body">
						            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						         </div>
						      </div>
						   </div>
						   <!-- Item 3 -->
						   <div class="card">
						      <div class="card-header" id="headingThree">
						         <h3 class="title">
						            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						            How successful are children when they graduate from Kids?
						            </button>
						         </h3>
						      </div>
						      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						         <div class="card-body">
						            <p>Unzip the file, locate Html file and double click the file and you will directly to adobe Html. Next step you can modifications our template, you can customize color, text, font, content, logo and image with your need using familiar tools on adobe Html without writing any code.</p>
						            <p>You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
						         </div>
						      </div>
						   </div>
						   <!-- Item 4 -->
						   <div class="card">
						      <div class="card-header" id="headingFour">
						         <h3 class="title">
						            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						            What security measures are in place at Kids?
						            </button>
						         </h3>
						      </div>
						      <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						         <div class="card-body">
						            <p>Unzip the file, locate Html file and double click the file and you will directly to adobe Html. Next step you can modifications our template, you can customize color, text, font, content, logo and image with your need using familiar tools on adobe Html without writing any code.</p>
						            <p>You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
						         </div>
						      </div>
						   </div>
						</div>
						<!-- end accordion -->

						<p class="uk21 mt-5 text-black"><a href="contact.html">Can't find your answer?. Contact us now!</a></p>

						<div class="spacer-content"></div>
					
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- OUR TESTIMONIALS -->
	<div class="section bgi-cover-center" data-background="{{ asset('assets/frontend/images/dummy-img-1920x900-3.jpg') }}">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center text-white">
							What Clients Say
						</h2>
						<p class="subheading text-center mb-5">Every case is very important to us and we always take care of them seriously.</p>
					</div>
				</div>
				<div class="row">
					
					<div class="col-sm-12 col-md-12 col-lg-6">
						<div id="testimonial" class="owl-carousel owl-theme owl-light">
							<!-- Item 1 -->
							<div class="item">
								<div class="rs-box-testimony">
									<div class="quote-box">
										<div class="media-box">
											<img src="{{ asset('assets/frontend/images/dummy-img-400x400.jpg') }}" alt="" class="rounded-circle">
										</div>
										<div class="quote-name">
											Johnathan Doel <span>Businessman</span>
										</div>                        
									</div>
									<blockquote class="quote">
									 Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam
									</blockquote>
								</div>
							</div>
							<!-- Item 2 -->
							<div class="item">
								<div class="rs-box-testimony">
									<div class="quote-box">
										<div class="media-box">
											<img src="{{ asset('assets/frontend/images/dummy-img-400x400.jpg') }}" alt="" class="rounded-circle">
										</div>
										<div class="quote-name">
											Johnathan Doel <span>Businessman</span>
										</div>                        
									</div>
									<blockquote class="quote">
									 Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam
									</blockquote>
								</div>
							</div>
							<!-- Item 3 -->
							<div class="item">
								<div class="rs-box-testimony">
									<div class="quote-box">
										<div class="media-box">
											<img src="{{ asset('assets/frontend/images/dummy-img-400x400.jpg') }}" alt="" class="rounded-circle">
										</div>
										<div class="quote-name">
											Johnathan Doel <span>Businessman</span>
										</div>                        
									</div>
									<blockquote class="quote">
									 Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam
									</blockquote>
								</div>
							</div>
						</div>
					</div>
						
					<div class="col-sm-12 col-md-12 col-lg-6">
						<div class="row mt-4">
							<div class="col-6 col-sm-4 col-md-4 mb-4">
								<img src="{{ asset('assets/frontend/images/client1w.png') }}" alt="" class="img-fluid">
							</div>
							<div class="col-6 col-sm-4 col-md-4 mb-4">
								<img src="{{ asset('assets/frontend/images/client2w.png') }}" alt="" class="img-fluid">
							</div>
							<div class="col-6 col-sm-4 col-md-4 mb-4">
								<img src="{{ asset('assets/frontend/images/client3w.png') }}" alt="" class="img-fluid">
							</div>
							<div class="col-6 col-sm-4 col-md-4 mb-4">
								<img src="{{ asset('assets/frontend/images/client4w.png') }}" alt="" class="img-fluid">
							</div>
							<div class="col-6 col-sm-4 col-md-4 mb-4">
								<img src="{{ asset('assets/frontend/images/client5w.png') }}" alt="" class="img-fluid">
							</div>
							<div class="col-6 col-sm-4 col-md-4 mb-4">
								<img src="{{ asset('assets/frontend/images/client6w.png') }}" alt="" class="img-fluid">
							</div>') }}
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- MEET OUR ATTORNEY -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center mb-4">
							Meet Our Attorney
						</h2>
						<p class="subheading text-center mb-5">Every case is very important to us and we always take care of them seriously.</p>
					</div>
					
				</div>
				<div class="row">
					<!-- Item 1 -->
					<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
						<div class="rs-team-1">
							<div class="media-box">
								<a href="attorneys-single.html"><img src="{{ asset('assets/frontend/images/dummy-img-600x700.jpg') }}" alt="" class="img-fluid"></a>
							</div>
							<div class="body">
								<div class="title"><a href="attorneys-single.html">Rome Doel</a></div>
								<div class="position">CEO & Lawyer</div>
								<div class="sosmed-icon icon-bg-secondary d-inline-flex">
									<a href="#"><i class="fa fa-facebook"></i></a> 
									<a href="#"><i class="fa fa-twitter"></i></a> 
									<a href="#"><i class="fa fa-instagram"></i></a> 
									<a href="#"><i class="fa fa-linkedin"></i></a> 
								</div>
							</div>
						</div>
					</div>
					<!-- Item 2 -->
					<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
						<div class="rs-team-1">
							<div class="media-box">
								<a href="attorneys-single.html"><img src="{{ asset('assets/frontend/images/dummy-img-600x700.jpg') }}" alt="" class="img-fluid"></a>
							</div>
							<div class="body">
								<div class="title"><a href="attorneys-single.html">Ella Doel</a></div>
								<div class="position">Consumer Lawyer</div>
								<div class="sosmed-icon icon-bg-secondary d-inline-flex">
									<a href="#"><i class="fa fa-facebook"></i></a> 
									<a href="#"><i class="fa fa-twitter"></i></a> 
									<a href="#"><i class="fa fa-instagram"></i></a> 
									<a href="#"><i class="fa fa-linkedin"></i></a> 
								</div>
							</div>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
						<div class="rs-team-1">
							<div class="media-box">
								<a href="attorneys-single.html"><img src="{{ asset('assets/frontend/images/dummy-img-600x700.jpg') }}" alt="" class="img-fluid"></a>
							</div>
							<div class="body">
								<div class="title"><a href="attorneys-single.html">Sarah Doel</a></div>
								<div class="position">Criminal Lawyer</div>
								<div class="sosmed-icon icon-bg-secondary d-inline-flex">
									<a href="#"><i class="fa fa-facebook"></i></a> 
									<a href="#"><i class="fa fa-twitter"></i></a> 
									<a href="#"><i class="fa fa-instagram"></i></a> 
									<a href="#"><i class="fa fa-linkedin"></i></a> 
								</div>
							</div>
						</div>
					</div>
					<!-- Item 4 -->
					<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
						<div class="rs-team-1">
							<div class="media-box">
								<a href="attorneys-single.html"><img src="{{ asset('assets/frontend/images/dummy-img-600x700.jpg') }}" alt="" class="img-fluid"></a>
							</div>
							<div class="body">
								<div class="title"><a href="attorneys-single.html">George Doel</a></div>
								<div class="position">Family Lawyer</div>
								<div class="sosmed-icon icon-bg-secondary d-inline-flex">
									<a href="#"><i class="fa fa-facebook"></i></a> 
									<a href="#"><i class="fa fa-twitter"></i></a> 
									<a href="#"><i class="fa fa-instagram"></i></a> 
									<a href="#"><i class="fa fa-linkedin"></i></a> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->
	<div class="section bg-primary">
		<div class="content-wrap py-3">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="text-center text-white">
			              	<h3>Get Free Legal Consultant : (0761) 654-123987</h3>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<div class="footer" data-background="{{ asset('assets/frontend/images/dummy-img-1920x900-3.jpg') }}">
		<div class="content-wrap">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<img src="{{ asset('assets/frontend/images/logo_w.png') }}" alt="logo bottom" class="logo-bottom">
							<div class="spacer-30"></div>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
							<div class="sosmed-icon icon-bg-primary d-inline-flex">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-instagram"></i></a> 
								<a href="#"><i class="fa fa-pinterest"></i></a> 
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
									<div class="info-text">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</div> </li>
								<li>
									<div class="info-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="info-text">(0761) 654-123987</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="info-text">info@yoursite.com</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="info-text">Mon - Sat 09:00 - 17:00</div>
								</li>
							</ul>

						</div>
					</div>

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								Practice Areas
							</div>
							
							<ul class="list">
								<li><a href="practice-area-single.html" title="Family Law">Family Law</a></li>
								<li><a href="practice-area-single.html" title="Financial Law">Financial Law</a></li>
								<li><a href="practice-area-single.html" title="Sexual Offences">Sexual Offences</a></li>
								<li><a href="practice-area-single.html" title="Drug Offences">Drug Offences</a></li>
								<li><a href="practice-area-single.html" title="Fire Accident">Fire Accident</a></li>
								<li><a href="practice-area-single.html" title="Shoplifthing">Shoplifthing</a></li>
							</ul>
								
						</div>
					</div>
					
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								Usefull Link
							</div>
							
							<ul class="list">
								<li><a href="about.html" title="About Us">About Us</a></li>
								<li><a href="attorneys.html" title="Attorney">Attorney</a></li>
								<li><a href="practice-area.html" title="Practice Areas">Practice Areas</a></li>
								<li><a href="page-faq.html" title="FAQ">FAQ</a></li>
								<li><a href="contact.html" title="Contact Us">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>


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
									<div class="info-text">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</div> </li>
								<li>
									<div class="info-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="info-text">(0761) 654-123987</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="info-text">info@yoursite.com</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="info-text">Mon - Sat 09:00 - 17:00</div>
								</li>
							</ul>

						</div>
					</div>

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								Practice Areas
							</div>
							
							<ul class="list">
								<li><a href="practice-area-single.html" title="Family Law">Family Law</a></li>
								<li><a href="practice-area-single.html" title="Financial Law">Financial Law</a></li>
								<li><a href="practice-area-single.html" title="Sexual Offences">Sexual Offences</a></li>
								<li><a href="practice-area-single.html" title="Drug Offences">Drug Offences</a></li>
								<li><a href="practice-area-single.html" title="Fire Accident">Fire Accident</a></li>
								<li><a href="practice-area-single.html" title="Shoplifthing">Shoplifthing</a></li>
							</ul>
								
						</div>
					</div>
					
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								Usefull Link
							</div>
							
							<ul class="list">
								<li><a href="about.html" title="About Us">About Us</a></li>
								<li><a href="attorneys.html" title="Attorney">Attorney</a></li>
								<li><a href="practice-area.html" title="Practice Areas">Practice Areas</a></li>
								<li><a href="page-faq.html" title="FAQ">FAQ</a></li>
								<li><a href="contact.html" title="Contact Us">Contact Me></li>
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
