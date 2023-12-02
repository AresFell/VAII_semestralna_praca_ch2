@extends('layout')

@section('content')

    <div class="container">
        @if(count($recipes) == 0)
            <p>No recipes found.</p>
        @endif
            @foreach ($recipes as $recipe)
                <div class="recipe">
                    <h2><a href="/recipes/{{$recipe['id']}}">{{$recipe['title']}}</a></h2>
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
    @endforeach
    </div>
@endsection
