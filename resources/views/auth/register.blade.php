@extends('components.layout')

@section('content')
    <!-- Register session Status -->
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
                       required autocomplete="email"
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
            <!-- Terms of Service Checkbox -->
            <li>
                <div class="checkbox-container">
                    <label for="terms_of_service">
                        <input type="checkbox" id="terms_of_service" name="terms_of_service" required>
                        I agree to the <a href="/terms" target="_blank">Terms of Service</a>
                    </label>
                    @error('terms_of_service')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
            </li>
            <li>
                <button type="submit">Restrácia</button>
            </li>
        </ul>
    </form>
    </div>
@endsection

