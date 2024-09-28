@if (Route::is('HomePage') || Route::is('RentalPage'))
	<section id="section-cars">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 offset-lg-3 text-center">
					<h2>Our Latest Brand Cars</h2>
					<p>Driving your dreams to reality with an exquisite fleet of versatile vehicles for unforgettable journeys.</p>
					<div class="spacer-20"></div>
				</div>

				<div id="items-carousel" class="owl-carousel wow fadeIn">


					@forelse (getCars()->take(6) as $car)
						<div class="col-12">
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
												<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">{{ $car->brand }}</span>
												<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">{{ $car->car_type }}</span>
											</div>
										</div>
										<div class="d-price">
											Daily rate from <span>BD {{ $car->daily_rent_price }}</span> <a class="btn-main" href="{{ route('CarDetail', $car->id) }}">Rent Now</a>
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
		</div>
	</section>
@else
	<section id="section-cars" class="pt-5">
		<div class="container">
			<div class="row">

				@forelse ($cars as $car)
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
											<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">{{ $car->brand }}</span>
											<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">{{ $car->car_type }}</span>
										</div>
									</div>
									<div class="d-price">
										Daily rate from <span>BD {{ $car->daily_rent_price }}</span> <a class="btn-main" href="{{ route('CarDetail', $car->id) }}">Rent Now</a>
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

				{{ $cars->appends(request()->query())->links('components.frontend.pagination') }}

			</div>
		</div>
	</section>
@endif
