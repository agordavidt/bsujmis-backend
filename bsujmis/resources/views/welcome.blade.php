@extends('layouts.front')
@section('content')


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
			            	<li class="nav-item  ">
			                    <a class="nav-link" href="{{ url('/') }}">HOME</a>
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
	          						<a class="dropdown-item" href="{{ route('about') }}">Judges</a>
	          						<a class="dropdown-item" href="{{ route('about') }}">Lawyers</a>
	          						<a class="dropdown-item" href="{{ route('about') }}">Testimonials</a>
	          						<a class="dropdown-item" href="{{ route('about') }}">FAQs</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          SERVICES
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="{{ route('services') }}">e-filling</a>
	          						<a class="dropdown-item" href="{{ route('services') }}">Affidavit Application</a>
									<a class="dropdown-item" href="{{ route('services') }}"></a>
	          						<a class="dropdown-item" href="{{ route('services') }}"></a>
							    </div>
			                </li>
			            	<li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          MEDIA
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="{{ route('media') }}">News</a>
	          						<a class="dropdown-item" href="{{ route('media') }}">Publications</a>
									<a class="dropdown-item" href="{{ route('media') }}">Gallery</a>
	          						<a class="dropdown-item" href="{{ route('media') }}"></a>
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
			                    <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
			                </li>
                 @if (Route::has('login'))
                    
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else	
                             <li class="nav-item">
			                    <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
			                </li>		            	
							<!-- <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          LOGIN
						        </a>
			                    <div class="dropdown-menu">
									<a class="dropdown-item" href="{{ route('login') }}">Admin</a>
			                    	<a class="dropdown-item" href="{{ route('login') }}">Judge</a>
	          						<a class="dropdown-item" href="{{ route('login') }}">Clerk</a>
	          						<a class="dropdown-item" href="{{ route('login') }}">Attorney</a>
	          						<a class="dropdown-item" href="{{ route('login') }}">Public</a>	          						
							    </div>
			                </li> -->
                             @if (Route::has('register'))
                            <li class="nav-item">
			                    <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
			                </li>
                             @endif
                        @endauth
                    @endif
			            </ul>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>



<!-- BANNER -->
    <div id="oc-fullslider" class="banner">
    	<div class="owl-carousel owl-theme full-screen">
	    	<div class="item">
	        	<img src="" alt="Slider">
	        	<div class="overlay-bg"></div>
	        	<div class="container d-flex align-items-center">
	            	<div class="wrap-caption">
		                <h1 class="caption-heading"><br>Justice, Simplified</h1>
		                <p>Experience the future of justice, with case management, court scheduling, and document handling are streamlined for efficient and transparent judicial processes</p>
		                <a href="#" class="btn btn-primary">LEARN MORE</a>
		            </div>  
	            </div>
	    	</div>
	    	<div class="item">
	            <img src="{{ asset('assets/frontend/images/dummy-img-1920x900-3.jpg') }}" alt="Slider">
	            <div class="overlay-bg"></div>
	            <div class="container d-flex align-items-center">
	            	<div class="wrap-caption">
		                <h1 class="caption-heading"><br>Gateway to Justice</h1>
		                <p>A new dawn for Justice in Benue State, where technology meets tradition to deliver swift, equitable, and accessible justice to all citizens.</p>
		                <a href="#" class="btn btn-primary">LEARN MORE</a>
		            </div>  
	            </div>
	        </div> 
    	</div>
	    <div class="custom-nav owl-nav"></div>
    </div>	

    <!-- CTA -->
	<div class="section">
		<div class="content-wrap py-0">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-overlap clearfix">
			              	<div class="body-text mb-3">
			                	<h3 class="my-1 text-white">The Attorneys You Want On Your Side</h3>
			                	<p class="uk18 mb-0 text-primary">Every case is very important to us and we always take care of them seriously.</p>
			              	</div>
			              	<div class="body-action">
			                	<a href="contact.html" class="btn btn-primary">FREE CONSULTATION</a>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- OUR PROMISE? -->
	<div class="section">
		<div class="content-wrap pb-0">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-sm-12 col-md-12 col-lg-6">
						<img src="{{ asset('assets/frontend/images/dummy-img-600x700.jpg') }}" alt="" class="img-fluid img-border">
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6">
						<h2 class="section-heading mt-3">
							Our Promise?
						</h2>
						<p class="subheading mb-4">"we always take care of clients seriously"</p>
			                	
						<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis unde omnis iste natus error sitdolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.  Praesent interdum est gravida vehicula est node maecenas loareet morbi a dosis luctus novum est praesent. Magna est consectetur interdum modest dictum.</p>
						<blockquote class="quote">
							<p class="uk18">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<footer class="blockquote-footer">Carol Mongol <cite title="Source Title">Rometheme</cite></footer>
						</blockquote>
						<div class="spacer-content"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FUN FACT -->

	<!-- WHY CHOOSE -->
	<div class="section  bgi-cover-center text-dark">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="text-center mb-4">
							Services
						</h2>
						<p class="subheading text-center mb-5" style="color: #333">Every case is very important to us and we always take care of them seriously.</p>
					</div>
				</div>
				
				<div class="row">
					<!-- Item 1 -->
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<div class="box-icon-1 text-center">
							<div class="icon">
								<i class="fa fa-fire"></i>
							</div>
							<div class="body-content">
								<h3>Case Management</h3>
								<p>Efficiently register, track, and update cases to streamline case processing and reduce paperwork.</p>
							</div>
						</div>
					</div>
					<!-- Item 2 -->
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<div class="box-icon-1 text-center">
							<div class="icon">
								<i class="fa fa-ambulance"></i>
							</div>
							<div class="body-content">
								<h3> Court Scheduling</h3>
								<p>Automate scheduling of hearings, trials, and other judicial activities to optimize court resources and minimize delays.</p>
							</div>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<div class="box-icon-1 text-center">
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="body-content">
								<h3>Document Management</h3>
								<p>Securely upload, store, and share case documents and evidence to protect sensitive information and ensure data integrity.</p>
							</div>
						</div>
					</div>
					<!-- Item 4 -->
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<div class="box-icon-1 text-center">
							<div class="icon">
								<i class="fa fa-money"></i>
							</div>
							<div class="body-content">
								<h3>E-Filing</h3>
								<p>Submit cases online to save time and effort for attorneys and the public, improving accessibility to justice services.</p>
							</div>
						</div>
					</div>
					<!-- Item 5 -->
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<div class="box-icon-1 text-center">
							<div class="icon">
								<i class="fa fa-leaf"></i>
							</div>
							<div class="body-content">
								<h3>Role-Based Access Control</h3>
								<p>Ensure secure and controlled access to system features to protect sensitive information and prevent unauthorized access.</p>
							</div>
						</div>
					</div>
					<!-- Item 6 -->
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<div class="box-icon-1 text-center">
							<div class="icon">
								<i class="fa fa-user-secret"></i>
							</div>
							<div class="body-content">
								<h3>Reporting and Analytics</h3>
								<p>Get insightful reports on case trends, hearing schedules, and case statuses to support data-driven decision-making and improve judicial efficiency.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- OUR TESTIMONIALS -->


	<!-- MEET OUR ATTORNEY -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="text-center mb-4 text-dark">
							Judiciary Officers
						</h2>
						<p class="subheading text-center mb-5" style="color: #333">Every case is very important to us and we always take care of them seriously.</p>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CONTACT -->
	<div class="section bgi-cover-center" data-background="{{ asset('assets/frontend/images/dummy-img-1920x900.jpg') }}">
		<div class="content-wrap pb-0">
			<div class="container">
				<div class="row align-items-end">
					
					<div class="col-12 col-md-7">
						<h2 class="section-heading">
							Free Consultation
						</h2>
						<p class="subheading mb-5">Don't hesitate to ask questions.</p>
						
						<form action="#" class="form-contact" id="contactForm">
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_name" placeholder="Enter Name" required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" id="p_email" placeholder="Enter Email" required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_phone" placeholder="Enter Phone Number">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_subject" placeholder="Practice Area">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								 <textarea id="p_message" class="form-control" rows="6" placeholder="Enter Your Message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-primary">Send Now</button>
							</div>
						</form>
						<div class="spacer-content"></div>

					</div>

					<div class="col-12 col-md-5">
						<img src="{{ asset('assets/frontend/images/dummy-img-600x700.jpg') }}" alt="" class="img-fluid">
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->
	<!-- <div class="section bg-primary">
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
	</div> -->

	
	
@endsection







