<!-- start page title -->
<div class="py-3 py-lg-4">
	<div class="row">
		<div class="col-lg-6">
			<h4 class="page-title mb-0">New Rental</h4>
		</div>
		<div class="col-lg-6">
			<div class="d-none d-lg-block">
				<ol class="breadcrumb m-0 float-end">
					<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.rentals.index') }}">Rentals</a></li>
					<li class="breadcrumb-item active">New Rental Create</li>
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
				<form action="{{ route('admin.rentals.update', $rental->id) }}" method="POST">
					@csrf
					@method('PUT')

					@include('alert-message.alert-message')

					<div class="row">
						<div class="form-gorup col-md-6 mb-3">
							<label for="user" class="form-label">User<span class="text-danger">*</span></label>
							<select name="user" id="user" class="form-select @error('user') is-invalid @enderror">
								<option value="">Select User</option>
								@foreach ($users as $user)
									<option value="{{ $user->id }}" {{ $user->id == $rental->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
								@endforeach
							</select>
							@error('user')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="car" class="form-label">Car<span class="text-danger">*</span></label>
							<select name="car" id="car" class="form-select @error('car') is-invalid  @enderror">
								<option value="">Select Car</option>
								@foreach ($cars as $car)
									<option value="{{ $car->id }}" {{ $car->id == $rental->car_id ? 'selected' : '' }}>{{ $car->name }}</option>
								@endforeach
							</select>
							@error('car')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="start_date" class="form-label">Start Date<span class="text-danger">*</span></label>
							<input type="date" name="start_date" id="start_date" class="form-control @error('start_date') is-invalid @enderror" placeholder="Enter start date" value="{{ $rental->start_date }}">
							@error('start_date')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="end_date" class="form-label">End Date<span class="text-danger">*</span></label>
							<input type="date" name="end_date" id="end_date" class="form-control @error('end_date') is-invalid @enderror" placeholder="Enter end date" value="{{ $rental->end_date }}">
							@error('end_date')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>


						<div class="form-gorup col-md-6 mb-3">
							<label for="total_cost" class="form-label">Total Cost<span class="text-danger">*</span></label>
							<input type="number" min="0" name="total_cost" id="total_cost" class="form-control @error('total_cost') is-invalid @enderror" placeholder="Enter total cost" value="{{ $rental->total_cost }}">
							@error('total_cost')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

					</div>

					<div class="form-gorup">
						<a href="{{ route('admin.rentals.index') }}" class="btn btn-danger waves-effect"><i class="fa fa-arrow-left me-2"></i>Back Now</a>
						<button class="btn btn-success waves-effect"><i class="fa fa-upload me-2"></i>Update Now</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
