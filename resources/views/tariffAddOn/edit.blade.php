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

<h1> Create new Tariff add-on</h1>

<form method="POST" action="/tariff-add-ons/{{ $tariffAddOn->id }}">
    @csrf
    @method('PUT')

    <label for="type">Name</label>
    <input type="text" name="type" id="type" value="{{$tariffAddOn->type}}">
    @error('type')
        <p> {{ $message }}</p>
    @enderror

    <label for="price">Price</label>
    <input type="number" step=".01" name="price" id="price" value="{{$tariffAddOn->price}}">
    @error('price')
        <p> {{ $message }}</p>
    @enderror

    <input type="submit">
</form>
</body>
</html>
