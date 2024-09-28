<div class="navbar-custom">
	<div class="topbar">
		<div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">
			<!-- Sidebar Menu Toggle Button -->
			<button class="button-toggle-menu">
				<i class="mdi mdi-menu"></i>
			</button>
		</div>

		<ul class="topbar-menu d-flex align-items-center gap-4">

			<li class="d-none d-md-inline-block">
				<a class="nav-link" href="javascript:void(0)" data-bs-toggle="fullscreen">
					<i class="mdi mdi-fullscreen font-size-24"></i>
				</a>
			</li>



			<li class="nav-link" id="theme-mode">
				<i class="bx bx-moon font-size-24"></i>
			</li>

			<li class="dropdown">
				<a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="false" aria-expanded="false">
					<img src="{{ asset('backend') }}/images/users/avatar-4.jpg" alt="user-image" class="rounded-circle">
					<span class="ms-1 d-none d-md-inline-block">{{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i> </span>
				</a>
				<div class="dropdown-menu dropdown-menu-end profile-dropdown ">
					<!-- item-->
					<div class="dropdown-header noti-title">
						<h6 class="text-overflow m-0">Welcome !</h6>
					</div>

					<div class="dropdown-divider"></div>

					<!-- item-->
					<form action="{{ route('admin.logout') }}" method="post">
						@csrf
						<button class='dropdown-item notify-item waves-light btn w-100'>
							<i class="fe-log-out"></i>
							<span>Logout</span>
						</button>
					</form>

				</div>
			</li>

		</ul>
	</div>
</div>
