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
        <img src="/img/pizza-house.png" alt="pizza ouse logo">
        <div class="title m-b-md">
            A Melhor Qualidade de Pizzas do Mindelo
        </div>
        <p class="message">{{ session('mssg') }}</p>
        <a href="/pizzas/create">Solicitar uma Pizza</a>
    </div>
</div>
@endsection