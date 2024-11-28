<x-layout>
    <div class="container-fluid bg-page pb-5">
        <div class="container py-5">
            <h1 class="text-center">{{ $articolo['titolo'] }}</h1>
            <p class="text-center text-muted">Categoria: {{ $articolo['categoria'] }}</p>
            <div class="text-center">
                <p>{{ $articolo['descrizione'] }}</p>
            </div>
        </div>
            <div class="row px-5">
                <div class="col-12 col-md-3">
                    <img src="https://picsum.photos/400" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-9">
                    <div class="text-center">
                        <p>{{ $articolo['testo'] }}</p>
                    </div>
                </div>
            </div>
        </div>    
</x-layout>