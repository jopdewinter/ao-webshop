@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    @foreach($products as $product)
        <div class="well">
            <a href="/products/{{$product->id}}"><h3>{{$product->name}}</h3></a>
        </div>
    @endforeach
@endsection