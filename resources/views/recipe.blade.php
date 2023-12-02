@extends('layout')

@section('content')
    <div class="container">
        <div class="recipe">
            <h2>
                {{$recipe['title']}}
            </h2>
            <ul>
                @foreach (explode(', ', $recipe->ingredients) as $ingredient)
                    <li>{{ $ingredient }}</li>
                @endforeach
            </ul>
            <p>Postup:</p>
            <ol>
                @foreach (explode('. ', $recipe->instructions) as $instruction)
                    <li>{{ $instruction }}</li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection
