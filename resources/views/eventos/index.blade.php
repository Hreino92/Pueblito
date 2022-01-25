<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>

    <body class="jumbotron">
        <div class="col-md-12 text center">
            @if (session()->has('success'))
                <div class="alert alert-success col-md-12">
                    <h2>{{ session()->get('success') }}</h2>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger col-md-12">
                    <h2>{{ session()->get('error') }}</h2>

                </div>
            @endif
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{-- <div class="bg-green overflow-hidden shadow-xl sm:rounded-lg">
                    <a type="button" href=""
                        class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear evento</a>
                </div> --}}
                <a class="btn btn-primary" href="{{ route('eventos.create') }}" role="button">Crear Evento</a>
                <hr>

                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-500 text-withe">
                            <th>ID</th>
                            <th class="border px-4 py-2">TITULO</th>
                            <th class="border px-4 py-2">SUBTITULO</th>
                            <th class="border px-4 py-2">IMAGEN</th>

                            <th class="border px-14 py-1">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventos as $evento)
                            <tr>
                                <td>{{ $evento->id }}</td>
                                <td>{{ $evento->titulo }}</td>
                                <td>{{ $evento->subtitulo }}</td>
                                {{-- <td>{{$evento->descripcion}}</td> --}}
                                <td>
                                    <img src="/imagen/{{ $evento->img }}" width="60%">
                                </td>
                                <td class="border px-4 py-2">
                                    <div class="flex justify venter rounded-lg text-lg" role="group">
                                        {{-- Boton editar --}}
                                        <a href="{{ route('eventos.edit', $evento->id) }}"
                                            class="btn btn-outline-secondary">Editar</a>
                                        {{-- Boton eliminar --}}
                                        {{-- <H1 class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded"></H1> --}}
                                        {{-- <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST"
                                            class="formElimiar">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="formElimiar">Eliminar</button>
                                        </form> --}}
                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                            data-target="#ModalEliminar{{ $evento->id }}">
                                            Eliminar
                                        </button>


                                        <div class="modal fade" id="ModalEliminar{{ $evento->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h1 class="text-uppercase sm:lowercase md:capitalize lg:normal-case xl:uppercase" id="exampleModalCenterTitle">
                                                           <b> ¿Seguro que desea Eliminar evento?</b>
                                                        </h1>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <form action="{{ Route('eventos.destroy', $evento->id) }}"
                                                                method="post">
                                                                {{ csrf_field() }}
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button class="btn btn-outline-danger" type="Submit">Eliminar
                                                                    evento</button>
                                                                <button type="button" class="btn btn-outline-secondary"
                                                                    data-dismiss="modal">Cerrar</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                    <div>
                        {{-- Paginacion --}}

                    </div>
                </table>
                <div class="container">
                    {{ $eventos->onEachSide(5)->links() }}
                </div>
            </div>
        </div>
    </body>


</x-app-layout>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.formElimiar')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                        alert('hola')
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
