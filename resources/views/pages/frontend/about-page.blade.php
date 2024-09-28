@extends('layouts.frontend.app')

@section('title', 'About Us - ')

@section('main_content')

	<!-- section begin -->
	<section id="subheader" class="jarallax text-light bg-white">
		<div class="center-y relative text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center ">
						<h1 class="text-black">About Us</h1>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- section close -->

	<section>
		<div class="container">
			<div class="row g-5">
				<div class="col-lg-6 wow fadeInRight">
					<h2>We offer customers a wide range of <span class="id-color">commercial cars</span> and <span class="id-color">luxury cars</span> for any occasion.</h2>
				</div>
				<div class="col-lg-6 wow fadeInRight" data-wow-delay=".25s">
					At Rentaly, we are dedicated to providing exceptional car rental services to our valued customers. With a commitment to quality, convenience, and customer satisfaction, we strive to make every rental experience a seamless and enjoyable one. We understand that every customer has unique needs and preferences when it comes to renting a car. That's why we maintain a diverse fleet of well-maintained vehicles to cater to various requirements. From compact cars for solo travelers to spacious SUVs for families, we have a wide range of options to choose from.
				</div>
			</div>
			<div class="spacer-double"></div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6 mb-sm-30">
					<div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
						<h3 class="timer" data-to="15425" data-speed="3000">0</h3>
						Completed Orders
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mb-sm-30">
					<div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
						<h3 class="timer" data-to="8745" data-speed="3000">0</h3>
						Happy Customers
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mb-sm-30">
					<div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
						<h3 class="timer" data-to="235" data-speed="3000">0</h3>
						Vehicles Fleet
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mb-sm-30">
					<div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
						<h3 class="timer" data-to="15" data-speed="3000">0</h3>
						Years Experience
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('components.frontend.features')
	@include('components.frontend.timeline')
@endsection
