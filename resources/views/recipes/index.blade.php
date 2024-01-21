@extends('components.layout')
@section('content')

    <!-- Search form -->
    <form class="container" role="search" id="potvrdenie">
        <input type="search" id="vyhladaj" class="form-control" placeholder="Search..." aria-label="Search">
    </form>

    <script src="{{ asset('/js/search.js') }}"></script>

    <!-- Display recipes -->
    <div class="container" id="recepty">
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
