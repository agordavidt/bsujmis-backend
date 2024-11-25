@extends('layouts.frontend')
@section('content')



	<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="d-flex bd-highlight mb-3">
							<div class="title-page">Contact Us</div>
						</div>
						<div class="d-flex bd-highlight mb-3">
						    <nav aria-label="breadcrumb">
							  <ol class="breadcrumb ">
							    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
							    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
							  </ol>
							</nav>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CONTENT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-4">
						<h2 class="section-heading">
							Contact Info
						</h2>
						<p class="subheading mb-4">"we always take care of clients seriously"</p>
						<!-- Item 1 -->
						<div class="row align-items-center">
							<div class="col-2"><i class="fa fa-map-marker fa-3x text-primary"></i></div>
							<div class="col-10">
								<h4 class="text-primary mb-0">Address :</h4>
								<p>Agan Dankaro St, Makurdi-Benue. Nigeria</p>
							</div>
						</div>
						<!-- Item 2 -->
						<div class="row align-items-center">
							<div class="col-2"><i class="fa fa-envelope fa-3x text-primary"></i></div>
							<div class="col-10">
								<h4 class="text-primary mb-0">Email :</h4>
								<p>info@bsujims.com <br>infosupport@bsujims.com</p>
							</div>
						</div>
						<!-- Item 3 -->
						<div class="row align-items-center">
							<div class="col-2"><i class="fa fa-phone fa-3x text-primary"></i></div>
							<div class="col-10">
								<h4 class="text-primary mb-0">Phone :</h4>
								<p>(+234) 803-81493323 <br>(+234) 803-81493323</p>
							</div>
						</div>
						<!-- Item 4 -->
						<div class="row align-items-center">
							<div class="col-2"><i class="fa fa-clock-o fa-3x text-primary"></i></div>
							<div class="col-10">
								<h4 class="text-primary mb-0">Office Hours :</h4>
								<p>Mon-Fri : 09.00am-16.00pm <br>Sat-Sun : Close</p>
							</div>
						</div>
					</div>
					<!-- End Sidebar -->
					<div class="col-sm-12 col-md-12 col-lg-8">
						
						<h2 class="section-heading">
							Send Us Message
						</h2>
						<p class="subheading mb-4">"we always take care of clients seriously"</p>
						<form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
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
										<input type="text" class="form-control" id="p_subject" placeholder="Subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_phone" placeholder="Enter Phone Number">
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
								<button type="submit" class="btn btn-secondary">Send Message</button>
							</div>
						</form>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- MAPS -->
	<div class="maps-wraper">
		<div id="cd-zoom-in"></div>
		<div id="cd-zoom-out"></div>
		<div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992" data-marker="images/cd-icon-location.png">
			<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Agan+Dankaro+St,+Makurdi-Benue.+Nigeria&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
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