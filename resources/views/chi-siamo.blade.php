<x-layout>
   
    <div class="container">
        <h1 class="text-center my-5" style="font-size: 2.5rem;">{{$titolo}}</h1>
        <p class="text-center lead">Un team di esperti impegnati a migliorare il tuo benessere, fisico e mentale. Scopri di più su di noi!</p>
        <div class="row justify-content-center mt-5">
            @foreach ($team as $membro)
                <div class="col-md-4 mb-4">
                    <x-card-chi-siamo
                        membroId="{{ $membro['id'] }}"
                        membroImg="{{ $membro['image'] }}"
                        membroName="{{ $membro['name'] }}"
                        membroRole="{{ $membro['role'] }}"
                        membroFunFact="{{ $membro['fun_fact'] }}">
                    </x-card-chi-siamo>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>