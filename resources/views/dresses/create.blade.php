@extends('layouts.app')

@section('title', 'inserisci vestito')
    
@section('content')

<h1>inserisci vestito</h1>

<form action="{{route('vestiti.store')}}" method="post">
@csrf
@method('POST')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <label for="size">Size:</label>
    <input type="text" name="size" id="size">

    <label for="color">Color:</label>
    <input type="text" name="color" id="color">

    <label for="description">Description:</label>
    <input type="text" name="description" id="description">

    <label for="price">Price:</label>
    <input type="number" name="price" id="price">

    <button type="submit">submit</button>
</form>


    
@endsection