@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('main_content')
	<!-- start page title -->
	<div class="py-3 py-lg-4">
		<div class="row">
			<div class="col-lg-6">
				<h4 class="page-title mb-0">Dashboard</h4>
			</div>
			<div class="col-lg-6">
				<div class="d-none d-lg-block">
					<ol class="breadcrumb m-0 float-end">
						<li class="breadcrumb-item"><a href="javascript: void(0);">Dashtrap</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- end page title -->

	<div class="row">
		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<h4 class="mb-2 text-success fw-bold"> Total Sales</h4>
							<h3 class="mb-0"> {{ number_format($rentals->where('status', 3)->sum('total_cost'), 2) }} TK</h3>
						</div>
						<i class="fa fa-money-bill-1 text-success fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<h4 class="mb-2 text-success fw-bold">Total Customers</h4>
							<h3 class="mb-0"> {{ $customers->count() }}</h3>
						</div>
						<i class="fa fa-user text-success fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<h4 class="mb-2 text-success fw-bold">Total Cars</h4>
							<h3 class="mb-0"> {{ $car }}</h3>
						</div>
						<i class="fa fa-car text-success fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<h4 class="mb-2 text-success fw-bold">Total Rentals</h4>
							<h3 class="mb-0"> {{ $rentals->count() }}</h3>
						</div>
						<i class="fa fa-check-square text-success fa-3x"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row-->

	<hr>

	<div class="row mt-4">
		<div class="col-md-6">
			<div class="d-flex align-items-end justify-content-between mb-3">
				<h4>Latest Rental History</h4>
				<a href="{{ route('admin.rentals.index') }}" class="btn btn-success waves-effect btn-sm"><i class="fa fa-eye"></i></a>
			</div>
			<table class="table table-striped align-middle border">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Car</th>
						<th>Booking Date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($rentals->take(5) as $key => $rental)
						<tr>
							<td>{{ $key + 1 }}</td>
							<td>{{ $rental->user->name }}</td>
							<td>{{ $rental->car->name }}</td>
							<td>{{ Carbon\Carbon::parse($rental->start_date)->format('d-M-Y') }} to {{ Carbon\Carbon::parse($rental->start_date)->format('d-M-Y') }}</td>
							<td>
								@if ($rental->statsu == 1)
									<span class="d-block bg-success px-2 py-1 text-white rounded">Active</span>
								@else
									<span class="d-block bg-danger px-2 py-1 text-white rounded">Cancel</span>
								@endif
							</td>
						</tr>
					@empty
						<tr>
							<td colspan="12" class="text-center">No rentals found.</td>
						</tr>
					@endforelse
				</tbody>

			</table>
		</div>

		<div class="col-md-6">
			<div class="d-flex align-items-end justify-content-between mb-3">
				<h4>Latest Customer History</h4>
				<a href="{{ route('admin.customers.index') }}" class="btn btn-success waves-effect btn-sm"><i class="fa fa-eye"></i></a>
			</div>
			<table class="table table-striped align-middle border">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Join Date</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($customers->take(5) as $key => $user)
						<tr>
							<td>{{ $key + 1 }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->created_at->format('d-M-Y') }}</td>
						</tr>
					@empty
						<tr>
							<td colspan="12" class="text-center">No customers found.</td>
						</tr>
					@endforelse
				</tbody>

			</table>
		</div>
	</div>

@endsection
