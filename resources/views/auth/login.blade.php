@extends('components.layout')

@section('content')
    <!-- Login session Status -->
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="container">
        <form method="POST" class="form-formular" action="/login">
            @csrf
            <ul class="flex-outer">
                <li>
                    <h1>Prihlás sa</h1>
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
                    <button type="submit">Prihlásenie</button>
                </li>
            </ul>
        </form>
    </div>
@endsection

