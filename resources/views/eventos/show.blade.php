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
@include('navigation-menu')

<body>
    <div class="jumbotron">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-info">{{ $evento->titulo }}</h1>
                    <h2 class="text-center text-info">{{ $evento->subtitulo }}</h2>
                    <div class="text-justify">
                        {{ $evento->descripcion }}
                    </div>
                </div>
            </div>
        </div>
        <div class="container page-top jumbotron">
            <h1>Imágenes del evento</h1>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="/imagen/{{ $evento->img }}" class="fancybox" rel="ligthbox">
                        <img src="/imagen/{{ $evento->img }}" class="zoom img-fluid " alt="">
    
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="/imagen/{{ $evento->img2 }}" class="fancybox" rel="ligthbox">
                        <img src="/imagen/{{ $evento->img2 }}" class="zoom img-fluid " alt="">
    
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="/imagen/{{ $evento->img3 }}" class="fancybox" rel="ligthbox">
                        <img src="/imagen/{{ $evento->img3 }}" class="zoom img-fluid " alt="">
    
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- Page Content -->
    
</body>

@include('footer-menu')
