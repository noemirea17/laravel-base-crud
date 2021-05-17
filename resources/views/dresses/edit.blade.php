@extends('layouts.app')

@section('title', 'inserisci vestito')
    
@section('content')

<h1>inserisci vestito</h1>

<form action="{{route('vestiti.update', $vestiti->id)}}" method="post">
@csrf
@method('PUT')
    <label for="name">EDITName:</label>
    <input type="text" name="name" id="name" value="{{$vestiti -> name}}">

    <label for="size">Size:</label>
    <input type="text" name="size" id="size" value="{{$vestiti -> size}}">

    <label for="color">Color:</label>
    <input type="text" name="color" id="color" value="{{$vestiti -> color}}">

    <label for="description">Description:</label>
    <input type="text" name="description" id="description" value="{{$vestiti -> description}}">

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" value="{{$vestiti -> price}}">

    <button type="submit">submit</button>
</form>


    
@endsection