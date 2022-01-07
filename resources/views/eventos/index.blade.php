
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>

    <body>
        <div class="col-md-12 text center">
            @if(session()->has('success'))
                <div class="alert alert-success col-md-12">
                    <h2>{{ session()->get('success') }}</h2>
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger col-md-12">
                    <h2>{{ session()->get('error') }}</h2>
                    
                </div>
            @endif
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <a type="button" href="{{ route('eventos.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear evento</a>
                </div>
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
                                            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Editar</a>
                                        {{-- Boton eliminar --}}
                                        {{-- <H1 class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded"></H1> --}}
                                        {{-- <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST"
                                            class="formElimiar">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="formElimiar">Eliminar</button>
                                        </form> --}}
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminar{{$evento->id}}">
                                            Eliminar
                                        </button>
    
    
                                        <div class="modal fade" id="ModalEliminar{{$evento->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h5 class="modal-title " id="exampleModalCenterTitle">¿Seguro que desea Eliminar evento?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <form action="{{Route('eventos.destroy',$evento->id)}}" method="post">
                                                                {{csrf_field()}}
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button class="btn btn-danger" type="Submit">Eliminar evento</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            </form>
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
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.formElimiar')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
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
