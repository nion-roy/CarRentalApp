<!-- start page title -->
<div class="py-3 py-lg-4">
	<div class="row">
		<div class="col-lg-6">
			<h4 class="page-title mb-0">Cars</h4>
		</div>
		<div class="col-lg-6">
			<div class="d-none d-lg-block">
				<ol class="breadcrumb m-0 float-end">
					<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
					<li class="breadcrumb-item active">Cars List</li>
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
				<table class="table table-striped align-middle">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Brand</th>
							<th>Model</th>
							<th>Year of Manufacture</th>
							<th>Car Type</th>
							<th>Daily Rent (BD)</th>
							<th>Availabilty</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						@forelse($cars as $key => $car)
							<tr>
								<td>{{ getStrPad($key + 1) }}</td>
								<td> {{ $car->name }} </td>
								<td>{{ $car->brand }}</td>
								<td>{{ $car->model }}</td>
								<td>{{ $car->year }}</td>
								<td>{{ $car->car_type }}</td>
								<td>{{ $car->daily_rent_price }} TK</td>
								<td>
									@if ($car->availability == 1)
										<span class="px-2 py-1 text-white bg-success rounded">Available</span>
									@else
										<span class="px-2 py-1 text-white bg-danger rounded">Not Available</span>
									@endif
								</td>
								<td>
									@if ($car->image == 'car.png')
										<i class="fa fa-car img-fluid rounded img-thumbnail fa-2x"></i>
									@else
										<img src="{{ asset($car->image) }}" class="img-fluid rounded img-thumbnail" style="width: 40px; height: 40px" alt="{{ $car->name }}" />
									@endif
								</td>
								<td class="d-flex align-items-center gap-1">
									<a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-success waves-effect"><i class="fa fa-edit"></i></a>
									<form action="{{ route('admin.cars.destroy', $car->id) }}" method="post">
										@csrf
										@method('DELETE')
										<button type="button" class="btn btn-danger waves-effect delete-button"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="12" class="text-center">No cars found.</td>
							</tr>
						@endforelse

					</tbody>
				</table>

				<!-- Pagination -->
				@if ($cars->links())
					{{ $cars->withQueryString()->links() }}
				@endif

			</div>
		</div>
	</div>
</div>
