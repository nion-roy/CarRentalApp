@extends('layouts.frontend.app')

@section('title', 'Cars - ')


@section('main_content')
	<!-- section begin -->
	<section id="subheader" class="jarallax text-light bg-white">
		<div class="center-y relative text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center ">
						<h1 class="text-black">Cars</h1>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- section close -->

	<section id="section-cars" class="pt-5 pb-0">
		<div class="container">
			<div class="row align-items-center">

				<div class="row">

					<div class="col-lg-12 mb-4">
						<div class="form-group">
							<input type="search" placeholder="Enter search value" name="search" value="{{ request('search') }}" class="form-control" oninput="updateURL()">
						</div>
					</div>


					<div class="col-lg-3">
						<div class="form-group">
							<select name="brand" id="brand" class="form-control" onchange="updateURL()">
								<option value="">Selected Brand</option>
								<option value="Hyundai" {{ request('brand') == 'Hyundai' ? 'selected' : '' }}>Hyundai</option>
								<option value="Tesla" {{ request('brand') == 'Tesla' ? 'selected' : '' }}>Tesla</option>
								<option value="Nissan" {{ request('brand') == 'Nissan' ? 'selected' : '' }}>Nissan</option>
								<option value="Audi" {{ request('brand') == 'Audi' ? 'selected' : '' }}>Audi</option>
								<option value="BMW" {{ request('brand') == 'BMW' ? 'selected' : '' }}>BMW</option>
								<option value="Honda" {{ request('brand') == 'Honda' ? 'selected' : '' }}>Honda</option>
								<option value="Toyota" {{ request('brand') == 'Toyota' ? 'selected' : '' }}>Toyota</option>
							</select>
						</div>
					</div>


					<div class="col-lg-3">
						<div class="form-group">
							<select name="car_type" id="car_type" class="form-control" onchange="updateURL()">
								<option value="">Selected Car Type</option>
								<option value="Coupe" {{ request('car_type') == 'Coupe' ? 'selected' : '' }}>Coupe</option>
								<option value="Sedan" {{ request('car_type') == 'Sedan' ? 'selected' : '' }}>Sedan</option>
								<option value="SUV" {{ request('car_type') == 'SUV' ? 'selected' : '' }}>SUV</option>
							</select>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="form-group">
							<input type="number" name="min_price" placeholder="Min Price" value="{{ request('min_price') }}" class="form-control" oninput="updateURL()">
						</div>
					</div>

					<div class="col-lg-3">
						<div class="form-group">
							<input type="number" name="max_price" placeholder="Max Price" value="{{ request('max_price') }}" class="form-control" oninput="updateURL()">
						</div>
					</div>


				</div>

			</div>
		</div>
	</section>

	@include('components.frontend.cars')

	@include('components.frontend.timeline')
@endsection


@push('js')
	<script>
		function updateURL() {
			const brand = document.getElementById('brand').value;
			const carType = document.getElementById('car_type').value;
			const search = document.querySelector('input[name="search"]').value;
			const minPrice = document.querySelector('input[name="min_price"]').value;
			const maxPrice = document.querySelector('input[name="max_price"]').value;
			const searchParams = new URLSearchParams(window.location.search);

			if (brand) {
				searchParams.set('brand', brand);
			} else {
				searchParams.delete('brand');
			}

			if (carType) {
				searchParams.set('car_type', carType);
			} else {
				searchParams.delete('car_type');
			}

			if (search) {
				searchParams.set('search', search);
			} else {
				searchParams.delete('search');
			}

			if (minPrice) {
				searchParams.set('min_price', minPrice);
			} else {
				searchParams.delete('min_price');
			}

			if (maxPrice) {
				searchParams.set('max_price', maxPrice);
			} else {
				searchParams.delete('max_price');
			}

			window.location.search = searchParams.toString();
		}
	</script>
@endpush
