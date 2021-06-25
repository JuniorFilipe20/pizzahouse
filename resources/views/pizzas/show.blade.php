@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Ordenado por {{ $pizza->name }}</h1>
    <p class="type">Tipo - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <p class="toppings">Coberturas extras</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Completar Pedido</button>
    </form>
</div>
<a href="/pizzas" class="back"><- Voltar para todas as pizzas</a>
@endsection