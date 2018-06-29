@extends('layouts.app')

@section('content')
    <p>category: {{$category->name}}</p>
    <h1>{{$product->name}}</h1>
    <p>Description:</p>
    <p>{{$product->description}}</p>
    <p>Price:</p>
    <p>{{$product->price}}</p>
    <br>

    <a href="/cart/addToCart/{{$product->id}}">Add to cart</a>
@endsection