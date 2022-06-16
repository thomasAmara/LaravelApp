@extends('layout')

@section('content')
    @include('partials._hero')
    @include('partials._search')

    {{-- <h1>{{ $heading }}</h1> --}}
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($listings) == 0)
            @if (count($listings) == 0)
                <p>No listing found</p>
            @endif

            @foreach ($listings as $listing)
                <x-listing-card :listing='$listing' />
            @endforeach
        @endunless
    </div>
@endsection
