@include('navigation-menu')
<body>
    <h1>{{$evento->titulo}}</h1>
    <h2>{{$evento->subtitulo}}</h2>
    <h3>{{$evento->descripcion}}</h3>
    <img src="/imagen/{{$evento->img}}" alt="">
</body>
@include('footer-menu')