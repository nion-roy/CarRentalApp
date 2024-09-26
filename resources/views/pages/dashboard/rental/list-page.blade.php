@extends('layouts.backend.app')

@section('title', 'All Rentals')

@section('main_content')
	@include('components.rental.rental-list')
@endsection
