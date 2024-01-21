@extends('components.layout')

@section('content')

    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic">Veľmi dôležitá novinka, v úžastnom svete varenia</h1>
                <p class="lead my-3">Príprava pokrmov bez plytvania, čiže no waste, je jeden z najzábavnejších a najprínosnejších trendov vo varení, ktorý sme v posledných rokoch zaznamenali. Možno už ste profík, ktorý robí super chutné sendviče s využitím banánovej šupky, alebo s prípravou pokrmov bez plytvania ešte len začínate – či už tak alebo tak, každý si vo svete no waste receptov príde na svoje. Stačí byť otvorený všetkým možnostiam a mať v sebe malú štipku kreativity..</p>
                <p class="lead mb-0"><a href="https://www.gardengourmet.sk/news/rastlinne-recepty-no-waste-vareni" class="text-body-emphasis fw-bold">Ak sa chcete dozvediet viac.</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Varenie</strong>
                        <h3 class="mb-0">Zdravý kapustový šalát</h3>
                        <div class="mb-1 text-body-secondary">Nov 19</div>
                        <p class="card-text mb-auto"> Ideálny na ľahký obed alebo ako svieža príloha k vašim obľúbeným jedlám.</p>
                        <a href="https://varimeslaskou.sk/zdravy-kapustovy-salat-s-mrkvou-na-chudnutie-je-vynikajuci-a-hotovy-za-5-minut/" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>

                <div class="col-auto d-none d-lg-block">
                    <img src="{{asset('images/blog_photo_cooking.jpg')}}" class="blog-picture" alt="dokoncoavanie varenia">
                </div>

                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Pečenie</strong>
                        <h3 class="mb-0">Najlepšie sviatočné zlepované kolieska!</h3>
                        <div class="mb-1 text-body-secondary">Nov 17</div>
                        <p class="mb-auto">Vianočné zlepované kolieska sú synonymom vianočnej pohody. Vychutnajte si ich!</p>
                        <a href="https://varimeslaskou.sk/najlepsie-sviatocne-zlepovane-kolieska-vianoce-si-bez-nich-ani-nevieme-predstavit/" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>

                <div class="col-auto d-none d-lg-block">
                    <img class="blog-picture" src="{{asset('images/stawberry_jam_cookies.jpg')}}"  alt="strawberry jam cookies">
                </div>

                </div>
            </div>
        </div>
    </main>

@endsection
