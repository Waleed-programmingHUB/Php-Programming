{{-- inlude the masterpage of the content --}}
@extends('layout.main') 
@push('title-page')
    <title>Page-1 | Laravel</title>
@endpush
{{-- setting the content of the section element of the page --}}
@section('content')
        {{-- if blade enities --}}
        @if (empty($username))
        <h2>{{'No username found'}}</h2>  
      @else
          <h2>{{ 'Your name : ' . $username}}</h2>
      @endif
      {!! $title !!}
      
      {{-- html deractives --}}
      @unless ($username == "Ali")
          <h2>Name is not set</h2>
          @endunless
          
      @isset($name)     
          <h2>Name is set</h2>
      @endisset
  
      @for ($i = 0; $i < 10; $i++)
          <h2> {{$i}} </h2>
      @endfor
  
      @php
      $country = [
          "Pakistan",
          "Suadia arabia",
          "United Kingdom",
          "Japan",
          "China",
          "India"
      ];
      $o = 1;    
      
      $province = [
          'Punjab',
          'Sindh',
          'Bolchistan',
          'KPK'
      ]
  
      @endphp
  
      @while ($o <= 10)
          @if ($o == 4)
              @break
          @endif
          <h2>While {{$o++}}</h2>
  
      @endwhile
  
      <label for="label">
          Country
      </label>
      <select>
          <option selected disabled> Select Country</option>
          @foreach ($country as $item => $value)
              <option value="{{$item}}">{{$value}}</option>
          @endforeach
      </select>
  
@endsection

