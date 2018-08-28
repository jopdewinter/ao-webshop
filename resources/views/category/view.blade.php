@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category: {{ $category->name }}</div>
                <div class="card-body">
                    <div>
                        <a href="{{ route('productView', ['id' => $products->id, 'slug' => urlencode($products->name)]) }}" class="list-group-item">
                            <div>{{ $products->name }}</div>
                        </a>
                    </div>
                </div>
            </div>
            <a href="{{ url()->previous() }}">Return</a>
        </div>
    </div>
</div>
@endsection
