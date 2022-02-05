<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

<style>
    body{
	margin:0;
	padding:0;
}
/* .container{
	width:90%
	margin:10px auto;
} */
.portfolio-menu{
	text-align:center;
}
.portfolio-menu ul li{
	display:inline-block;
	margin:0;
	list-style:none;
	padding:10px 15px;
	cursor:pointer;
	-webkit-transition:all 05s ease;
	-moz-transition:all 05s ease;
	-ms-transition:all 05s ease;
	-o-transition:all 05s ease;
	transition:all .5s ease;
}

.portfolio-item{
	/* width:100%; */
}
.portfolio-item .item{
	/* width:303px; */
	float:left;
	margin-bottom:10px;
}
</style>
@include('navigation-menu')
 <div class="container jumbotron">
         <div class="row">
            <div class="col-lg-12 text-center my-2">
               <h4>En el Pueblito de Don Luis podrás disfrutar de esto y mucho más</h4>
            </div>
         </div>
         <div class="portfolio-menu mt-2 mb-4">
            <ul>
               <li class="btn btn-outline-dark active" data-filter="*">Todas</li>
               <li class="btn btn-outline-dark" data-filter=".hab">Habitaciones</li>
               <li class="btn btn-outline-dark" data-filter=".res">Restaurante</li>
               <li class="btn btn-outline-dark text" data-filter=".gar">Otros</li>
            </ul>
         </div>
         <div class="portfolio-item row">
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/Jardin/1.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/Jardin/1.JPG" alt="">
                </a>
             </div>
            {{-- <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioElAngel/1.JPG" class="fancylight popup-btn " data-fancybox-group="light"> 
               <img class="img-fluid" src="/imagen/CabanaBarrioElAngel/1.JPG" width="100%" height="auto" alt="">
               </a>
            </div> --}}
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/2.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/2.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioElAngel/2.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaBarrioElAngel/2.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioElAngel/3.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaBarrioElAngel/3.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioElAngel/4.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaBarrioElAngel/4.JPG" alt="">
               </a>
            </div>
            <div class="item res col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Restaurante/1.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Restaurante/1.JPG" alt="">
               </a>
            </div>
            <div class="item res col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Restaurante/6.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Restaurante/6.jpeg" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioElAngel/6.jpeg" class="fancylight popup-btn " data-fancybox-group="light"> 
               <img class="img-fluid" src="/imagen/CabanaBarrioElAngel/6.jpeg" width="100%" height="auto" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/20.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/20.jpeg" alt="">
               </a>
            </div>
            <div class="item res col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Restaurante/7.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Restaurante/7.jpeg" alt="">
               </a>
            </div>
            <div class="item res col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Restaurante/2.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Restaurante/2.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioElAngel/5.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaBarrioElAngel/5.JPG" alt="">
               </a>
            </div>
            <div class="item res col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Restaurante/3.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Restaurante/3.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioElAngel/6.jpeg" class="fancylight popup-btn " data-fancybox-group="light"> 
               <img class="img-fluid" src="/imagen/CabanaBarrioElAngel/6.jpeg" width="100%" height="auto" alt="">
               </a>
            </div>
            <div class="item res col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Restaurante/8.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Restaurante/8.jpeg" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/21.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/21.jpeg" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioSanAntonio/1.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaBarrioSanAntonio/1.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioSanAntonio/2.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaBarrioSanAntonio/2.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/22.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/22.jpeg" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioSanAntonio/3.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaBarrioSanAntonio/3.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaBarrioSanAntonio/4.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaBarrioSanAntonio/4.JPG" alt="">
               </a>
            </div>
            <div class="item res col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Restaurante/5.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Restaurante/5.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/23.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/23.jpeg" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaDonaMercedes/1.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaDonaMercedes/1.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/4.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/4.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/5.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/5.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/24.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/24.jpeg" alt="">
               </a>
            </div>
            {{-- <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/icons/logo-vectorizado.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/icons/logo-vectorizado.jpg" alt="">
               </a>
            </div> --}}
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaDonaMercedes/2.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaDonaMercedes/2.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaDonaMercedes/3.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaDonaMercedes/3.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/CabanaDonaMercedes/4.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/CabanaDonaMercedes/4.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/CabanaDonaMercedes/5.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/CabanaDonaMercedes/5.JPG" alt="">
                </a>
             </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/Jardin/16.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/Jardin/16.JPG" alt="">
                </a>
             </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/6.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/Jardin/17.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/Jardin/17.JPG" alt="">
                </a>
             </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/CabanaDonaMercedes/6.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/CabanaDonaMercedes/6.JPG" alt="">
                </a>
             </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/7.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/7.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/CabanaDonLuis/1.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/CabanaDonaMercedes/1.JPG" alt="">
                </a>
             </div>
             <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/Jardin/15.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/Jardin/15.JPG" alt="">
                </a>
             </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/8.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/8.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/9.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/9.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/10.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/10.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/Jardin/18.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/Jardin/18.JPG" alt="">
                </a>
             </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/CabanaDonLuis/2.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/CabanaDonaMercedes/2.JPG" alt="">
                </a>
             </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/11.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/11.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-6 col-sm">
               <a href="/imagen/Jardin/12.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/1.JPG" alt="">
               </a>
            </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/Jardin/19.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/Jardin/19.JPG" alt="">
                </a>
             </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/CabanaDonLuis/3.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/CabanaDonaMercedes/3.JPG" alt="">
                </a>
             </div>
             <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/CabanaDonLuis/4.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/CabanaDonaMercedes/4.JPG" alt="">
                </a>
             </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/13.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/13.JPG" alt="">
               </a>
            </div>
            <div class="item hab col-lg-3 col-md-4 col-6 col-sm">
                <a href="/imagen/CabanaDonLuis/5.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="/imagen/CabanaDonaMercedes/5.JPG" alt="">
                </a>
             </div>
            <div class="item gar col-lg-3 col-md-4 col-6 col-sm">
               <a href="/imagen/Jardin/14.JPG" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="/imagen/Jardin/14.JPG" alt="">
               </a>
            </div>
         </div>
      </div>
      @include('footer-menu')
      <script>
        //           $('.portfolio-item').isotope({
        //  	itemSelector: '.item',
        //  	layoutMode: 'fitRows'
        //  });
         $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');
         	
         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });
      </script>