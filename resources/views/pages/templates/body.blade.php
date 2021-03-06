<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}"/>
    
    <script type="text/javascript" src="{{ asset('plugins/jQuery/jquery.js') }}"></script> 
 <!-- Bootstrap-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/page/style.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/page/russo-styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/page/presupuesto.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> 
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/layouts/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    
      <!-- CSS MATERIALIZE -->
      <!-- ICONOS MATERIALIZE -->
    <link type="text/css" rel="stylesheet" href="{{asset('plugins/materialize/css/materialize.min.css')}}"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- ESTILO -->

    <!-- LOGO FAVICON -->

    <link rel="icon" type="image/png" href=""/>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Custom Fonts -->
    <link href="{{ asset('plugins/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">

</head>
<body>
    <header>
    <ul id="nav-mobile" class="side-nav fixed">
                    <li><a class="waves-effect waves-admin" href="{{ url('/') }}">HOME</a></li>  
                    <li><a class="waves-effect waves-admin" href="{{ url('/empresa') }}">EMPRESA</a></li>
                    <li><a class="waves-effect waves-admin" href="{{ url('categorias')}}">PRODUCTOS</a></li>
                    <li><a class="waves-effect waves-admin" href="{{ url('/servicios')}}">SERVICIOS</a></li>
                    <li><a class="waves-effect waves-admin" href="{{ url('/obra')}}">OBRA</a></li>
                    <li><a class="waves-effect waves-admin" href="{{ url('/fabrica')}}">FABRICA</a></li>
                    <li><a class="waves-effect waves-admin" href="{{ url('/presupuesto')}}">SOLICITUD DE PRESUPUESTO</a></li>
                </ul>
    <a id="page" class="btn" data-activates="nav-mobile"><i class="material-icons">menu</i></a>
    </header>
    @include('pages.templates.header')
        @yield('contenido')
    @include('pages.templates.footer')
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
    <script type="text/css" rel="stylesheet" href="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"  media="screen,projection"/></script>
        @yield('js')
    <script type="text/javascript">


  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.btnav').sidenav();
  });
  $(document).ready(function(){
    $('.btn').sideNav();
  });
        
        </script>

</body>
</html>