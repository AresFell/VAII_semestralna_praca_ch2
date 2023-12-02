@extends('components.layout')

@section('content')
    <main class="container form-signin w-100 m-auto">
        <form method="POST" class="form-formular" action="/">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Zapamätaj si ma
                </label>
            </div>

            <a href="" class="btn btn-primary w-100 py-2" tabindex="-1" role="button">Log in (mam účet)</a>

        </form>
    </main>

@endsection
