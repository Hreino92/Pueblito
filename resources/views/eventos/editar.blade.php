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

    <div class="container">

        <form class="jumbotron" action="{{ route('eventos.update', $evento->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            <input name="_method" type="hidden" value="PUT">
            <input class="hidden" name="id" value="{{ $evento->id }}">
            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                <div class="w-full px-2 md:w-1/2">
                    <label class="block mb-1" for="formGridCode_card">TITULO</label>
                    <input name="titulo" value="{{ $evento->titulo }}"
                        class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                        type="text" id="formGridCode_card" />
                </div>
                <div class="w-full px-2 md:w-1/2">
                    <label class="block mb-1" for="formGridCode_name">SUBTITULO</label>
                    <input name="subtitulo" value="{{ $evento->subtitulo }}"
                        class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                        type="text" id="formGridCode_card" />
                </div>
            </div>
            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">

                <div class="w-full px-2 md:w-1/2">
                    <label class="block mb-1" for="formGridCode_last">DESCRIPCION</label>
                    <textarea rows="10" cols="80" name="descripcion"
                        class="resize-y resize-x rounded-md hover:resize">{{ $evento->descripcion }}</textarea>
                </div>
                
            </div>
            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                <div class="w-full px-2 md:w-1/2">
                    <div class="col-sm-5 imgUp">
                        <label class="block mb-1 uppercase items-center justify-center" for="formGridCode_month">Imagen
                            anterior</label>
                        <br>
                        <img src="/imagen/{{ $evento->img }}" alt="" srcset="">
                    </div>
                </div>
                
                <div class="w-full px-2 md:w-1/2">
                    <label class="block mb-1 uppercase items-center justify-center" for="formGridCode_month">Cargar
                        Imagen Nueva</label><br>
                    <div class="col-sm-5 imgUp">
                        <div class="imagePreview"></div>
                        <label class="btn btn-primary">Imagen<input type="file" class="uploadFile img"
                                value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="img">
                        </label>

                        <a href="{{ route('eventos.update', $evento->id) }}" class="btn btn-outline-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-outline-primary">Guardar
                        Cambios</button>
                    </div>
                </div>

            </div>

            <div class="flex flex-wrap -mx-1 space-y-1 md:space-y-0">
               
            </div>
        </form>
        <hr><hr>

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
