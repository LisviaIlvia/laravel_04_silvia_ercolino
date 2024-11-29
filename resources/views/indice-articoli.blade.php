<x-layout>
    <div class="container-fluid">
    <h1 class="py-5 px-5">Articoli</h1>
    <div class="container">
        <div class="row">
            <!-- Sidebar per i filtri -->
            <div class="col-12 col-md-3">
                <h3 class="">Filtra per:</h3>
                <div class="accordion sticky-top py-3 " id="accordionExample">
                    <!-- Filtro per categoria -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Cerca per categoria
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div id="radio-wrapper" class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="categorie" id="all" checked>
                                    <label class="form-check-label" for="all">
                                        Tutte le categorie
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Filtro per parola -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Cerca per parola:
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <input id="word-input" type="text" class="form-control" placeholder="Cerca...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contenitore per le card -->
            <div id="card-wrapper" class="col-12 col-md-9 d-flex justify-content-around flex-wrap">
                <!-- Le card verranno generate qui -->
            </div>
        </div>
    </div>
</div>
</x-layout>
