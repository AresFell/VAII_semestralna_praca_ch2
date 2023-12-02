@extends('layout')

@section('content')

<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic">Veľmi dôležitá informácia, ktorá hovorí o novinkách vo svete varenia</h1>
            <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda blanditiis consequatur cumque dolore ducimus ea eaque eligendi exercitationem hic id iure non, perspiciatis quae quibusdam sapiente similique sunt suscipit voluptate, voluptatibus. Cumque, eligendi facilis in maiores mollitia nam, odit optio quaerat qui quod quos sapiente sed sint sit veritatis.</p>
            <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Pokracovanie nie je >.</a></p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Varenie</strong>
                    <h3 class="mb-0">Novinka na našej stránke</h3>
                    <div class="mb-1 text-body-secondary">Nov 19 </div>
                    <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, et!</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                    </a>
                </div>
                <!--
                <div class="col-auto d-none d-lg-block">
                    <img src="{{asset('images/blog_photo_cooking.jpg')}}" class="blog-picture" alt="dokoncoavanie varenia">
                </div>
                -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success-emphasis">Pečenie</strong>
                    <h3 class="mb-0">Preco su tieto cookies najlepsie</h3>
                    <div class="mb-1 text-body-secondary">Nov 17</div>
                    <p class="mb-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptatem.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                    </a>
                </div>
                <!--
                <div class="col-auto d-none d-lg-block">
                    <img class="blog-picture" src="{{asset('images/stawberry_jam_cookies.jpg')}}"  alt="strawberry jam cookies">
                </div>
                -->
            </div>
        </div>
    </div>
</main>

@endsection
