@extends('layouts.app')

@section('title', 'vestiti')
    
@section('content')


<h1>lista vestiti</h1>

@foreach ($vestiti as $vestito)
<p>Tipo:{{$vestito['name']}}</p>
<p>Colore:{{$vestito['color']}}</p>
<p>Taglia:{{$vestito['size']}}</p>
<button><a href="{{route('vestiti.show', ['vestiti' => $vestito -> id])}}">Visualizza</a></button>
    
@endforeach
    
@endsection