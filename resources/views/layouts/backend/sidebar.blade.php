<div class="main-menu">
	<!-- Brand Logo -->
	<div class="logo-box">
		<!-- Brand Logo Light -->
		<a class='logo-light' href='{{ route('admin.dashboard') }}'>
			<h3 class='text-white m-0 logo-lg'><i class="fa fa-cab me-2"></i>Car Rentaly</h3>
		</a>
		<a class='logo-light' href='{{ route('admin.dashboard') }}'>
			<h3 class='text-white m-0 logo-sm'><i class="fa fa-cab"></i></h3>
		</a>
	</div>

	<!--- Menu -->
	<div data-simplebar>
		<ul class="app-menu">

			<li class="menu-title">Menu</li>

			<li class="menu-item">
				<a class='menu-link waves-effect waves-light' href='{{ route('admin.dashboard') }}'>
					<span class="menu-icon"><i class="bx bx-home-smile"></i></span>
					<span class="menu-text"> Dashboards </span>
				</a>
			</li>


			<li class="menu-item {{ Request::is('admin/car*') ? 'active' : '' }}">
				<a href="#menuCar" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
					<span class="menu-icon"><i class="bx bx-car"></i></span>
					<span class="menu-text"> Car </span>
					<span class="menu-arrow"></span>
				</a>
				<div class="collapse" id="menuCar">
					<ul class="sub-menu">
						<li class="menu-item">
							<a class='menu-link' href='{{ route('admin.cars.index') }}'>
								<span class="menu-text">All Car</span>
							</a>
						</li>
						<li class="menu-item">
							<a class='menu-link' href='{{ route('admin.cars.create') }}'>
								<span class="menu-text">Add New Car</span>
							</a>
						</li>
					</ul>
				</div>
			</li>



			<li class="menu-item {{ Request::is('admin/rentals*') ? 'active' : '' }}">
				<a href="#menuRental" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
					<span class="menu-icon"><i class="bx bx-check-square"></i></span>
					<span class="menu-text"> Rental </span>
					<span class="menu-arrow"></span>
				</a>
				<div class="collapse" id="menuRental">
					<ul class="sub-menu">
						<li class="menu-item">
							<a class='menu-link' href='{{ route('admin.rentals.index') }}'>
								<span class="menu-text">All Rental</span>
							</a>
						</li>
						<li class="menu-item">
							<a class='menu-link' href='{{ route('admin.rentals.create') }}'>
								<span class="menu-text">Add New Rental</span>
							</a>
						</li>
					</ul>
				</div>
			</li>



			<li class="menu-item {{ Request::is('admin/customers*') || Request::is('admin/rental-histories*') ? 'active' : '' }}">
				<a href="#menuCustomer" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
					<span class="menu-icon"><i class="bx bx-user"></i></span>
					<span class="menu-text"> Customer </span>
					<span class="menu-arrow"></span>
				</a>
				<div class="collapse" id="menuCustomer">
					<ul class="sub-menu">
						<li class="menu-item">
							<a class='menu-link' href='{{ route('admin.customers.index') }}'>
								<span class="menu-text">All Customer</span>
							</a>
						</li>
						<li class="menu-item">
							<a class='menu-link' href='{{ route('admin.customers.create') }}'>
								<span class="menu-text">Add New Customer</span>
							</a>
						</li>
					</ul>
				</div>
			</li>


			<li class="menu-item">
				<form action="{{ route('admin.logout') }}" method="post">
					@csrf
					<button class='menu-link waves-effect waves-light btn w-100'>
						<span class="menu-icon"><i class="bx bx-log-out"></i></span>
						<span class="menu-text"> Logout </span>
					</button>
				</form>
			</li>


		</ul>
	</div>
</div>
