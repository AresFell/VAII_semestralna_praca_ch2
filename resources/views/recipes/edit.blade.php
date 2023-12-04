@extends('components.layout')

@section('content')
    <div class="container">
        <form method="POST" class="form-formular" action="/recipes/{{$recipe->id}}">
            @csrf
            @method('PUT')
            <ul class="flex-outer">
                <li>
                    <h2>Edituj Recept Podla Potreby</h2>
                </li>
                <li>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Napis nazov receptu"
                           value="{{$recipe->title}}" required>
                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </li>
                <li>
                    <label for="ingredients">Ingrediencie</label>
                    <input type="text" id="ingredients" name="ingredients"
                           placeholder="Napis ingrediencie za sebou, oddelene ciarkami."
                           value="{{$recipe->ingredients}}" required>
                    @error('ingredients')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </li>
                <li>
                    <label for="instructions">Instrukcie</label>
                    <input type="text" id="instructions" name="instructions"
                           placeholder="Napis instrukcie, najlepsie ako vety oddelene bodkami."
                           value="{{$recipe->instructions}}" required>
                    @error('instructions')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </li>
                <li>
                    <button type="submit">Uloz</button>
                </li>
            </ul>
        </form>
    </div>
@endsection
