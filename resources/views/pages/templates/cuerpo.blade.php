<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>@yield('titulo')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
      <!-- CSS MATERIALIZE -->
      <!-- ICONOS MATERIALIZE -->
      <link type="text/css" rel="stylesheet" href="{{asset('plugins/materialize/css/materialize.min.css')}}"  media="screen,projection"/>
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
      <!-- ESTILO -->
      <link rel="stylesheet" href="{{asset('plugins/assets/css/general.css')}}">
      <!-- LOGO FAVICON -->

    <link rel="icon" type="image/png" href=""/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    
	<link href="{{ asset('plugins/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <link href="{{ asset('plugins/dist/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{ asset('plugins/vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('plugins/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/dist/estilos.css') }}" rel="stylesheet">
    <!--Estilos propios-->
    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
    @yield('estilo')
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/set2.css" />

    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">

</head>
<body>
    @include('pages.templates.header')
        @yield('contenido')
    @include('pages.templates.footer')
    <script src="{{ asset('plugins/bootstrap/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
     <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('plugins/vendor/metisMenu/metisMenu.min.js') }}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('plugins/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('plugins/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('plugins/dist-js/sb-admin-2.js') }}"></script>
</body>
</html>