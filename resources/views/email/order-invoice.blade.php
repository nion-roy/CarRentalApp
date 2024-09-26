<div>
	<h4>Hi {{ $user->name }}!</h4>
	<h4>Car Name: {{ $car->name }} ({{ $car->model }})</h4>
	<h4>Start Date: {{ $rental->start_date }}</h4>
	<h4>End Date: {{ $rental->end_date }}</h4>
	<h4>Total Cost: {{ $rental->total_cost }}</h4>
</div>
