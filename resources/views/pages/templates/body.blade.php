<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>@yield('titulo')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/layouts/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/footer.css') }}">
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

    <!-- JS MATERIALIZE -->
      <script type="text/javascript" src="{{asset('plugins/materialize/js/materialize.min.js')}}"></script>
    


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