@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <div class="content">
        <img src="/img/ticket-transparent-png.png" alt="ticket logo">
        <div class="title m-b-md">
            Events on Rails<br />
        </div>
        <div class="text m-b-md">
            Find the best solution for your dream train event
        </div>
        <a href="{{ route('trains.create') }}">Order a Train</a>
    </div>
</div>
@endsection
