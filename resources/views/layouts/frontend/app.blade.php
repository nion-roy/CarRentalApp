<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">


		<title>@yield('title') Car Rentaly</title>
		<link rel="icon" href="{{ asset('frontend') }}/images/icon.png" type="image/gif" sizes="16x16">

		<!-- Sweet Alert css -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.4/sweetalert2.min.css" />

		<!-- CSS Files
				================================================== -->
		<link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
		<link href="{{ asset('frontend') }}/css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
		<link href="{{ asset('frontend') }}/css/plugins.css" rel="stylesheet" type="text/css">
		<link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet" type="text/css">
		<link href="{{ asset('frontend') }}/css/coloring.css" rel="stylesheet" type="text/css">
		<!-- color scheme -->
		<link id="colors" href="{{ asset('frontend') }}/css/colors/scheme-01.css" rel="stylesheet" type="text/css">

		<style>
			.form-control.is-invalid,
			.form-select.is-invalid {
				border-color: var(--bs-danger) !important;
			}
		</style>
	</head>

	<body onload="initialize()">
		<div id="wrapper">

			<!-- page preloader begin -->
			<div id="de-preloader" class="d-none"></div>
			<!-- page preloader close -->

			<!-- header begin -->
			@include('components.frontend.navbar')
			<!-- header close -->

			<!-- content begin -->
			<div class="no-bottom no-top" id="content">
				<div id="top"></div>

				@yield('main_content')

			</div>
			<!-- content close -->
			<a href="javascript:void(0)" id="back-to-top"></a>

			<!-- footer begin -->
			@include('components.frontend.footer')
			<!-- footer close -->
		</div>
		<!-- Javascript Files
				================================================== -->
		<script src="{{ asset('frontend') }}/js/config.js"></script>
		<script src="{{ asset('frontend') }}/js/plugins.js"></script>
		<script src="{{ asset('frontend') }}/js/designesia.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgiM7ogCAA2Y5pgSk2KXZfxF5S_1jsptA&amp;libraries=places&amp;callback=initPlaces" async="" defer=""></script>

		<!-- Sweet Alert js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.4/sweetalert2.min.js"></script>

		@include('sweetalert::alert')

		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		</script>

		@stack('js')

	</body>

</html>
