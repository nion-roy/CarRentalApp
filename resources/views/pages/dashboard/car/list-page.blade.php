@extends('layouts.backend.app')

@section('title', 'All Cars')

@section('main_content')
	@include('components.car.car-list')
@endsection
