{{-- inlude the masterpage of the content --}}
@extends('layout.main') 
@push('title-page')
    <title>Home | Laravel</title>
@endpush
{{-- setting the content of the section element of the page --}}
@section('content')
    <h2>
        Index Page
    </h2>
@endsection