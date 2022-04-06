{{-- inlude the masterpage of the content --}}
@extends('layout.main') 
@push('title-page')
    <title>User | Laravel</title>
@endpush
{{-- setting the content of the section element of the page --}}
@section('content')
    <h2>
       Id : {{$id}}
    </h2>
    <h2>
       Name : {{$name}}
    </h2>
@endsection