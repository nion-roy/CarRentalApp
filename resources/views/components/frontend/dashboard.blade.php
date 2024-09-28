<section id="section-cars" class="bg-gray-100">
	<div class="container">
		<div class="row">
			@include('components.frontend.dashboard-sidebar')

			<div class="col-lg-9">
				<div class="row">

					<div class="col-lg-3 col-6 mb25 order-sm-1">
						<div class="card padding30 rounded-5">
							<div class="symbol mb40">
								<i class="fa id-color fa-2x fa-calendar"></i>
							</div>
							@php
								$order = App\Models\Rental::where('user_id', Auth::id())->count();
							@endphp
							<span class="h1 mb0">{{ getStrPad($order) }}</span>
							<span class="text-gray">Total Orders</span>
						</div>
					</div>

					<div class="col-lg-3 col-6 mb25 order-sm-1">
						<div class="card padding30 rounded-5">
							<div class="symbol mb40">
								<i class="fa id-color fa-2x fa-calendar-check-o"></i>
							</div>
							@php
								$order = App\Models\Rental::where('user_id', Auth::id())->where('status', 3)->orWhere('status', 4)->count();
							@endphp
							<span class="h1 mb0">{{ getStrPad($order) }}</span>
							<span class="text-gray">Approved Orders</span>
						</div>
					</div>

					<div class="col-lg-3 col-6 mb25 order-sm-1">
						<div class="card padding30 rounded-5">
							<div class="symbol mb40">
								<i class="fa id-color fa-2x fa-calendar-times-o"></i>
							</div>
							@php
								$cancelOrder = App\Models\Rental::where('user_id', Auth::id())->where('status', 2)->count();
							@endphp
							<span class="h1 mb0">{{ getStrPad($cancelOrder) }}</span>
							<span class="text-gray">Cancel Orders</span>
						</div>
					</div>

					<div class="col-lg-3 col-6 mb25 order-sm-1">
						<div class="card padding30 rounded-5">
							<div class="symbol mb40">
								<i class="fa id-color fa-2x fa-calendar-times-o"></i>
							</div>
							@php
								$pendingOrder = App\Models\Rental::where('user_id', Auth::id())->where('status', 1)->count();
							@endphp
							<span class="h1 mb0">{{ getStrPad($pendingOrder) }}</span>
							<span class="text-gray">Pending Orders</span>
						</div>
					</div>
				</div>

				<div class="card padding30 rounded-5 mb25">
					<h4>My Recent Orders</h4>

					<table class="table de-table">
						<thead>
							<tr>
								<th scope="col"><span class="fs-12 text-gray">#</span></th>
								<th scope="col"><span class="fs-12 text-gray">Car Detials</span></th>
								<th scope="col"><span class="fs-12 text-gray">Pick Up Date</span></th>
								<th scope="col"><span class="fs-12 text-gray">Return Date</span></th>
								<th scope="col"><span class="fs-12 text-gray">Total Days</span></th>
								<th scope="col"><span class="fs-12 text-gray">Total Cost</span></th>
								<th scope="col"><span class="fs-12 text-gray">Status</span></th>
							</tr>
						</thead>
						<tbody>
							@forelse (getOrders()->take(5) as $key => $order)
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
											<span class="badge rounded-pill bg-success">Ongoing</span>
										@elseif ($order->status == 2)
											<span class="badge rounded-pill bg-success">Completed</span>
										@else
											<span class="badge rounded-pill bg-danger">Cancel</span>
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
