@extends('components.layout')

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
        <a href="/recipes/{{$recipe->id}}/edit" class="btn btn-success w-100 py-2" tabindex="-1" role="button">Edit</a>
        <form method="POST" action="/recipes/{{$recipe->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger w-100 py-2" type="button">Delete</button>
        </form>
        //TODO: nefunguje delete
    </div>
@endsection
