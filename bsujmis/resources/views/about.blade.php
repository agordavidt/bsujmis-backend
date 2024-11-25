@extends('layouts.frontend')
@section('content')



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

@endsection