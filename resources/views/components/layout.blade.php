<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Babičkine recepty</title>
    <link rel="icon" type="image/png" href="{{asset('images/cooking-icon.png')}}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/style.css">


</head>
<body>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <img class="page-icon" src="{{asset('images/cooking-icon.png')}}" width="50" height="50" alt="babičkine recepty" >
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/recipes" class="nav-link px-2 link-body-emphasis">Všetky Recepty</a></li>
                <li><a href="{{route('recipes.create') }}" class="nav-link px-2 link-body-emphasis">Pridaj Recept</a></li>
            </ul>

            <div class="text-end">
                <a href="/register" class="btn btn-secondary me-2" role="button">Login</a>
                <a href="/register" class="btn btn-warning"  role="button">Sign-up</a>

            </div>

        </div>
    </div>
</header>

<div class="b-example-divider"></div>

{{--VIEW OUTPUT--}}
@yield('content')


<div class="b-example-divider"></div>

<div class="container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <p class="text-body-secondary">© 2023</p>
        </div>

        <!--<div class="col mb-3"></div>-->

        <div class="col mb-3">
            <h5>Obchod</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">O projekte</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Inzercia</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Osobne udaje a sukromie</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Pomoc</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Kontakt</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Napíšte nám</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">GDPR</a></li>
            </ul>
        </div>

    </footer>
</div>

<x-flash-message />

</body>
</html>
