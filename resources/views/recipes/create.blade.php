@extends('components.layout')

@section('content')
    <div class="container">
        <form method="POST" class="form-formular" action="/recipes">
            @csrf
            <ul class="flex-outer">
                <li>
                    <h1>Pridaj Recept</h1>
                </li>
                <li>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Napis nazov receptu"
                           value="{{old('title')}}" required>
                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </li>
                <li>
                    <label for="ingredients">Ingrediencie</label>
                    <input type="text" id="ingredients" name="ingredients"
                           placeholder="Napis ingrediencie za sebou, oddelene ciarkami." value="{{old('ingredients')}}" required>
                    @error('ingrendients')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </li>
                <li>
                    <label for="instructions">Instrukcie</label>
                    <input type="text" id="instructions" name="instructions"
                           placeholder="Napis instrukcie, najlepsie ako vety oddelene bodkami."
                           value="{{old('instructions')}}" required>
                    @error('instructions')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </li>
                <li>
                    <button type="submit">Pridaj</button>
                </li>
            </ul>
        </form>
    </div>
@endsection
