<header>
    <div class="container-hf">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href={{route('home')}}>
                <img src="{{Vite::asset('resources/img/logo_santa_claus_white.png')}}" alt="logo santa claus">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item pe-3">
                    <a class="nav-link active text-white hover-underline-animation" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item pe-3">
                    <a class="nav-link text-white hover-underline-animation" href="{{route('gifts.index')}}">Lista Regali</a>
                    </li>
                    <li class="nav-item pe-3">
                    <a class="nav-link text-white hover-underline-animation" href="{{route('gifts.create')}}">Inserisci un regalo</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>