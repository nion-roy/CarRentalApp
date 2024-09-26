<section id="section-hero" aria-label="section" class="jarallax">
	<img src="{{ asset('frontend') }}/images/background/1.jpg" class="jarallax-img" alt="">
	<div class="container">
		<div class="row align-items-center">

			<div class="col-lg-12">
				<div class="spacer-single sm-hide"></div>
				<div class="p-4 rounded-3 shadow-soft" data-bgcolor="#ffffff">


					<form name="contactForm" id='contact_form' method="post">
						<div id="step-1" class="row">
							<div class="col-lg-6 mb30">
								<h5>What is your vehicle type?</h5>

								<div class="de_form de_radio row g-3">
									<div class="radio-img col-lg-3 col-sm-3 col-6">
										<input id="radio-1a" name="Car_Type" type="radio" value="Residential" checked="checked">
										<label for="radio-1a"><img src="{{ asset('frontend') }}/images/select-form/car.png" alt="">Car</label>
									</div>

									<div class="radio-img col-lg-3 col-sm-3 col-6">
										<input id="radio-1b" name="Car_Type" type="radio" value="Office">
										<label for="radio-1b"><img src="{{ asset('frontend') }}/images/select-form/van.png" alt="">Van</label>
									</div>

									<div class="radio-img col-lg-3 col-sm-3 col-6">
										<input id="radio-1c" name="Car_Type" type="radio" value="Commercial">
										<label for="radio-1c"><img src="{{ asset('frontend') }}/images/select-form/minibus.png" alt="">Minibus</label>
									</div>

									<div class="radio-img col-lg-3 col-sm-3 col-6">
										<input id="radio-1d" name="Car_Type" type="radio" value="Retail">
										<label for="radio-1d"><img src="{{ asset('frontend') }}/images/select-form/sportscar.png" alt="">Prestige</label>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-6 mb20">
										<h5>Pick Up Location</h5>
										<input type="text" name="PickupLocation" onfocus="geolocate()" placeholder="Enter your pickup location" id="autocomplete" autocomplete="off" class="form-control">

										<div class="jls-address-preview jls-address-preview--hidden">
											<div class="jls-address-preview__header">
											</div>
										</div>
									</div>

									<div class="col-lg-6 mb20">
										<h5>Drop Off Location</h5>
										<input type="text" name="DropoffLocation" onfocus="geolocate()" placeholder="Enter your dropoff location" id="autocomplete2" autocomplete="off" class="form-control">

										<div class="jls-address-preview jls-address-preview--hidden">
											<div class="jls-address-preview__header">
											</div>
										</div>
									</div>

									<div class="col-lg-6 mb20">
										<h5>Pick Up Date & Time</h5>
										<div class="date-time-field">
											<input type="text" id="date-picker" name="Pick Up Date" value="">
											<select name="Pick Up Time" id="pickup-time">
												<option selected disabled value="Select time">Time</option>
												<option value="00:00">00:00</option>
												<option value="00:30">00:30</option>
												<option value="01:00">01:00</option>
												<option value="01:30">01:30</option>
												<option value="02:00">02:00</option>
												<option value="02:30">02:30</option>
												<option value="03:00">03:00</option>
												<option value="03:30">03:30</option>
												<option value="04:00">04:00</option>
												<option value="04:30">04:30</option>
												<option value="05:00">05:00</option>
												<option value="05:30">05:30</option>
												<option value="06:00">06:00</option>
												<option value="06:30">06:30</option>
												<option value="07:00">07:00</option>
												<option value="07:30">07:30</option>
												<option value="08:00">08:00</option>
												<option value="08:30">08:30</option>
												<option value="09:00">09:00</option>
												<option value="09:30">09:30</option>
												<option value="10:00">10:00</option>
												<option value="10:30">10:30</option>
												<option value="11:00">11:00</option>
												<option value="11:30">11:30</option>
												<option value="12:00">12:00</option>
												<option value="12:30">12:30</option>
												<option value="13:00">13:00</option>
												<option value="13:30">13:30</option>
												<option value="14:00">14:00</option>
												<option value="14:30">14:30</option>
												<option value="15:00">15:00</option>
												<option value="15:30">15:30</option>
												<option value="16:00">16:00</option>
												<option value="16:30">16:30</option>
												<option value="17:00">17:00</option>
												<option value="17:30">17:30</option>
												<option value="18:00">18:00</option>
												<option value="18:30">18:30</option>
												<option value="19:00">19:00</option>
												<option value="19:30">19:30</option>
												<option value="20:00">20:00</option>
												<option value="20:30">20:30</option>
												<option value="21:00">21:00</option>
												<option value="21:30">21:30</option>
												<option value="22:00">22:00</option>
												<option value="22:30">22:30</option>
												<option value="23:00">23:00</option>
												<option value="23:30">23:30</option>
											</select>
										</div>
									</div>

									<div class="col-lg-6 mb20">
										<h5>Return Date & Time</h5>
										<div class="date-time-field">
											<input type="text" id="date-picker-2" name="Collection Date" value="">
											<select name="Collection Time" id="collection-time">
												<option selected disabled value="Select time">Time</option>
												<option value="00:00">00:00</option>
												<option value="00:30">00:30</option>
												<option value="01:00">01:00</option>
												<option value="01:30">01:30</option>
												<option value="02:00">02:00</option>
												<option value="02:30">02:30</option>
												<option value="03:00">03:00</option>
												<option value="03:30">03:30</option>
												<option value="04:00">04:00</option>
												<option value="04:30">04:30</option>
												<option value="05:00">05:00</option>
												<option value="05:30">05:30</option>
												<option value="06:00">06:00</option>
												<option value="06:30">06:30</option>
												<option value="07:00">07:00</option>
												<option value="07:30">07:30</option>
												<option value="08:00">08:00</option>
												<option value="08:30">08:30</option>
												<option value="09:00">09:00</option>
												<option value="09:30">09:30</option>
												<option value="10:00">10:00</option>
												<option value="10:30">10:30</option>
												<option value="11:00">11:00</option>
												<option value="11:30">11:30</option>
												<option value="12:00">12:00</option>
												<option value="12:30">12:30</option>
												<option value="13:00">13:00</option>
												<option value="13:30">13:30</option>
												<option value="14:00">14:00</option>
												<option value="14:30">14:30</option>
												<option value="15:00">15:00</option>
												<option value="15:30">15:30</option>
												<option value="16:00">16:00</option>
												<option value="16:30">16:30</option>
												<option value="17:00">17:00</option>
												<option value="17:30">17:30</option>
												<option value="18:00">18:00</option>
												<option value="18:30">18:30</option>
												<option value="19:00">19:00</option>
												<option value="19:30">19:30</option>
												<option value="20:00">20:00</option>
												<option value="20:30">20:30</option>
												<option value="21:00">21:00</option>
												<option value="21:30">21:30</option>
												<option value="22:00">22:00</option>
												<option value="22:30">22:30</option>
												<option value="23:00">23:00</option>
												<option value="23:30">23:30</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-12">
								<input type='submit' id='send_message' value='Find a Vehicle' class="btn-main pull-right">
							</div>

						</div>

					</form>
				</div>
			</div>

		</div>
	</div>
</section>
