<div class="card shadow-lg border-0 rounded">
    <img src="{{ $membroImg }}" class="card-img-top" alt="Foto di {{ $membroName }}">
    <div class="card-body text-center">
        <h3 class="card-title">{{ $membroName }}</h3>
        <p class="card-text"><strong>{{ $membroRole }}</strong></p>
        <a href="{{ route('dettaglio.chiSiamo', ['id' => $membroId]) }}" class="btn btn-custom">Scopri di più</a>
    </div>