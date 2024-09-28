<!-- start page title -->
<div class="py-3 py-lg-4">
	<div class="row">
		<div class="col-lg-6">
			<h4 class="page-title mb-0">Customer Rental History</h4>
		</div>
		<div class="col-lg-6">
			<div class="d-none d-lg-block">
				<ol class="breadcrumb m-0 float-end">
					<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.customers.index') }}">Customers</a></li>
					<li class="breadcrumb-item active">Customer Rental History</li>
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
							<th>Car Details</span></th>
							<th>Pick Up Date</span></th>
							<th>Return Date</span></th>
							<th>Total Days</span></th>
							<th>Total Cost</span></th>
							<th>Status</span></th>
						</tr>
					</thead>
					<tbody>
 

						@forelse ($rentalHistories->rentals as $key => $rental)
							<tr>
								<td>{{ getStrPad($key + 1) }}</td>
								<td>
									<span><strong>Car: </strong> {{ $rental->car->name }}</span> <br>
									<span><strong>Brand: </strong> {{ $rental->car->brand }}</span>
								</td>
								<td>{{ Carbon\Carbon::parse($rental->start_date)->format('d-M-Y') }}</td>
								<td>{{ Carbon\Carbon::parse($rental->end_date)->format('d-M-Y') }}</td>
								<td>{{ getStrPad(getNumberOfDayCounts($rental->start_date, $rental->end_date)) }}</td>
								<td>BD {{ $rental->total_cost }}</td>
								<td>
									@if ($rental->status == 1)
										<span class="badge rounded-pill bg-warning">Ongoing</span>
									@elseif ($rental->status == 2)
										<span class="badge rounded-pill bg-success">Completed</span>
									@elseif ($rental->status == 3)
										<span class="badge rounded-pill bg-danger">Canceled</span>
									@endif
								</td>
							</tr>

						@empty
							<tr class="text-center text-danger">
								<td colspan="12">Rentals Not Found.!</td>
							</tr>
						@endforelse
					</tbody>

				</table>
			</div>
		</div>
	</div>
</div>
