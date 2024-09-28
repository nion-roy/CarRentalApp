@extends('layouts.frontend.app')

@section('title', 'Profile - ')

@section('main_content')
	<!-- section begin -->
	<section id="subheader" class="jarallax text-light bg-white">
		<div class="center-y relative text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center ">
						<h1 class="text-black">Profile</h1>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- section close -->



@include('components.frontend.profile')

@endsection
