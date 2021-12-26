<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a type="button" href="{{route('eventos.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear evento</a>
            </div>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-500 text-withe">
                        <th>ID</th>
                        <th class="border px-4 py-2">TITULO</th>
                        <th class="border px-4 py-2">SUBTITULO</th>
                        <th class="border px-14 py-1">IMAGEN</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventos as $evento)
                    <tr>
                        <td>{{$evento->id}}</td>
                        <td>{{$evento->titulo}}</td>
                        <td>{{$evento->subtitulo}}</td>
                        <td>{{$evento->descripcion}}</td>
                        <td>
                            <img src="/imagen/({$evento->img}" width="60%">
                        </td>
                        <td class="border px-4 py-2">
                            <div class="flex justify venter rounded-lg text-lg" role="group">
                                {{-- Boton editar --}}
                                <a href="{{route('eventos.edit',$evento->id)}}">Editar</a>
                                {{-- Boton eliminar --}}
                                <form action="route('eventos.destroy', $evento.id" method="POST" class="formElimiar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>
                               
                            </div>
                        </td>
                    </tr>

                        
                    @endforeach
                </tbody>
                <div>
                    {{-- Paginacion --}}
                    
                </div>
            </table>
            {{!! $eventos ->links()}}
        </div>
    </div>
</x-app-layout>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.formEliminar')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
          Swal.fire({
              title:'¿Confirma la eliminación del evento?',
              icon: 'info',
              showCancelButton:true,
              confirmButtonColor:'#20c997'
              cancelButtoncColor:'#6c757d'
              confirmButtonText:'Confirmar'

          }).then((result)=>{
              if (result.isConfirmed){
                  this.Submit();
                  Swal.fire('Eliminado', 'El registro ha sido eliminado', 'success');
              }
          })
        },
      }, false)
    })
})()
</script>
