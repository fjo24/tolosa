<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>@yield('titulo')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


    
    <script type="text/javascript" src="{{ asset('js/jquery-2.2.0.min.js') }}"></script> 
 <!-- Bootstrap-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/russo-styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/presupuesto.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> 
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">


    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    @yield('css')
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

   

    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">

</head>
<body>
    <div class="container-flex">
        
    @include('pages.templates.header')
        @yield('contenido')
    @include('pages.templates.footer')
    <script src="{{ asset('plugins/jQuery/jquery.js') }}"></script>
    <script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
        @yield('js')
    </div>
</body>
</html>