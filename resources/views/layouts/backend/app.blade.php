<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('title') - Car Rental</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
		<meta content="Myra Studio" name="author" />

		<!-- App favicon -->
		<link rel="shortcut icon" href="{{ asset('backend') }}/images/favicon.ico">

		<link href="{{ asset('backend') }}/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

		<!-- Sweet Alert css -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.4/sweetalert2.min.css" />


		<!-- App css -->
		<link href="{{ asset('backend') }}/css/style.min.css" rel="stylesheet" type="text/css">
		<link href="{{ asset('backend') }}/css/icons.min.css" rel="stylesheet" type="text/css">
		<style>
			.form-control,
			.form-select {
				/* border: 1px solid rgba(32, 183, 153, .25) !important; */
				border: 1px solid rgba(0, 0, 0, 0.125) !important;
			}

			.form-control.is-invalid,
			.form-select.is-invalid {
				border-color: var(--bs-danger) !important;
			}

			.btn:focus,
			.form-control:focus,
			.form-select:focus {
				box-shadow: none !important;
			}

			.small.text-muted,
			.pagination {
				margin: 0;
			}
		</style>
	</head>

	<body>

		<!-- Begin page -->
		<div class="layout-wrapper">

			<!-- ========== Left Sidebar ========== -->
			@include('layouts.backend.sidebar')



			<!-- ============================================================== -->
			<!-- Start Page Content here -->
			<!-- ============================================================== -->

			<div class="page-content">

				<!-- ========== Topbar Start ========== -->
				@include('layouts.backend.topbar')
				<!-- ========== Topbar End ========== -->

				<div class="px-3">

					<!-- Start Content-->
					<div class="container-fluid">

						@yield('main_content')


					</div> <!-- container -->

				</div> <!-- content -->

				<!-- Footer Start -->
				<footer class="footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<div>
									{{ date('Y') }} © CarRental
								</div>
							</div>
							<div class="col-md-6">
								<div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
									<p class="mb-0">Design & Develop by <a href="" target="_blank">Nion Roy</a> </p>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<!-- end Footer -->

			</div>

			<!-- ============================================================== -->
			<!-- End Page content -->
			<!-- ============================================================== -->

		</div>
		<!-- END wrapper -->

		<!-- App js -->
		<script src="{{ asset('backend') }}/js/vendor.min.js"></script>
		<script src="{{ asset('backend') }}/js/app.js"></script>

		<!-- Dashboard init-->
		<script src="{{ asset('backend') }}/js/pages/dashboard.js"></script>
        
        
		<!-- Sweet Alert js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.4/sweetalert2.min.js"></script>
        
		@include('sweetalert::alert')
        
		<script src="{{ asset('backend') }}/js/config.js"></script>



	</body>


</html>
