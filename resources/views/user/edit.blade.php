@extends('layouts.app')

@section('content')
    <div class="container">

        <h1> Edit user</h1>

        <form method="POST" action="/users/{{ $user->id }}">
            @csrf
            @method('PUT')

            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{$user->name}}">
            @error('name')
            <p> {{ $message }}</p>
            @enderror

            <label for="email">Email</label>
            <input type="text"  name="email" id="email" value="{{$user->email}}">
            @error('email')
            <p> {{ $message }}</p>
            @enderror

            <label for="tariffAddOns">Tariff Add-ons</label>
            <select multiple name="tariffAddOns[]" id="tariffAddOns">
                @foreach($tariffAddOns as $tariffAddOn)
                    <option
                        value="{{$tariffAddOn->id}}"
                        @if($user->tariffAddOns->contains($tariffAddOn->id))
                        selected
                        @endif
                    >
                        {{$tariffAddOn->type}}
                    </option>
                @endforeach
            </select>

            <input type="submit">
    </div>
@endsection
