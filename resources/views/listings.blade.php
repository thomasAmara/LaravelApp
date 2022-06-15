@extends('layout')

@section('content')
    <h1>Listing</h1>
    <h1>{{$heading}}</h1>
    <h1>KOLOL</h1>

    @@unless (count($listings) == 0)
        @if(count($listings) == 0)
        <p>No listing found</p>
        @endif

        @foreach($listings as $listing)
        <h2>
            {{$listing['title']}}
        </h2>
        <p>
            {{$listing['description']}}
        </p>
        @endforeach
    {{-- @endunless --}}
@endsection
