@extends('layouts.frontend.app')
@section('main_content')
	<!-- section begin -->
	<section id="subheader" class="jarallax text-light bg-white">
		<div class="center-y relative text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center ">
						<h1 class="text-black">Rentals</h1>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- section close -->

	<section id="section-cars">
		<div class="container">
			<div class="row">

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/jeep-renegade.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Jeep Renegade</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>25</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">SUV</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$265</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/bmw-m5.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Mini Cooper</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>79</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">Sedan</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$244</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/ferrari-enzo.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Ferarri Enzo</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>55</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">Exotic Car</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$167</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/ford-raptor.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Ford Raptor</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>89</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">Truck</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$147</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/mini-cooper.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Mini Cooper</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>87</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">Hatchback</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$238</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/vw-polo.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>VW Polo</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>37</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">Hatchback</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$106</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/chevrolet-camaro.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Chevrolet Camaro</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>39</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">Exotic Car</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$245</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/hyundai-staria.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Hyundai Staria</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>23</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">Minivan</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$191</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/toyota-rav.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Toyota Rav 4</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>63</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">SUV</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$114</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/bentley.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Bentley</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>45</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">SUV</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$299</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/lexus.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Lexus</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>61</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">Sedan</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$131</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="de-item mb30">
						<div class="d-img">
							<img src="{{ asset('frontend') }}/images/cars/range-rover.jpg" class="img-fluid" alt="">
						</div>
						<div class="d-info">
							<div class="d-text">
								<h4>Range Rover</h4>
								<div class="d-item_like">
									<i class="fa fa-heart"></i><span>69</span>
								</div>
								<div class="d-atr-group">
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/1-green.svg" alt="">5</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/2-green.svg" alt="">2</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">4</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">Exotic Car</span>
								</div>
								<div class="d-price">
									Daily rate from <span>$228</span>
									<a class="btn-main" href="car-single.html">Rent Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>



			</div>
		</div>
	</section>


	@include('components.frontend.timeline')
@endsection
