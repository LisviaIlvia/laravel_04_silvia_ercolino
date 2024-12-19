<x-layout>
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Immagine -->
            <div class="col-md-5">
                <img src="{{ asset($membro['image']) }}" alt="Foto di {{ $membro['name'] }}" class="img-fluid rounded shadow-lg img">
            </div>
            <!-- Testo -->
            <div class="col-md-7">
                <h1 class="display-4">{{ $membro['name'] }}</h1>
                <h3 class="text-muted mb-4">{{ $membro['role'] }}</h3>
                <p class="lead">{{ $membro['description'] }}</p>
                <div class="alert alert-info mt-4">
                    <strong>Fun Fact:</strong> {{ $membro['fun_fact'] }}
                </div>
                <a href="{{ route('chiSiamo') }}" class="btn btn-custom mt-4">Torna al Team</a>
            </div>
        </div>
    </div>
</x-layout>
