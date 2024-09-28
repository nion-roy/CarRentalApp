<section id="section-cars" class="pt-5">
	<div class="container">
		<div class="row">

			<div class="col-xl-6 col-lg-6">
				<div class="de-item mb30">
					<div class="d-img">
						@if ($car->image == 'car.png' || $car->image == null)
							<img src="{{ asset('default/car.jpg') }}" class="img-fluid" alt="{{ $car->name }}">
						@else
							<img src="{{ asset($car->image) }}" class="img-fluid" alt="{{ $car->name }}">
						@endif
					</div>
					<div class="d-info">
						<div class="d-text">
							<div class="d-flex align-items-center justify-content-between border-bottom pb-3">
								<h4 class="d-inline-block">{{ $car->name }}</h4>
								<div>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">{{ $car->brand }}</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/4-green.svg" alt="">{{ $car->year }}</span>
									<span class="d-atr"><img src="{{ asset('frontend') }}/images/icons/3-green.svg" alt="">{{ $car->car_type }}</span>
								</div>
							</div>
							<div class="d-price">
								<h4 class="m-0">Daily rate from - BD {{ $car->daily_rent_price }}</h4>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-xl-6 col-lg-6">
				<div class="spacer-single sm-hide"></div>
				<div class="p-4 rounded-3 shadow-soft" data-bgcolor="#ffffff">

					<div id="step-1" class="row">
						<input type="hidden" name="car" id="car" value="{{ $car->id }}">

						<div class="col-lg-6 mb20">
							<h5>Pick Up Date</h5>
							<input type="date" class="form-control" id="pick_up_date" name="pick_up_date" value="">
						</div>

						<div class="col-lg-6 mb20">
							<h5>Return Date</h5>
							<input type="date" class="form-control" id="return_date" name="return_date" value="">
						</div>

						<div class="col-lg-12">
							<input type='button' onclick="carBookForm()" id='send_message' value='Book Now' class="btn-main pull-right">
						</div>
					</div>


				</div>
			</div>


		</div>
	</div>
</section>


<script>
	function carBookForm() {
		// Show loader when the form is submitted
		showLoader();

		// Get form values
		const car = document.getElementById('car').value;
		const pickUpDate = document.getElementById('pick_up_date').value;
		const returnDate = document.getElementById('return_date').value;

		// Check if all fields are filled
		if (!pickUpDate || !returnDate) {
			// Hide loader if validation fails
			hideLoader();

			Swal.fire({
				title: 'Error!',
				text: 'Please fill all fields',
				icon: 'error',
				confirmButtonText: 'OK'
			});
			return;
		}

		// Prepare the data to send in the AJAX request
		const data = {
			car: car,
			pick_up_date: pickUpDate,
			return_date: returnDate
		};

		// Perform the AJAX request
		$.ajax({
			type: "POST",
			url: "/car-book", // Add the correct route
			data: data,
			success: function(response) {
				// Hide loader once the request is successful
				hideLoader();

				// Display success message
				Swal.fire({
					title: 'Success!',
					text: 'Car booked successfully!',
					icon: 'success',
					confirmButtonText: 'OK'
				});
			},
			error: function(xhr) {
				// Hide loader in case of an error
				hideLoader();

				// Display an appropriate error message
				if (xhr.status === 400) {
					Swal.fire({
						title: 'Error!',
						text: xhr.responseJSON.error,
						icon: 'error',
						confirmButtonText: 'OK'
					});
				} else {
					Swal.fire({
						title: 'Error!',
						text: 'An unexpected error occurred. Please try again later.',
						icon: 'error',
						confirmButtonText: 'OK'
					});
				}
			}
		});
	}
</script>
