@extends('pages.templates.body')
@section('title', 'Tolosa - Producto')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/russo-styles.css') }}" media="all" />
<link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/reset.css') }}" media="all" />
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/productos.css') }}">
<script src="http://code.jquery.com/jquery-latest.min.js"></script> <!-- llamado a jQuery (lo tire aca porque sino el slider no anda) -->
@endsection
@section('contenido')
<div id="cuerpo">
   <div>
      <link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/slider-home.css') }}" media="all" />
      <!-- css del slider -->
      <link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/jssor.js') }}" media="all" />
      <!-- js para que ande el slider -->
      <link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/jssor.slider.js') }}" media="all" />
      <!-- js para que ande el slider -->
      <!-- Jssor Slider Finish --> 
      <section class="aberturas">
         <!--  <div class="container">-->
         <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cont-miga">
               <div class="miga">
                  <div>
                     <h7>
                <a href="/categorias" style="color: gray";>productos • </a>
                <a href="{{ route('productos', $categoria->id)}}" style= "color: gray;text-transform: lowercase">{!!$categoria->nombre !!} • </a>
                <a href="" style= "color: gray;text-transform: lowercase">{!!$producto->nombre !!}</a>
              </h7>
                  </div>
               </div>
            </div>
            <br><br><br>
            <div class="cont-aberturas">
               <div class="item-detalle table">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 floatInherit slider-detalle">
                     <div class="slider"  >
                        <ul class="slides" style="background-color: white">
                          @foreach($modelo->imagenes as $img)
                           <li>
                              <img class="responsive-img" src="{{asset($img->ubicacion)}}">
                           </li>
                          @endforeach
                        </ul>
                     </div>
                  </div>

                  <div class="col s12 m6 floatInherit main-desc" style="line-height: 15px!important;">
                     {!! $modelo->texto !!}
                     <div class="clear"></div>
                     <div class="cont-btns-catalogo">
                     </div>
                  </div>
               </div>
               <div class="clear"></div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item-ficha">
                  <div id="pop-up-ficha" class="pop-up-ficha dNone">
                     <button id="btn-close" onclick="$(this).parent().addClass('dNone')"></button>
                     <h4 id="pop-up-tit"></h4>
                     <p id="pop-up-desc"></p>
                  </div>
                  <ul class="nav nav-tabs nav-justified">
                     <li id="liTipos"><a data-toggle="tab" href="#tipos">tipos</a></li>
                     <li id="liLineas"><a data-toggle="tab" href="#lineas">tipología de vidrio</a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="tipos" class="tab-pane fade">
                        <div class="cont-item-tipos">
                           @foreach($modelo->tipos_ventana as $tipo)
                           <div class="item-tipo">
                              <a href="javascript:openFicha('t', {{ $tipo->id }})" class="img anima2">
                                 <div class="overlay anima2">
                                    <span class="glyphicon glyphicon-plus centeredY"></span>
                                 </div>
                                 @foreach($imgtipos as $imagen)
                                 @if($imagen->tipos_ventana_id == $tipo->id)  
                                 <img style="width: 145px;height: 184px" src="{{asset($imagen->ubicacion)}}" alt="">
                                 @break;
                                 @endif
                                 @endforeach
                                 <span id="t-tit-{{ $tipo->id }}">{{ $tipo->nombre }}</span>
                                 <span id="t-desc-{{ $tipo->id }}" class="anima2" style="display: none">{!! $tipo->info !!}</span>
                              </a>
                           </div>
                           @endforeach
                        </div>
                     </div>
                     <div id="lineas" class="tab-pane fade">
                        <div class="cont-item-lineas">
                           <div class="card" style="background-color: white;">
                              <div class="card-tabs" style="background-color: #32398E;">
                                 <ul class="tabs tabs-fixed-width" style="background-color: #DDDDDD;">
                                    <li class="tab"><a class="active" href="#vidrio1" style="color: #878787; font-weight: bold;">{{ $vidrio1->nombre }}</a></li>
                                    <li class="tab"><a href="#vidrio2" style="color: #878787; font-weight: bold;">{{ $vidrio2->nombre }}</a></li>
                                 </ul>
                              </div>
                              <div id="vidrio1" style="padding: 15px;">
                                 <div class="col l5 s12 hide-on-med-and-down" >
                                    @foreach($imgvidrio as $imagen)
                                    @if($imagen->tipos_vidrio_id == 1)  
                                    <img style="width: 380px;height: 320px; padding: 35px 55px;" src="{{asset($imagen->ubicacion)}}" alt="">
                                    @break;
                                    @endif
                                    @endforeach   
                                 </div>
                                 <div class="">
                                    <div class="col l7 s12"  style="margin: 10px 60px; font-family: 'Source Sans Pro', sans-serif!important; color: red!important;">
                                       {!! $vidrio1->info !!}  
                                    </div>
                                 </div>
                              </div>
                              <div id="vidrio2" style="padding: 15px;">
                                 <div class="col l5 s12 hide-on-med-and-down" >
                                    @foreach($imgvidrio as $imagen)
                                    @if($imagen->tipos_vidrio_id == 2)  
                                    <img style="width: 380px;height: 320px; padding: 35px 55px;" src="{{asset($imagen->ubicacion)}}" alt="">
                                    @break;
                                    @endif
                                    @endforeach   
                                 </div>
                                 <div class="">
                                    <div class="col l7 s12"  style="margin: 10px 60px; font-family: 'Source Sans Pro', sans-serif;">
                                       {!! $vidrio2->info !!}  
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="cont-aberturas">
         </div>
   </div>
</div>
</section>
</div> 
</div>
<!-- Todos los plugins JavaScript de Bootstrap (también puedes
   incluir archivos JavaScript individuales de los únicos
   plugins que utilices) -->
<script src="{{ asset('app/bootstrap/js/bootstrap.js') }}"></script>
</div>
</body>
</html>
@endsection
@section('js')
<script>
   $(document).ready(function(){
     $('.carousel').carousel({
         dist: 5,
         numVisible: 0,
         padding: 10,
         duration: 100,
         indicators: true,
       });
   });
      $('.slider').slider({
         indicators: true,
         height: 380,
         width: 400
     });
   
</script> 
<script>
   function openFicha(type, id){
     $("#pop-up-ficha").removeClass("dNone");
     $("#pop-up-tit").html($('#'+type+'-tit-'+id).html());
     $("#pop-up-desc").html($('#'+type+'-desc-'+id).html());
   }
   
   var firstLi = 1;
   var lastLi = 2;
   var actualLi = 0;
   
   function passLiR(){
     actualLi ++;
     
     if(actualLi > lastLi){
       actualLi = firstLi;
     }
   
     $(".li").hide();
     $(".li"+actualLi).show();
   }
   
   function passLiL(){
     actualLi --;
     
     if(actualLi < firstLi){
       actualLi = lastLi;
     }
   
     $(".li").hide();
     $(".li"+actualLi).show();
   }
   
   $(function(){
     passLiR();
     
         
         
     $(".nav.nav-tabs.nav-justified").children().first().addClass("active");
     $(".tab-content").children().first().addClass("active");
     $(".tab-content").children().first().addClass("in");
   });
   
     var instance = M.Carousel.init({
     fullWidth: true,
     indicators: true
   });
   
   // Or with jQuery
   
   $('.carousel.carousel-slider').carousel({
     fullWidth: true,
     indicators: true
   });
         
</script>
@endsection