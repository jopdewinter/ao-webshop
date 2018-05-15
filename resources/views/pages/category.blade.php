@extends('layouts.app')
@section('content')
    <h1>Category</h1>
    @foreach($products as $product)
        <a href="/products/{{$product->id}}"><p>{{$product->name}}</p></a>
    @endforeach
@endsection