@extends('components.layout')
@section('content')

    <div class="container">
        @unless(count($recipes) == 0)
            @foreach($recipes as $recipe)
                <x-recipe-card :recipe="$recipe"/>
            @endforeach

        @else
            <p>No recipes found</p>
        @endunless
    </div>
    <div class="b-example-divider"></div>

@endsection
