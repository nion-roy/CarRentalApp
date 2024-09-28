<div class="col-lg-3 mb30">
	<div class="card padding30 rounded-5">
		<div class="profile_avatar">
			<div class="profile_img">
				<img src="{{ asset('frontend') }}/images/profile/1.jpg" alt="">
			</div>
			<div class="profile_name">
				<h4>
					{{ auth()->user()->name }}
					<span class="profile_username text-gray">{{ auth()->user()->email }}</span>
				</h4>
			</div>
		</div>
		<div class="spacer-20"></div>
		<ul class="menu-col">
			<li><a href="{{ route('customer.dashboard') }}" class="{{ Request::is('customer/dashboard') ? 'active' : '' }}"><i class="fa fa-home"></i>Dashboard</a></li>
			<li><a href="{{ route('customer.profile') }}" class="{{ Request::is('customer/profile') ? 'active' : '' }}"><i class="fa fa-user"></i>My Profile</a></li>
			<li><a href="{{ route('customer.orders') }}" class="{{ Request::is('customer/orders') ? 'active' : '' }}"><i class="fa fa-calendar"></i>My Orders</a></li>
			<li><a href="{{ route('customer.logout') }}"><i class="fa fa-sign-out"></i>Sign Out</a></li>
		</ul>
	</div>
</div>
