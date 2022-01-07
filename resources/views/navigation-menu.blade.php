<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .demo {
        -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 7px 5px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 10px 13px -7px #000000, 5px 5px 7px 5px rgba(0, 0, 0, 0.15);
    }

</style>
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
            {{-- <li class="nav-item active">
                <a class="nav-link text-white demo" href="{{ route('welcome') }}">Inicio<span
                        class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link text-white demo" href="#">¿Quiénes Somos?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white demo" href="#">Nuestras Habitaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white demo" href="#">Protocolos COVID-19</a>
            </li>
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link text-white demo" href="/eventos">Eventos</a>
            
            @endif 

            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> --}}
            @if (Auth::check())
                <li class="nav-item right-12">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link class="text-white demo " href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();">
                            {{ __('Cerrar Sesion') }}
                        </x-jet-dropdown-link>
                    </form>
                </li>
            @endif

        </ul>
    </div>
</nav>
