<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

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
</form>
</body>
</html>
