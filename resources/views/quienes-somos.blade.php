<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

@include('navigation-menu')

<body>
    <!-- Page Content-->
    <div class="container px-4 px-lg-5 jumbotron">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="imagen/icons/Logo Vectorizado.png" alt="..." />
            </div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">El Pueblito de Don Luis, Ataco, El Salvador</h1>
                <p>
                    Somos un Hotel en el corazón de Ataco, El Salvador, desde hace 10 años. Nos apasiona servir a
                    nuestros clientes con la calidez y cortesía que nos caracteriza a los salvadoreños.
                    Nuestro principal objetivo es que nuestros huéspedes disfruten de su estadía, haciéndoles sentir
                    como en casa. Nuestro grupo de colaboradores cuidará de todos los pequeños detalles que harán que la
                    experiencia de hospedarse en
                    <b>El Pueblito de Don Luis</b> sea inolvidable.
                </p>
                <a class="btn btn-success btn-sm" href="https://wa.link/hh73sc"
                        target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg> <br> Contáctanos</a>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body">
                <h3 class="text-white m-0">Te ofrecemos</h3><br>
                <img src="/imagen/icons/air-conditioner.png" alt="" class="img-fluid img-thumbnail">
                <img src="/imagen/icons/mask.png" alt="" class="img-fluid img-thumbnail">
                <img src="/imagen/icons/food-service.png" alt="" class="img-fluid img-thumbnail">
                <img src="/imagen/icons/washing-machine.png" alt="" class="img-fluid img-thumbnail">
                <img src="/imagen/icons/alcohol-gel.png" alt="" class="img-fluid img-thumbnail">
                <img src="/imagen/icons/parking.png" alt="" class="img-fluid img-thumbnail">
                <img src="/imagen/icons/pet.png" alt="" class="img-fluid img-thumbnail">
                <img src="/imagen/icons/shower.png" alt="" class="img-fluid img-thumbnail">
            </div>
        </div>

        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7 text-center">
                <a>
                    <img src="/imagen/icons/placeholder.png" alt="B" class="img-fluid img-thumbnail">
                </a>
                <h1 class="font-weight-light">Encuéntranos en Google Maps</h1>
                <a class="btn btn-success" href="https://goo.gl/maps/WjnRmncAUjAnzFxw8" target="_blank" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost-split" viewBox="0 0 16 16">
                        <path d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"/>
                      </svg> <br> Buscar ruta</a>
            </div>
            <div class="col-lg-5 text-center">
               <h2>10 Ave. Norte, 1a Calle Oriente, Concepción de Ataco</h2>
               <h3>Ahuachapán, El Salvador. </h3>
            </div>
        </div>
    </div>
</body>
<footer>
    @include('footer-menu')
</footer>
