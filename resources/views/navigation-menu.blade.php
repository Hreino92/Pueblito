<nav class="navbar navbar-expand-lg"
    style="background: linear-gradient(90deg, rgba(76,48,37,1) 0%, rgba(163,115,92,1) 60%, rgba(149,94,61,1) 100%);">
    <img src="/imagen/Logo Vectorizado.png" alt="" height="50px;" width="50px;" srcset="">
    <a class="navbar-brand text-white demo" href="{{ route('welcome') }}" style="text-color: white;">
        Hotel El pueblito de Don Luis</a>
        
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div style="width: 35px; height: 5px; background-color: black; margin: 6px 0; "></div>
            <div style="width: 35px; height: 5px; background-color: black; margin: 6px 0; "></div>
            <div style="width: 35px; height: 5px; background-color: black; margin: 6px 0; "></div>
        <span class="navbar-toggler-icon">
        </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
           
            <li class="nav-item">
                <a class="nav-link text-white demo" href="#">¿Quiénes Somos?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white demo" href="#">Nuestras Instalaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white demo" href="#">Protocolos COVID-19</a>
            </li>
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link text-white demo" href="/eventos">Eventos</a>
            
            @endif 

            @if (Auth::check())
                <li class="nav-item right-12" style="position: absolute">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link  href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();">
                            <h1 class="btn btn-secondary btn-sm">{{ __('Cerrar Sesion') }}</h1>
                        </x-jet-dropdown-link>
                    </form>
                </li>
            @endif

        </ul>
    </div>
</nav>
