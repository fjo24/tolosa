<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <title>
         @yield('title')
      </title>
      <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
      <!-- CSS MATERIALIZE -->
      <!-- ICONOS MATERIALIZE -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="{{asset('plugins/materialize/css/materialize.min.css')}}"  media="screen,projection"/>
      <!-- ESTILO -->
      <link rel="stylesheet" href="{{asset('plugins/assets/css/general.css')}}">
      <!-- LOGO FAVICON -->
      <link rel="icon" type="image/png" href=""/>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="csrf-token" content="I3YUn3bw3ZaeBn99fYajYHTLoT7YaVQeAJRHkIgr">
      <!-- JQUERY -->
      <script type="text/javascript" src="{{asset('plugins/jQuery/jquery.js')}}"></script>
      <!-- JS MATERIALIZE -->
      <script type="text/javascript" src="{{asset('plugins/materialize/js/materialize.min.js')}}"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
   </head>
   <body>
      <!-- CABECERA -->
      <header>
<div class="container-fluid padding-content hidden-xs " style="padding-right: 150px;">
    

    <div class="li-contacto">
      <a href="">
        <img src="" alt="" style="margin-right: 5px;">CONTACTO
      </a>
    </div>
     <div class="li-solicitud">
      <a href="">SOLICITUD DE PRESUPUESTO </a>
    </div>
    <div class="li-search">
      <a href="">
        <img src="{{asset('img/generico/lupa.png')}}" alt="">
      </a>
    </div>
  </div>

  <nav class="navbar navbar-default nav-ppal ">
  <div class="container responsive-logo">
  
      <div class="navbar-header ">
          <a class="navbar-brand " href="">
              <img class="img-responsive logo" src="plugins/assets/images/logo_principal.png"  />
          </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Desplegar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
    <div class="margin-header">
      <!-- Brand and toggle get grouped for better mobile display -->
     
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
        <ul class="nav navbar-nav navbar-right menu" >
            <li class="active-ppal li-ppal animated zoomIn"><a href="" >HOME</a></li>
        
          
          <li class="{{ Request::segment(1) === 'empresa' ? 'active-ppal' : null }} li-ppal animated zoomIn"><a href="" >EMPRESA</a></li>

          <li class="{{ Request::segment(1) === 'servicios' ? 'active-ppal' : null }} li-ppal animated zoomIn"><a href="" >SERVICIOS</a></li>
          <li class="{{ Request::segment(1) === 'clientes' ? 'active-ppal' : null }} li-ppal animated zoomIn"><a href="" >CLIENTES</a></li>
          <li class="{{ Request::segment(1) === 'procesos' ? 'active-ppal' : null }} li-ppal animated zoomIn"><a href="" >PROCESOS DE FABRICACION</a></li>
          
          <li class="{{ Request::segment(1) === 'calidad' ? 'active-ppal' : null }} li-ppal animated zoomIn"><a href="}" >CALIDAD</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
    
  </div><!-- /.container-fluid -->
</nav>
      </header>
      <!-- CUERPO -->
      @yield('contenido')
      <!-- FOOTER -->
      <footer class="page-footer">
         footer
      </footer>
      <script type="text/javascript">
           document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
        
      </script>
   </body>
</html>