<x-layout>
<header class="container-fluid">
    <div class="row vh-100 align-items-center">
        <div class="col-12">
            <h1 class="text-giallo display-1 text-center">{{$titolo}}</h1>
            <div class="d-flex justify-content-center pt-5">
                <a href="{{route('articolo.indice')}}" class="btn btn-custom" role="button">Articoli</a>
                <a href="{{route('chiSiamo')}}" class="btn btn-custom" role="button">Chi Siamo</a>
            </div>
        </div>
    </div>
</header>
</x-layout>