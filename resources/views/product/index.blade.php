@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <div class="list-group">
                    @foreach ($products as $product)
                        <a href="{{ route('productView', ['id' => $product->id, 'slug' => urlencode($product->title)]) }}" class="list-group-item">
                            <div>{{ $product->title }}</div>
                        </a>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
