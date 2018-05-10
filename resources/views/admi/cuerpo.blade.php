<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel de administración - @yield('titulo')</title>

    <link rel="icon" type="image/png" href=""/>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/materialize/css/materialize.min.css') }}">
    
    <link type="text/css" rel="stylesheet" href="{{ asset('css/admin.css') }}"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <!-- CABECERA -->
      <header>
      <nav class="top-nav">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">
            @yield('titulo')
          </a>
          <a class="right" href="{{route('usuario.logout')}}">Cerrar sesión</a>
          </div>
        </div>
      </nav>

      <!-- MENÚ -->

      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <div class="logo"><a id="logo-container" href="" class="brand-logo">
          <img class="responsive-img" src="" alt="">
        </a></div>
        <li class="no-padding">

          <ul class="collapsible collapsible-accordion">

            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">home</i>Home</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="">Crear slider</a></li>
                  <li><a href="">Editar slider</a></li>
                  <li><a href="">Editar destacados</a></li>
                  <li><a href="">Editar lineas home</a></li>
                </ul>
              </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">business</i>Empresa</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="">Editar contenido</a></li>
                  <li><a href="">Editar Mision</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">shopping_cart</i>Productos</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="">Crear Familia</a></li>
                  <li><a href="">Editar Familia</a></li>
                  <li><a href="">Crear Categoria</a></li>
                  <li><a href="">Editar Categoria</a></li>
                </ul>
              </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">cloud_download</i>Descargas</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="">Crear descarga</a></li>
                  <li><a href="">Editar descarga</a></li>
                </ul>
              </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">comment</i>Calidad</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="">Crear descarga calidad</a></li>
                  <li><a href="">Editar descarga calidad</a></li>
                  <li><a href="">Editar Calidad</a></li>
                </ul>
              </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">palette</i>Logos</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="">Editar logos</a></li>
                </ul>
              </div>
            </li>


            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">view_headline</i>Datos de la empresa</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="">Editar datos</a></li>
                </ul>
              </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">pin_drop</i>Metadatos</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="">Editar Metadatos</a></li>
                </ul>
              </div>
            </li>
            @if(Auth::user())
                @if(Auth::user()->nivel === 'administrador')
              <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">account_circle</i>Usuarios</a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="">Crear Usuario</a></li>
                    <li><a href="">Editar Usuario</a></li>
                  </ul>
                </div>
              </li>
              @endif
            @endif
          </ul>

      </ul>
    </header>  
    @yield('contenido')                                 
    	</div>
	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Materialize Core JavaScript -->
    <script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>

    <script>
        $(document).ready(function() {
          $('select').material_select();
        });
    </script>


</body>
</html>