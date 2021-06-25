@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Criar uma Nova Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Teu nome:</label>
        <input type="text" name="name" id="name">
        <label for="type">Escolhe o tipo de pizza:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Escolhe o tipo de base:</label>
        <select name="base" id="base">
            <option value="margarita">Cheese Crust</option>
            <option value="hawaiian">Garlic Crust</option>
            <option value="veg supreme">Thin & Crispy</option>
            <option value="volcano">Thick</option>
        </select>
        <fieldset>
            <label>Coberturas extras</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
        </fieldset>
        <input type="submit" value="Solicitar Pizza">
    </form>
</div>
@endsection