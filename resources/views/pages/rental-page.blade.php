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

				@forelse (getCars() as $car)
					<div class="col-xl-4 col-lg-6">
						<div class="de-item mb30">
							<div class="d-img">
								@if ($car->image == 'car.png' || $car->image == null)
									<img src="{{ asset('default/car.jpg') }}" class="img-fluid" alt="{{ $car->name }}">
								@else
									<img src="{{ asset($car->image) }}" class="img-fluid" alt="{{ $car->name }}">
								@endif
							</div>
							<div class="d-info">
								<div class="d-text">
									<div class="d-flex align-items-center justify-content-between border-bottom pb-3">
										<h4 class="d-inline-block">{{ $car->name }}</h4>
										<div>
											<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">{{ $car->model }}</span>
											<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">{{ $car->brand }}</span>
										</div>
									</div>
									<div class="d-price">
										Daily rate from <span>BD {{ $car->daily_rent_price }}</span> <a class="btn-main" href="car-single.html">Rent Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				@empty
					<div class="col-xl-12 text-center">
						<h4>Cars not found.!</h4>
					</div>
				@endforelse


			</div>
		</div>
	</section>


	@include('components.frontend.timeline')
@endsection
