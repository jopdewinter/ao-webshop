@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product: {{ $product->name }}</div>
                <div class="card-body">
                    <div>
                        Description:
                        {{ $product->description }}
                        <br><br>
                        Price: €
                        {{ $product->price }}
                        <br><br>
                        Category:
                        {{ $category->name }}
                    </div>
                </div>
            </div>
            <button><a href="{{ url()->previous() }}">Return</a></button>
            <button><a href="{{ route('shoppingCartUpdate', ['id' => $product->id]) }}">Add to shopping cart</a></button>
        </div>
    </div>
</div>
@endsection
