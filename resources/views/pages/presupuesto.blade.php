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
<form method="POST" action="_enviar_presupuesto.php">
    <div class="container" style="margin-bottom: 100px;">
        <div class="row" style="margin-top: 100px;">
            <div id="estado1" >
                <div class="col l12">
                    <div align="center">
                        <img style="align-items: center;" src="{{ asset('img/presupuesto/solicitud-datos.fw.png') }}">
                        <div class="col l7">
                            <span class="fs20 cv20">
                            <b>TUS DATOS</b>
                            </span>
                        </div>
                        <div class="col l3">
                            <span class="fs20">
                            TU OBRA
                            </span>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="input-field col l5 push-l1">
                            <input type="text" id="nombre" placeholder="Nombre" class="">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="input-field col l5 push-l1">
                            <input type="text" id="localidad" placeholder="Localidad" class="">
                            <label for="localidad">Localidad</label>
                        </div>
                        <div class="input-field col l5 push-l1">
                            <input type="text" id="email" placeholder="Email" class="">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col l5 push-l1">
                            <input type="text" id="telefono" placeholder="Teléfono" class="">
                            <label for="telefono">Teléfono</label>
                        </div>
                        <div class="input-field col l3 pull-l1 right">
                            <a type="submit" id="botonSiguienteEstado" class="btn right z-depth-0" style="margin-top: 20px; background-color:#4F559E; color:white; font-weight: bold;">Siguiente</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="estado2" style="display: none;">
            <div class="col l12">
                <div align="center">
                    <img style="align-items: center;" src="{{ asset('img/presupuesto/solicitud-datos.fw.png') }}">
                    <div class="col l7">
                        <span class="fs20">
                        TUS DATOS
                        </span>
                    </div>
                    <div class="col l3">
                        <span class="fs20 cv20">
                        <b>TU OBRA</b>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l5 push-l1">
                        <textarea id="descripcion" placeholder="Mensaje" class="materialize-textarea validate"></textarea>
                        <label for="descripcion">Mensaje</label>
                    </div>
                    <div class="input-field col l5 push-l1">
                        <input type="text" id="trefilado" placeholder="Plano" class="validate">
                        <label for="trefilado">Plano</label>
                    </div>
                    <div align="right">
                      <div class="file-field col l5 push-l1">
                        <div class="btn" style="background: #4F559E;">
                          <span>Examinar</span>
                          <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Upload file">
                        </div>
                      </div>
                    </div>
                    <div class="input-field col l3 pull-l1 right">
                        <a type="submit" id="botonEstadoAnterior" class="btn center z-depth-0" style="margin-top: 20px; background-color:white; border:1px solid #4F559E; color:black;">Anterior</a>
                        <button type="submit" id="botonSiguienteAnterior" class="btn right z-depth-0" style="margin-top: 20px; background-color:#4F559E; color:white; font-weight: bold;">Enviar</button>
                    </div>
                </div>
            </div>
            </div>
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
            
            document.getElementById("elDiv1").className = "paso datos col m2 col l2 offset-m1";
            document.getElementById("elDiv2").className = "paso obra active col m4 col l4 push-l3";
        }, 1000);

    }
    
    function mostrarEstado1() {
        document.getElementById("estado2").className = "animated bounceOutLeft";
        
        setTimeout(function(){ 
            document.getElementById("estado2").style.display = "none"; 
            document.getElementById("estado1").style.display = "block";
            document.getElementById("estado1").className = "animated bounceInRight";
            
            document.getElementById("elDiv1").className = "paso datos active col m2 col l2 offset-m1";
            document.getElementById("elDiv2").className = "paso obra col l2 col m4 col l4 push-l3";
        }, 1000);
    }
    
    function animacion(id, clase) {
        $(id).removeClass("animated "+clase).addClass(clase + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass("animated "+clase);
        });
    };
    </script>
    <script>
    $('.slider').slider({
        indicators: true,
        height: 334,
        width: 1330
    });

</script>
@endsection