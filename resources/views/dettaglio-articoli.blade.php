<x-layout>
    <div class="container-fluid bg-page pb-5">
        <!-- Header dell'articolo -->
        <div class="container py-5">
            <h1 class="text-center display-4 fw-bold">{{ $articolo['titolo'] }}</h1>
            <p class="text-center text-muted fst-italic">Categoria: <span class="text-primary">{{ $articolo['categoria'] }}</span></p>
            <hr class="w-50 mx-auto mb-4">
            <div class="text-center">
                <p class="lead">{{ $articolo['descrizione'] }}</p>
            </div>
        </div>

        <!-- Contenuto principale -->
        <div class="container">
            <div class="row align-items-center px-3 px-md-5">
                <!-- Immagine articolo -->
                <div class="col-12 col-md-4 text-center mb-4 mb-md-0">
                    <img src="https://picsum.photos/400" alt="Immagine articolo" class="img-fluid rounded shadow-lg">
                </div>
                
                <!-- Testo articolo -->
                <div class="col-12 col-md-8">
                    <div class="content-box bg-light p-4 rounded shadow-sm">
                        <p class="text-justify text-muted" style="line-height: 1.8;">
                            {{ $articolo['testo'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottone per tornare agli articoli -->
        <div class="container text-center mt-5">
            <a href="{{ route('articolo.indice') }}" class="btn btn-outline-primary btn-lg px-5 py-2">
                Torna agli Articoli
            </a>
        </div>
    </div>
</x-layout>
