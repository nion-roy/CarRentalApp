<!-- start page title -->
<div class="py-3 py-lg-4">
	<div class="row">
		<div class="col-lg-6">
			<h4 class="page-title mb-0">Edit Car</h4>
		</div>
		<div class="col-lg-6">
			<div class="d-none d-lg-block">
				<ol class="breadcrumb m-0 float-end">
					<li class="breadcrumb-item"><a href="{{ route('dashboardPage') }}">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="{{ route('cars.index') }}">Cars</a></li>
					<li class="breadcrumb-item active">Edit Create</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- end page title -->

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					@include('alert-message.alert-message')

					<div class="row">
						<div class="form-gorup col-md-6 mb-3">
							<label for="name" class="form-label">Car Name<span class="text-danger">*</span></label>
							<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter car name" value="{{ old('name') ?? $car->name }}">
							@error('name')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="brand" class="form-label">Car Brand<span class="text-danger">*</span></label>
							<input type="text" name="brand" id="brand" class="form-control @error('brand') is-invalid @enderror" placeholder="Enter car brand" value="{{ old('brand') ?? $car->brand }}">
							@error('brand')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="model" class="form-label">Car Model<span class="text-danger">*</span></label>
							<input type="text" name="model" id="model" class="form-control @error('model') is-invalid @enderror" placeholder="Enter car model" value="{{ old('model') ?? $car->model }}">
							@error('model')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="year" class="form-label">Car Year<span class="text-danger">*</span></label>
							<input type="text" name="year" id="year" class="form-control @error('year') is-invalid @enderror" placeholder="Enter car year" value="{{ old('year') ?? $car->year }}">
							@error('year')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="car_type" class="form-label">Car Type<span class="text-danger">*</span></label>
							<input type="text" name="car_type" id="car_type" class="form-control @error('car_type') is-invalid @enderror" placeholder="Enter car type" value="{{ old('car_type') ?? $car->car_type }}">
							@error('car_type')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="daily_rent_price" class="form-label">Car Daily Rent Price<span class="text-danger">*</span></label>
							<input type="number" min="0" name="daily_rent_price" id="daily_rent_price" class="form-control @error('daily_rent_price') is-invalid @enderror" placeholder="Enter car daily rent price" value="{{ old('daily_rent_price') ?? $car->daily_rent_price }}">
							@error('daily_rent_price')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="availability" class="form-label">Availability<span class="text-danger">*</span></label>
							<select name="availability" id="availability" class="form-select @error('availability') is-invalid @enderror">
								<option value="">Select Availability</option>
								<option value="1" {{ $car->availability == 1 ? 'selected' : '' }}>Active</option>
								<option value="0" {{ $car->availability == 0 ? 'selected' : '' }}>Inactive</option>
							</select>
							@error('availability')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-12 mb-3">
							<label for="image" class="form-label">Car Image<span class="text-danger">*</span></label>
							<br>
							@if ($car->image == 'car.png')
								<i class="fa fa-car img-fluid rounded img-thumbnail fa-2x"></i>
							@else
								<img src="{{ asset($car->image) }}" class="img-fluid rounded img-thumbnail" style="width: 40px; height: 40px" alt="{{ $car->name }}" />
							@endif

							<br>
							<input type="file" name="image" id="image" class="mt-2 @error('image') is-invalid @enderror">
							@error('image')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>
					</div>

					<div class="form-gorup">
						<a href="{{ route('cars.index') }}" class="btn btn-danger waves-effect"><i class="fa fa-arrow-left me-2"></i>Back Now</a>
						<button class="btn btn-success waves-effect"><i class="fa fa-save me-2"></i>Submit Now</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
