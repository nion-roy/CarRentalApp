<section id="section-hero" aria-label="section" class="jarallax">
	<div class="v-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 offset-lg-4">
					<div class="padding40 rounded-3 shadow-soft border" data-bgcolor="#ffffff">
						<h4>Forget Password</h4>
						<div class="spacer-10"></div>
						<form id="form_login" class="form-border" method="post" action="{{ route('password.email') }}">
							@csrf
							<div class="field-set mb-2">
								<input type="text" class="form-control m-0 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email address" value="{{ old('email') }}" />
								@error('email')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
							<div id="submit" class="mt-2">
								<input type="submit" id="send_message" value="Forget Password" class="btn-main btn-fullwidth rounded-3" />
							</div>
						</form>
						<div class="title-line">Or&nbsp;sign&nbsp;up&nbsp;</div>
						<div>Have account? <a href="{{ route('login') }}">Log In</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
