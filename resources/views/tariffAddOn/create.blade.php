@extends('layouts.app')

@section('content')
<div class="container">
    <h1> Create new Tariff add-on</h1>

    <form method="POST" action="/tariff-add-ons">


        @csrf
        <label for="type">Name</label>
        <input type="text" name="type" id="type">
        @error('type')
        <p> {{ $message }}</p>
        @enderror


        <label for="price">Price</label>
        <input type="number" step=".01" name="price" id="price">
        @error('price')
        <p> {{ $message }}</p>
        @enderror

        <input type="submit">

    </form>
</div>
@endsection
