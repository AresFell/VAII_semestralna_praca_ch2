@extends('layout')

@section('content')

    <h2>
        {{$recipe['title']}}
    </h2>
    <p>
        {{$recipe['ingredients']}}
    </p>
    <p>
        {{$recipe['instructions']}}
    </p>

@endsection
