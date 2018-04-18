@extends('layouts.app')

@section('content')
    <h1>About</h1>
    <p>about info</p>
    <ul>
        @foreach($info as $infos)
            <li>{{$infos}}</li>
        @endforeach
    </ul>

@endsection