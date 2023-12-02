@extends('layout')

@section('content')

    <h1>{{$heading}}</h1>
    @if(count($recipes) == 0)
        <p>No recipes found.</p>
    @endif
    @foreach ($recipes as $recipe)
        <h2>
            <a href="/recipes/{{$recipe['id']}}">{{$recipe['title']}}</a>
        </h2>
        <p>
            {{$recipe['ingredients']}}
        </p>
        <p>
            {{$recipe['instructions']}}
        </p>
    @endforeach

@endsection

