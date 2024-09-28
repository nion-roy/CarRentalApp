<!-- start page title -->
<div class="py-3 py-lg-4">
	<div class="row">
		<div class="col-lg-6">
			<h4 class="page-title mb-0">New Customer</h4>
		</div>
		<div class="col-lg-6">
			<div class="d-none d-lg-block">
				<ol class="breadcrumb m-0 float-end">
					<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.customers.index') }}">Customers</a></li>
					<li class="breadcrumb-item active">New Customer Create</li>
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
				<form action="{{ route('admin.customers.store') }}" method="POST">
					@csrf

					@include('alert-message.alert-message')

					<div class="row">
						<div class="form-gorup col-md-6 mb-3">
							<label for="name" class="form-label">Customer Name<span class="text-danger">*</span></label>
							<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter customer name" value="{{ old('name') }}">
							@error('name')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="email" class="form-label">Customer Email<span class="text-danger">*</span></label>
							<input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter customer email" value="{{ old('email') }}">
							@error('email')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="address" class="form-label">Customer Address<span class="text-danger">*</span></label>
							<input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Enter customer address" value="{{ old('address') }}">
							@error('address')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="phone" class="form-label">Customer Phone Number<span class="text-danger">*</span></label>
							<input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter customer phone" value="{{ old('phone') }}">
							@error('phone')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="password" class="form-label">Customer Account Password<span class="text-danger">*</span></label>
							<input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter customer account password" value="{{ old('password') }}">
							@error('password')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>

						<div class="form-gorup col-md-6 mb-3">
							<label for="role" class="form-label">Role<span class="text-danger">*</span></label>
							<select name="role" id="role" class="form-select @error('role') is-invalid @enderror">
								<option value="">Select Role</option>
								<option value="customer" {{ old('role') == 'customer' ? 'selected' : '' }}>Customer</option>
								<option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
							</select>
							@error('role')
								<div class="text-danger"> {{ $message }} </div>
							@enderror
						</div>
					</div>

					<div class="form-gorup">
						<a href="{{ route('admin.customers.index') }}" class="btn btn-danger waves-effect"><i class="fa fa-arrow-left me-2"></i>Back Now</a>
						<button class="btn btn-success waves-effect"><i class="fa fa-save me-2"></i>Submit Now</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
