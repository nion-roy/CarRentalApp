<section id="section-cars" class="bg-gray-100">
	<div class="container">
		<div class="row">
			@include('components.frontend.dashboard-sidebar')

			<div class="col-lg-9">

				<div class="card padding30 rounded-5 mb25">
					<h4>My All Orders</h4>

					<table class="table de-table">
						<thead>
							<tr>
								<th scope="col"><span class="fs-12 text-gray">#</span></th>
								<th scope="col"><span class="fs-12 text-gray">Car Details</span></th>
								<th scope="col"><span class="fs-12 text-gray">Pick Up Date</span></th>
								<th scope="col"><span class="fs-12 text-gray">Return Date</span></th>
								<th scope="col"><span class="fs-12 text-gray">Total Days</span></th>
								<th scope="col"><span class="fs-12 text-gray">Total Cost</span></th>
								<th scope="col"><span class="fs-12 text-gray">Status</span></th>
								<th scope="col"><span class="fs-12 text-gray">Action</span></th>
							</tr>
						</thead>
						<tbody>
							@forelse (getOrders() as $key => $order)
								<tr>
									<td>{{ getStrPad($key + 1) }}</td>
									<td>
										<span><strong>Car: </strong> {{ $order->car->name }}</span> <br>
										<span><strong>Brand: </strong> {{ $order->car->brand }}</span>
									</td>
									<td>{{ Carbon\Carbon::parse($order->start_date)->format('d-M-Y') }}</td>
									<td>{{ Carbon\Carbon::parse($order->end_date)->format('d-M-Y') }}</td>
									<td>{{ getStrPad(getNumberOfDayCounts($order->start_date, $order->end_date)) }}</td>
									<td>BD {{ $order->total_cost }}</td>
									<td>
										@if ($order->status == 1)
											<span class="badge rounded-pill bg-warning">Ongoing</span>
										@elseif ($order->status == 2)
											<span class="badge rounded-pill bg-success">Completed</span>
										@elseif ($order->status == 3)
											<span class="badge rounded-pill bg-danger">Canceled</span>
										@endif
									</td>
									<td>
										@php
											$runningCar = Carbon\Carbon::parse($order->start_date)->format('d-M-Y');
											$today = Carbon\Carbon::now()->format('d-M-Y');
										@endphp

										@if ($today >= $runningCar)
											<button class="btn btn-success shadow-none btn-sm waves-effect" disabled><i class="fa fa-close me-2"></i>Ongoing</button>
										@elseif ($order->status == 1)
											<a href="{{ route('customer.order.cancel', $order->id) }}" class="btn btn-danger shadow-none btn-sm waves-effect"><i class="fa fa-close me-2"></i>Cancel</a>
										@else
											<button class="btn btn-danger shadow-none btn-sm waves-effect" disabled><i class="fa fa-close me-2"></i>Cancel</button>
										@endif
									</td>
								</tr>

							@empty
								<tr class="text-center text-danger">
									<td colspan="12">Orders Not Found.!</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
