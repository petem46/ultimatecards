@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    {{-- @if (Route::has('login'))
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
    @endif --}}
    
    <div class="content">
        <div class="title m-b-md">
            Ultimate Cards
        </div>
        
        <div class="links">
            <a href="#">Home</a>
            <a href="#">Students</a>
            <a href="#">Data Entry</a>
            <a href="#">Print Cards</a>
            <a href="#">Help</a>
        </div>
    </div>
</div>
@endsection