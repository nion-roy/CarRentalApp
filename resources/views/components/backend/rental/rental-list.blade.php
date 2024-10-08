<!-- start page title -->
<div class="py-3 py-lg-4">
	<div class="row">
		<div class="col-lg-6">
			<h4 class="page-title mb-0">Rentals</h4>
		</div>
		<div class="col-lg-6">
			<div class="d-none d-lg-block">
				<ol class="breadcrumb m-0 float-end">
					<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
					<li class="breadcrumb-item active">Rentals List</li>
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
							<th>Customer Name</th>
							<th>Car Details</th>
							<th>Rental Date</th>
							<th>Total Days</th>
							<th>Total Cost (BD)</th>
							<th>Confirm Data</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($rentals as $key => $rental)
							<tr>
								<td>{{ getStrPad($key + 1) }}</td>
								<td>{{ $rental->user->name }}</td>
								<td>
									<span><strong>Car:</strong> {{ $rental->car->name }}</span> <br>
									<span><strong>Brand:</strong> {{ $rental->car->brand }}</span>
								</td>
								<td>{{ Carbon\Carbon::parse($rental->start_date)->format('d-M-Y') }} to {{ Carbon\Carbon::parse($rental->end_date)->format('d-M-Y') }}</td>
								<td>{{ getStrPad(getNumberOfDayCounts($rental->start_date, $rental->end_date)) }} Day</td>
								<td>{{ $rental->total_cost }} TK</td>
								<td>{{ $rental->created_at->format('d-M-Y') }} / {{ $rental->created_at->format('h:i A') }}</td>
								<td>
									<form id="rental-status-form" action="{{ route('admin.rental-status', $rental->id) }}" method="post">
										@csrf
										<select name="status" id="status" class="form-select" onchange="this.form.submit()">
											<option value="1" {{ $rental->status == 1 ? 'selected' : '' }}>Ongoing</option>
											<option value="2" {{ $rental->status == 2 ? 'selected' : '' }}>Completed</option>
											<option value="3" {{ $rental->status == 3 ? 'selected' : '' }}>Canceled</option>
										</select>
									</form>

								</td>
								<td class="d-flex align-items-center gap-1">
									<a href="{{ route('admin.rentals.edit', $rental->id) }}" class="btn btn-success waves-effect"><i class="fa fa-edit"></i></a>
									<form action="{{ route('admin.rentals.destroy', $rental->id) }}" method="post">
										@csrf
										@method('DELETE')
										<button type="button" class="btn btn-danger waves-effect delete-button"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="12" class="text-center">No rentals found.</td>
							</tr>
						@endforelse
					</tbody>
				</table>

				<!-- Pagination -->
				@if ($rentals->links())
					{{ $rentals->withQueryString()->links() }}
				@endif

			</div>
		</div>
	</div>
</div>
