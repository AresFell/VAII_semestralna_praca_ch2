@extends('layout')
@section('content')

<div class="container">
    @if(count($recipes) == 0)
    <p>No recipes found.</p>
    @endif

    @foreach ($recipes as $recipe)
    <x-recipe-card :recipe="$recipe" />
    @endforeach
</div>
@endsection
