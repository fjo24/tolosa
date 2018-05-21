@extends('pages.templates.body')
@section('title', 'Tolosa - Presupuesto')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/estilos.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/empresas.css') }}">
@endsection
@section('contenido')
<div class="container">
  
<div class="flex-containter">
  <div class="slider hide-on-med-and-down" >
      <ul class="slides">
      @foreach($sliders as $slider)
         <li>
            <img src="{{asset($slider->imagen)}}" style="width: 120%; height: 110%">
            <div class="caption empresa_slider_dif" style="">
               <div style="padding-top: 25px">  
                  <span style="text-align: left; padding: 3%;font-weight: lighter;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: lighter;">{!! $slider->texto !!}</span><br>
                  <span style="padding: 3%;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: bold;">{!! $slider->texto2 !!}</span>
                  <hr style="position: absolute; left: 20px; bottom: 25px ;width: 80%">
               </div>
            </div>
          </li>
      @endforeach
      </ul>
   </div>
   <div class="row">
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 main-cont presupuesto center" style="float: initial">  
                   
                  
                  <form action="{{route('enviarpresupuesto')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
            <div id="estado1">
            <div class="cont-pasos table">
                        <img style="align-items: center;" src="{{asset('img/presupuesto/solicitud-datos.fw.png')}}">
                      <div class="paso datos active col-xs-12 col-sm-2 col-md-2 col-lg-2 col-md-offset-1" id="elDiv1">
                          <span></span>
                          <p class="fuenteRC">TUS DATOS</p>
                          <div class="linea-t"></div>
                      </div>
                      <div class=" col-xs-12 col-sm-3 col-md-3 col-lg-3 re-padding">
                          <hr class="hidden-xs" style="margin-top: 60px;">
                      </div>
                      <div class="paso obra col-xs-12 col-sm-4 col-md-4 col-lg-4" id="elDiv2">
                          <span></span>
                          <p class="fuenteRC">TU PIEZA</p>
                          <div class="linea-t"></div>
                      </div>
                  </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6  pasos paso-1">
                    <p>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="" placeholder="Nombre"  title="" required>
                    </p>
                    <p>
                        <input type="text" name="mail" id="mail" class="form-control" value="" placeholder="E-mail" title="" required>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pasos paso-1">
                    <p>
                        <input type="text" name="localidad" id="est" class="form-control" value="" placeholder="Localidad"  title="">
                    </p>
                    <p>
                        <input type="text" name="tel" id="tel" class="form-control" value="" placeholder="Teléfono" title="">
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cont-btn">
                    <!-- <a href="presupuesto.php">Paso anterior</a> -->
                    <button type="button" class="btn btn-default pull-right anima2 boton-siguiente" id="botonSiguienteEstado">Siguiente</button>
                </div>
            </div>
            
            <div id="estado2" style="display: none;">

            <div class="cont-pasos table">
                        
                      <div class="paso datos active col-xs-12 col-sm-2 col-md-2 col-lg-2 col-md-offset-1" id="elDiv1">
                          <span></span>
                          <p class="fuenteRC">TUS DATOS</p>
                          <div class="linea-t"></div>
                      </div>
                      <div class=" col-xs-12 col-sm-3 col-md-3 col-lg-3 re-padding">
                          <hr class="hidden-xs" style="margin-top: 60px;">
                      </div>
                      <img style="align-items: center;" src="{{asset('img/presupuesto/solicitud-obras.fw.png')}}">
                      <div class="paso obra col-xs-12 col-sm-4 col-md-4 col-lg-4" id="elDiv2">
                          <span></span>
                          <p class="fuenteRC">TU PIEZA</p>
                          <div class="linea-t"></div>
                      </div>
                  </div>



                  
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pasos paso-2">
                    <p>
                        <textarea name="detalle" id="detalle" placeholder="Detalles" class="form-control" rows="6" style="height: 90px;"></textarea>
                    </p>
                    
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pasos paso-2" style="margin-bottom: 40px">
                    <p>
                        <input type="text" name="medida" id="medida" placeholder="Plano (opcional)" class="form-control" value="" title="">
                    </p>
                    <div class="examinar">
                        <div class="input-group">

                        <label id="plano" class="col-xs-10 form-control plano-margen opcional" style="width: 50%;color: rgba(85,85,85,0.64);">... </label>
                     <!--      <input type="text" name="plano" id="plano" placeholder="Plano (opcional)"  class="col-xs-10 form-control plano-margen" style="">-->
                            <label class="input-group-btn" style="margin-top: 10px;">
                                <span class="btn-exam ">
                                    <input type="file" style="display: none;" name="archivo" id="archivo" multiple="">
                                    Examinar
                                </span>
                            </label>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cont-btn">
                    <button type="submit" class="btn btn-default pull-right anima2 boton-enviar fuenteRC">Enviar</button>
                    <button type="button" class="btn btn-default pull-right anima2 boton-atras fuenteRC" id="botonEstadoAnterior">Anterior</button>
                </div>
            </div>
            
            </form>
                   
                 </div>
            </div>






</div>
</div>
@endsection
@section('js')


<script>

     document.getElementById("botonSiguienteEstado").addEventListener("click", mostrarEstado2);
    document.getElementById("botonEstadoAnterior").addEventListener("click", mostrarEstado1);

    function mostrarEstado2() {
        document.getElementById("estado1").className = "animated bounceOutLeft";
        setTimeout(function(){ 
            document.getElementById("estado1").style.display = "none"; 
            document.getElementById("estado2").style.display = "block";
            document.getElementById("estado2").className = "animated bounceInRight";
            
            document.getElementById("elDiv1").className = "paso datos col-xs-12 col-sm-2 col-md-2 col-lg-2 col-md-offset-1";
            document.getElementById("elDiv2").className = "paso obra active col-xs-12 col-sm-4 col-md-4 col-lg-4";
        }, 1000);

    }
    
    function mostrarEstado1() {
        document.getElementById("estado2").className = "animated bounceOutLeft";
        
        setTimeout(function(){ 
            document.getElementById("estado2").style.display = "none"; 
            document.getElementById("estado1").style.display = "block";
            document.getElementById("estado1").className = "animated bounceInRight";
            
            document.getElementById("elDiv1").className = "paso datos active col-xs-12 col-sm-2 col-md-2 col-lg-2 col-md-offset-1";
            document.getElementById("elDiv2").className = "paso obra col-xs-12 col-sm-4 col-md-4 col-lg-4";
        }, 1000);
    }
    
    function animacion(id, clase) {
        $(id).removeClass("animated "+clase).addClass(clase + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass("animated "+clase);
        });
    };
    document.getElementById('archivo').onchange = function () {
      console.log(this.value);
      document.getElementById('plano').innerHTML = document.getElementById('archivo').files[0].name;
    }
    </script>
    <script>
    $('.slider').slider({
        indicators: true,
        height: 334,
        width: 1330
    });

</script>
@endsection