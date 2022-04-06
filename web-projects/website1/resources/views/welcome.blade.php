{{-- inlude the masterpage of the content --}}
@extends('layout.main')
@push('title-page')
    <title>Welcome | Laravel</title>
@endpush

{{-- setting the content of the section element of the page --}}
@section('content')
    <h2>
        Welcome to Website
    </h2>
    <h2>Learning Laravel </h2>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
@endsection
