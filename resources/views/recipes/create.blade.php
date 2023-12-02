@extends('layout')

@section('content')
<div class="container">
    <form class="form-formular" action="" method="get">
        <ul class="flex-outer">
            <li>
                <h1>Pridaj Recept</h1>
            </li>
            <li>
                <label for="title">Title</label>
                <input type="text" id="title" placeholder="Napis nazov receptu">
            </li>
            <li>
                <label for="ingredients">Ingrediencie</label>
                <textarea id="ingredients" placeholder="Napis ingrediencie"></textarea>
            </li>
            <li>
                <label for="instructions">Email</label>
                <textarea id="instructions" placeholder="Napis instrukcie"></textarea>
            </li>
            <li>
                <button type="submit">Pridaj</button>
            </li>
        </ul>
    </form>
</div>
@endsection
