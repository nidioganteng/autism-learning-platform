@extends('layouts.app')

@section('content')
    <div class="relative">
        @include('pages.about.hero')

        {{-- Mercon di antara hero dan pilar, z-20 agar di atas background pilar --}}
        <img src="{{ asset('img/about/mercon.png') }}"
             alt=""
             class="absolute bottom-0 left-0 w-80 z-20 translate-y-1/2">
    </div>

    @include('pages.about.pilar')
    @include('pages.about.mengapa')
    @include('pages.about.kisah')
@endsection
