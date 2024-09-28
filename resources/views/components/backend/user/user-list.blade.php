<!-- start page title -->
<div class="py-3 py-lg-4">
	<div class="row">
		<div class="col-lg-6">
			<h4 class="page-title mb-0">Customers</h4>
		</div>
		<div class="col-lg-6">
			<div class="d-none d-lg-block">
				<ol class="breadcrumb m-0 float-end">
					<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
					<li class="breadcrumb-item active">Customers List</li>
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
							<th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
							<th>Role</th>
							<th>Join Date</th>
							<th>Rental History</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($users as $key => $user)
							<tr>
								<td>{{ getStrPad($key + 1) }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->phone ?? 'N/A' }}</td>
								<td>{{ $user->address ?? 'N/A' }}</td>
								<td>{{ $user->role }}</td>
								<td>{{ $user->created_at->format('d-M-Y') }} / {{ $user->created_at->format('h:i A') }}</td>
								<td><a href="{{ route('admin.rental-histories', $user->id) }}" class="btn btn-success waves-effect"><i class="fa fa-eye"></i></a></td>
								<td class="d-flex align-items-center gap-1">
									<a href="{{ route('admin.customers.edit', $user->id) }}" class="btn btn-success waves-effect"><i class="fa fa-edit"></i></a>
									<form action="{{ route('admin.customers.destroy', $user->id) }}" method="post">
										@csrf
										@method('DELETE')
										<button type="button" class="btn btn-danger waves-effect delete-button"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="12" class="text-center">No users found.</td>
							</tr>
						@endforelse
					</tbody>

				</table>
				<!-- Pagination -->
				@if ($users->links())
					{{ $users->withQueryString()->links() }}
				@endif
			</div>
		</div>
	</div>
</div>
