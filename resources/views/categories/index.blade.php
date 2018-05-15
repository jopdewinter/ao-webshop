@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    @foreach($categories as $category)
        <div class="well">
            <a href="categories/{{$category->id}}"><h3>{{$category->name}}</h3></a>
        </div>
    @endforeach
@endsection