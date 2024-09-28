<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>New Order</title>
		<style>
			body {
				font-family: Arial, sans-serif;
				background-color: #f4f4f4;
				margin: 0;
				padding: 0;
			}

			.container {
				width: 100%;
				padding: 20px;
				background-color: #ffffff;
				margin: 0 auto;
				max-width: 600px;
				border: 1px solid #dddddd;
			}

			.header {
				text-align: center;
				background-color: #007bff;
				color: #ffffff;
				padding: 10px 0;
			}

			.header h1 {
				margin: 0;
			}

			.content {
				padding: 20px;
			}

			.content h2 {
				color: #007bff;
			}

			.car-details,
			.rental-details {
				margin: 20px 0;
			}

			.footer {
				text-align: center;
				font-size: 12px;
				color: #777777;
				padding: 10px;
				background-color: #f4f4f4;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<!-- Header Section -->
			<div class="header">
				<h1>New Order</h1>
			</div>

			<!-- Email Body Content -->
			<div class="content">
				<p>Hi <strong>Admin</strong>,</p>
				

				<!-- Car Details -->
				<div class="car-details">
					<h2>Car Details</h2>
					<table style="width: 100%; border-collapse: collapse;">
						<tr>
							<td><strong>Car Name:</strong></td>
							<td>{{ $rental->car->name }}</td>
						</tr>
						<tr>
							<td><strong>Model:</strong></td>
							<td>{{ $rental->car->model }}</td>
						</tr>
						<tr>
							<td><strong>Year:</strong></td>
							<td>{{ $rental->car->year }}</td>
						</tr>
						<tr>
							<td><strong>Daily Rent Price:</strong></td>
							<td>BD {{ $rental->car->daily_rent_price }}</td>
						</tr>
					</table>
				</div>

				<!-- Rental Duration Details -->
				<div class="rental-details">
					<h2>Rental Duration</h2>
					<table style="width: 100%; border-collapse: collapse;">
						<tr>
							<td><strong>Start Date:</strong></td>
							<td>{{ Carbon\Carbon::parse($rental->start_date)->format('d-M-Y') }}</td>
						</tr>
						<tr>
							<td><strong>End Date:</strong></td>
							<td>{{ Carbon\Carbon::parse($rental->end_date)->format('d-M-Y') }}</td>
						</tr>
						<tr>
							<td><strong>Number of Days:</strong></td>
							<td>{{ getStrPad(getNumberOfDayCounts($rental->start_date, $rental->end_date)) }} days</td>
						</tr>
					</table>
				</div>

				<!-- Payment Details -->
				<div class="payment-details">
					<h2>Payment Summary</h2>
					<table style="width: 100%; border-collapse: collapse;">
						<tr>
							<td><strong>Daily Rent Price:</strong></td>
							<td>BD {{ $rental->car->daily_rent_price }}</td>
						</tr>
						<tr>
							<td><strong>Total Days:</strong></td>
							<td>{{ getStrPad(getNumberOfDayCounts($rental->start_date, $rental->end_date)) }}</td>
						</tr>
						<tr>
							<td><strong>Subtotal:</strong></td>
							<td>BD {{ $rental->total_cost }}</td>
						</tr>
						<tr>
							<td><strong>Total Amount:</strong></td>
							<td>BD {{ $rental->total_cost }}</td>
						</tr>
					</table>
				</div>

				<p>If you have any questions or need further assistance, feel free to contact us at <strong>nion.roy22@gmail.com</strong> or call us at <strong>+8801761-115624</strong>.</p>

				<p>We look forward to serving you!</p>

				<p>Best Regards,</p>
				<p><strong>Car Rentals Team</strong></p>
			</div>

			<!-- Footer Section -->
			<div class="footer">
				<p>&copy; {{ date('Y') }} Car Rentals. All rights reserved.</p>
				<p><a href="https://www.facebook.com/nion.roy22" style="color: #007bff;">Visit our website</a></p>
			</div>
		</div>
	</body>

</html>
