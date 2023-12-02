@extends('components.layout')

@section('content')
    <div class="container">
    <form method="POST" class="form-formular" action="/users">
        @csrf
        <ul class="flex-outer">
            <li>
                <h1>Zaregistruj sa</h1>
            </li>
            <li>
                <label for="name">Meno</label>
                <input type="text" id="name" name="name"
                       value="{{old('name')}}"
                       required autofocus autocomplete="name" >
                @error('name')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </li>
            <li>
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                       required autocomplete="username"
                       value="{{old('email')}}">
                @error('email')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </li>
            <li>
                <label for="password" >Heslo</label>
                <input type="password" id="password" name="password"
                       value="{{old('password')}}"
                       required autocomplete="new-password">
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </li>
            <li>
                <label for="password_confirmation" >Kontrola hesla</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                       value="{{old('password_confirmation')}}">
                @error('password_confirmation')
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

