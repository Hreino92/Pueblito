<x-app-layout>
    <x-slot name="header">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Evento') }}
        </h2>
        <style>
            body {
                background-color: #f5f5f5;
            }

            .imagePreview {
                width: 100%;
                height: 180px;
                background-position: center center;
                background: url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
                background-color: #fff;
                background-size: cover;
                background-repeat: no-repeat;
                display: inline-block;
                box-shadow: 0px -3px 6px 2px rgba(0, 0, 0, 0.2);
            }

            .btn-primary {
                display: block;
                border-radius: 0px;
                box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, 0.2);
                margin-top: -5px;
            }

            .imgUp {
                margin-bottom: 15px;
            }

            .del {
                position: absolute;
                top: 0px;
                right: 15px;
                width: 30px;
                height: 30px;
                text-align: center;
                line-height: 30px;
                background-color: rgba(255, 255, 255, 0.6);
                cursor: pointer;
            }

            .imgAdd {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-color: #4bd7ef;
                color: #fff;
                box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.2);
                text-align: center;
                line-height: 30px;
                margin-top: 0px;
                cursor: pointer;
                font-size: 15px;
            }

        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
            <div class="container col-6">
                <form action="{{ route('eventos.update', $evento->id) }}" enctype="multipart/form-data" method="POST"
                    class="space-y-10 text-gray-700">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                    <input  name="id" value="{{$evento->id}}">
                    <div class="flex flex-wrap">
                        <div class="w-full">
                            <label class="block mb-1" for="formGridCode_card">TITULO</label>
                            <input name="titulo" value="{{ $evento->titulo }}"
                                class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                                type="text" id="formGridCode_card" />
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                        <div class="w-full px-2 md:w-1/2">
                            <label class="block mb-1" for="formGridCode_name">SUBTITULO</label>
                            <input name="subtitulo" value="{{ $evento->subtitulo }}"
                                class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                                type="text" id="formGridCode_card" />
                        </div>
                        <div class="w-full px-2 md:w-1/2">
                            <label class="block mb-1" for="formGridCode_last">DESCRIPCION</label>
                            <textarea rows="10" cols="20" name="descripcion"
                                class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                          ">{{ $evento->descripcion }}</textarea>

                        </div>
                    </div>
                    {{-- Mostrar img seleccionada --}}
                    {{-- <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
              <div class="grid grid-cols 1 mt-5 mt-7">
                <img id="ImagenSeleccionada" style="max-height:300px;">
              </div> --}}


                    <div class="grid grid-cols-1 ">
                        <label class="block mb-1 uppercase items-center justify-center" for="formGridCode_month">Subir
                            Imagen Nueva</label>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-7 imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload
                                        <input type="file" class="uploadFile img" value="Upload Photo"
                                            style="width: 0px; height: 0px;overflow: hidden;" name="img"
                                            value="{{ $evento->img }}">
                                    </label>

                                </div><!-- col-2 -->
                                {{-- <i class="fa fa-plus imgAdd"></i> --}}
                                <div class="grid grid-cols-1">

                                    <div class="col-sm-5 imgUp">
                                        <label class="block mb-1 uppercase items-center justify-center"
                                            for="formGridCode_month">Imagen anterior</label>
                                        <br>
                                        <img src="/imagen/{{$evento->img}}" alt="" srcset="">
                                    </div>
                                </div>
                            </div><!-- row -->
                        </div><!-- container -->
                        <div class="flex items-center justify-center w-full">
                        </div>



                    </div>
                    <div class="flex itemes-center-justify-center mg:gap-8 gap-4 pt-5 pb-5">
                        <a href="{{ route('eventos.update', $evento->id) }}"
                            class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-x1 font-medium text-white px-4 py-2">Cancelar</a>
                        <button type="submit"
                            class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2 ">Guardar
                            Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(".imgAdd").click(function() {
            $(this).closest(".row").find('.imgAdd').before(
                '<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>'
            );
        });
        $(document).on("click", "i.del", function() {
            $(this).parent().remove();
        });
        $(function() {
            $(document).on("change", ".uploadFile", function() {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader)
                    return; // no file selected, or no FileReader support

                if (/^image/.test(files[0].type)) { // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function() { // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image",
                            "url(" + this.result + ")");
                    }
                }

            });
        });
    </script>
</x-app-layout>
