
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('homepage')}}">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Articoli</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('articolo.indice')}}">Leggi gli articoli</a></li>
                            <li><a class="dropdown-item" href="{{route('aggiungi.articolo')}}">Aggiungi articolo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('chiSiamo')}}">Chi Siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contattaci')}}">Contattaci</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

