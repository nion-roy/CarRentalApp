<section id="section-hero" aria-label="section" class="jarallax">
	<img src="{{ asset('frontend') }}/images/background/1.jpg" class="jarallax-img" alt="">
	<div class="container">
		<div class="row align-items-center">

			<div class="col-lg-12">
				<div class="spacer-single sm-hide"></div>
				<div class="p-4 rounded-3 shadow-soft" data-bgcolor="#ffffff">

					<div id="step-1" class="row">
						<div class="col-lg-4 mb20">
							<h5>Choose Car</h5>
							<select class="form-select" name="car" id="car">
								<option value="" disabled selected>Select a Car</option>
								@foreach (getCars() as $car)
									<option value="{{ $car->id }}" {{ old('car') == $car->id ? 'selected' : '' }}>{{ $car->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-lg-4 mb20">
							<h5>Pick Up Date</h5>
							<input type="date" class="form-control" id="pick_up_date" name="pick_up_date" value="">
						</div>

						<div class="col-lg-4 mb20">
							<h5>Return Date</h5>
							<input type="date" class="form-control" id="return_date" name="return_date" value="">
						</div>

						<div class="col-lg-12">
							<input type='button' onclick="carBookForm()" id='send_message' value='Find a Vehicle' class="btn-main pull-right">
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

		const carSelect = document.getElementById('car');
		const pickUpDate = document.getElementById('pick_up_date').value;
		const returnDate = document.getElementById('return_date').value;

		// Get the selected car's name
		const selectedCar = carSelect.options[carSelect.selectedIndex].text;

		// Check if all fields are filled
		if (!selectedCar || !pickUpDate || !returnDate) {
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
			car: carSelect.value,
			pick_up_date: pickUpDate,
			return_date: returnDate
		};

		// Perform the AJAX request
		$.ajax({
			type: "POST",
			url: "car-book",
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
