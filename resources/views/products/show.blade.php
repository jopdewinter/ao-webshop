@extends('layouts.app')

@section('content')
    <h1>{{$product->name}}</h1>
    <p>Description:</p>
    <p>{{$product->description}}</p>
    <p>Price:</p>
    <p>{{$product->price}}</p>    
@endsection