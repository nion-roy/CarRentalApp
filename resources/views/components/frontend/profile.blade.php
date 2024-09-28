<section id="section-cars" class="bg-gray-100">
	<div class="container">
		<div class="row">
			@include('components.frontend.dashboard-sidebar')

			<div class="col-lg-9">
				<div class="card padding40  rounded-5">
					<div class="row">
						<div class="col-lg-12">
							<form id="form-create-item" class="form-border" method="post" action="{{ route('customer.profile.update') }}">
								@csrf
								<div class="de_tab tab_simple">

									<ul class="de_nav">
										<li class="active"><span>Profile</span></li>
									</ul>

									<div class="de_tab_content">
										<div class="tab-1">
											<div class="row">
												<div class="col-lg-6 mb20">
													<h5>Name</h5>
													<input type="text" name="name" id="name" class="form-control @error('name') is-invalid  @enderror" value="{{ auth()->user()->name }}" placeholder="Enter full name" />
													@error('name')
														<div class="text-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="col-lg-6 mb20">
													<h5>Email Address</h5>
													<input type="text" name="email" id="email" class="form-control @error('email') is-invalid  @enderror" value="{{ auth()->user()->email }}" placeholder="Enter email" />
													@error('email')
														<div class="text-danger">{{ $message }}</div>
													@enderror
												</div>


												<div class="col-lg-6 mb20">
													<h5>Address</h5>
													<input type="text" name="address" id="address" class="form-control @error('address') is-invalid  @enderror" value="{{ auth()->user()->address }}" placeholder="Enter address" />
													@error('address')
														<div class="text-danger">{{ $message }}</div>
													@enderror
												</div>


												<div class="col-lg-6 mb20">
													<h5>Phone Number</h5>
													<input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid  @enderror" value="{{ auth()->user()->phone }}" placeholder="Enter phone" />
													@error('phone')
														<div class="text-danger">{{ $message }}</div>
													@enderror
												</div>

												<div class="col-lg-6 mb20">
													<h5>New Password</h5>
													<input type="Password" name="password" id="password" class="form-control @error('password') is-invalid  @enderror" placeholder="Enter password" />
													@error('password')
														<div class="text-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="col-lg-6 mb20">
													<h5>Confirm Password</h5>
													<input type="Password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid  @enderror" placeholder="Enter confirm password" />
													@error('password_confirmation')
														<div class="text-danger">{{ $message }}</div>
													@enderror
												</div>

											</div>
										</div>

									</div>
								</div>

								<input type="submit" id="submit" class="btn-main" value="Update profile">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
