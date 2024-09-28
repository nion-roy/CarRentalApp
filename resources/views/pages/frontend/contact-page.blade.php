@extends('layouts.frontend.app')

@section('title', 'Contact Us - ')

@section('main_content')

	<!-- section begin -->
	<section id="subheader" class="jarallax text-light bg-white">
		<div class="center-y relative text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center ">
						<h1 class="text-black">Contact Us</h1>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- section close -->

	<section aria-label="section">
		<div class="container">
			<div class="row g-custom-x">

				<div class="col-lg-12 mb-sm-30 mb-5">

					<h3>Do you have any question?</h3>

					<form name="contactForm" id="contact_form" class="form-border" method="post" action="#">
						<div class="row">
							<div class="col-md-4 mb10">
								<div class="field-set">
									<input type="text" name="Name" id="name" class="form-control" placeholder="Your Name" required>
								</div>
							</div>
							<div class="col-md-4 mb10">
								<div class="field-set">
									<input type="text" name="Email" id="email" class="form-control" placeholder="Your Email" required>
								</div>
							</div>
							<div class="col-md-4 mb10">
								<div class="field-set">
									<input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
								</div>
							</div>
						</div>

						<div class="field-set mb20">
							<textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
						</div>
						<div id='submit' class="mt20 text-end">
							<input type='submit' id='send_message' value='Send Message' class="btn-main">
						</div>

					</form>
				</div>

				<div class="col-lg-6">
					<div class="de-box mb30">
						<h4>US Office</h4>
						<address class="s1">
							<span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
							<span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
							<span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
							<span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="javascript:void(0)">Download Brochure</a></span>
						</address>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="de-box mb30">
						<h4>AU Office</h4>
						<address class="s1">
							<span><i class="fa fa-map-marker fa-lg"></i>100 Mainstreet Center, Sydney</span>
							<span><i class="fa fa-phone fa-lg"></i>+61 333 9296</span>
							<span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
							<span><i class="fa fa-file-pdf-o fa-lg"></i><a href="javascript:void(0)">Download Brochure</a></span>
						</address>
					</div>
				</div>





			</div>
		</div>

	</section>
@endsection
