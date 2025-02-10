<x-layout>
    <div class="container-fluid">
         @if (session('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
        @endif  
        <div class="row height-custom justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 title pt-5"> Aggiungi Articolo </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form class="p-4 rounded-4 shadow bg-secondary-subtle my-5 p-3" action="{{route('salva.articolo')}}"  method="post">
                  @csrf 

                  <!-- Titolo articolo -->
                  <div class="mb-3">
                      <label for="titolo" class="form-label fw-bold">Titolo</label>
                      <input name="titolo" type="text" class="form-control" id="titolo"
                          placeholder="Inserisci il titolo">
                  </div>

                  <!-- Categoria  -->
                  <div class="mb-3">
                      <label for="categoria" class="form-label fw-bold">Categoria</label>
                      <input name="categoria" type="text" class="form-control" id="categoria" 
                          placeholder="Inserisci categoria">
                  </div>

                  <!-- Descrizione -->
                  <div class="mb-3">
                      <label for="descrizione" class="form-label fw-bold">Descrizione</label>
                      <input name="descrizione" type="text" class="form-control" id="descrizione"
                        placeholder="Descrizione dell'articolo...">
                  </div>

                  {{-- Testo --}}
                  <div class="mb-3">
                    <label for="testo" class="form-label fw-bold">Testo</label>
                    <textarea name="testo" id="testo" class="form-control" rows="5" placeholder="Testo dell'articolo..."></textarea>
                  </div>

                  <!-- Pulsante Submit -->
                  <div class="d-grid">
                      <button type="submit" class="btn btn-primary btn-lg">Aggiungi Articolo</button>
                  </div>
                </form>
            </div>
        </div>
        
    </div>
</x-layout>