{{-- <div class="container">
	<div class="row justify-content-center align-items-center" style="height: 100vh;">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title text-center fw-bold m-0 py-2">Login</h3>
				</div>
				<div class="card-body">
					<form action="{{ route('login') }}" method="POST">
						@csrf
						<div class="mb-3">
							<label for="email" class="form-label">Email address</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email address">
							@error('email')
								<div class="text-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control @error('email') is-invalid @enderror" id="password" name="password" placeholder="Enter password">
							@error('password')
								<div class="text-danger">{{ $message }}</div>
							@enderror
						</div>
						<button type="submit" class="btn btn-primary w-100">Login</button>
					</form>
				</div>
			</div>
			<div class="text-center mt-3">
				<a href="{{ route('register') }}">Don't have an account? Register</a>
			</div>
		</div>
	</div>
</div> --}}



<section id="section-hero" aria-label="section" class="jarallax">
	<div class="v-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 offset-lg-4">
					<div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
						<h4>Login</h4>
						<div class="spacer-10"></div>
						<form id="form_register" class="form-border" method="post" action="{{ route('login') }}">
							@csrf
							<div class="field-set mb-2">
								<input type="text" class="form-control m-0 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email address" />
								@error('email')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
							<div class="field-set mb-2">
								<input type="password" class="form-control m-0 @error('email') is-invalid @enderror" id="password" name="password" placeholder="Enter password">
								@error('password')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
							<a href="">Forget Password</a>
							<div id="submit" class="mt-2">
								<input type="submit" id="send_message" value="Sign In" class="btn-main btn-fullwidth rounded-3" />
							</div>
						</form>
						<div class="title-line">Or&nbsp;sign&nbsp;up&nbsp;</div>
						<div>Don't have an account? <a href="{{ route('register') }}">Register</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
