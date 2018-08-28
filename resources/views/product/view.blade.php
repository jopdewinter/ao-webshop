@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product: {{ $product->title }}</div>
                <div class="card-body">
                    <div>
                        Description:
                        {{ $product->description }}
                        <br><br>
                        Price:
                        € {{ $product->price }}
                        <br><br>
                        Categories:
                        @foreach ($product->categories as $category)
                            {{ $category->title }},
                        @endforeach
                    </div>
                </div>
            </div>
            <a href="{{ url()->previous() }}">Return</a>
            <a href="{{ route('shoppingCartUpdate', ['id' => $product->id]) }}">Add to shopping cart</a>
        </div>
    </div>
</div>
@endsection
