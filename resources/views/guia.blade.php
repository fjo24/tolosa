

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ABERTURAS EZEIZA - ABERTURAS EZEIZA</title>
        <script language="javascript" src="http://www.aberturasezeiza.com.ar/app/scripts/scripts.php"></script>
			  <script language="javascript" src="http://www.aberturasezeiza.com.ar/app/scripts/valida_forms.php"></script>
			  <script language="javascript" src="http://www.aberturasezeiza.com.ar/app/scripts/select_dinamico.php"></script>
    <!-- JS -->
	<script src="app/scripts/respond.js"></script> <!-- llamado a RESPOND para hacer que IE viejos entienda la semantica de HTML5. ESTE VA ARRIBA -->
	<script src="app/scripts/modernizr.js"></script> <!-- llamado a MODERNIZR para hacer que IE viejos entienda la semantica de HTML5. ESTE VA ARRIBA -->
	<script type="text/javascript" src="app/scripts/fontsmoothie.min.js" async></script><!-- FONT SMOOTHIE -->
	
	<link rel="stylesheet" type="text/css" href="app/scripts/reset.css" media="all" /> <!-- llamado al CSS de RESET -->
	<link rel="stylesheet" type="text/css" href="app/scripts/bootstrap.css" media="all" /> <!-- llamado al CSS de BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="app/scripts/fontello.css" media="all" /> <!-- llamado a MIS STYLES -->
    <link rel="stylesheet" type="text/css" href="app/scripts/avenir.css" media="all" /> <!-- FONTF@ACE -->

	<!-- javascript --><!-- JQUERY -->
	 <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'> <!-- llamado Source Sans
    <link rel="stylesheet" type="text/css" href="app/scripts/dolce-vita.css" media="all" /> <!-- DOLCE VITA FONT -->
    <link rel="stylesheet" type="text/css" href="app/scripts/myriad-pro.css" media="all" /> <!-- llamado aMyriad Pro FONT FACE -->
	
	
<link href="app/scripts/responsive-slider.css" rel="stylesheet"> <!-- llamado a RUSSO SLIDER STYLES -->

<!-- MENU -->
    <link rel="stylesheet" type="text/css" href="app/scripts/alpha-menu.css" />
    <link rel="stylesheet" type="text/css" href="app/scripts/orange.css" class="skin" />
    <link rel="stylesheet" type="text/css" href="app/scripts/font-awesome.min.css" />


	<link rel="stylesheet" type="text/css" href="app/scripts/russo-styles.css" media="all" /> <!-- llamado a MIS STYLES -->



	<script src="http://code.jquery.com/jquery-latest.min.js"></script> <!-- llamado a jQuery (lo tire aca porque sino el slider no anda) -->
	<script src="app/scripts/jquery-ui.min.js"></script> 
	
	<script type="text/javascript" src="app/scripts/jquery.alpha-menu.js"></script>

    <script>
        var api;
    
        $(document).ready(function() {
            api = $(".alpha-menu").alphaMenu({
                responsive:"switch-margin"
            });
            
            /*//verifico el ancho de la pantalla
            if($(window).width() <= 768)
            {
            	$(".alpha-menu li").hide();
            	$("#hamburguesa").click(function(){
            		$('#menu-mobile').toggle();

            	})

            }*/
        });
        
    </script>

    <meta name="description" content="" />
    <meta name="keywords" content="" />

  </head>
  <body>
  	<div class="container-fluid">
  	
      	    <header>
        <div class="menu container">
            <div class="logo col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <a href="home.php">
		                        <img src="" class="img-responsive centeredX" alt="Image">
                </a>
            </div>
            <div class="redes hidden-xs">
                <ul>
		                        <li><a target="_blank" href="https://www.facebook.com/aberturasezeiza/"><img src="
                        images/ico-facebook.jpg" class="img-responsive" alt="Image"></a></li>
                                                                            </ul>
            </div>
            <div class="lateral col-xs-12 col-sm-9 col-md-9 col-lg-9 box">
                <div class="navegador header-inner wrapper clearfix">
                    <ul class="alpha-menu nav-tabs nav-justified am-js-0 am-full-width am-response-margin am-response-switch">
                        <!-- Responsive toggle -->
                        <li class="am-responsive-toggle">
                            <span>Menu</span>
                        </li>
                        
                        <!-- Simple item -->
                        <li class=" empresa">
                            <a href="empresa.php" class="anima2">empresa</a>
                        </li>
                        <li class="active productos">
                            <a href="productos.php" class="anima2">productos</a>
                            <ul am-size="250" class="boostKeyframe" style="width: 250px; animation: none;">
				<li><a href="aberturas.php?categoriaId=10">Ventanas</a></li><li><a href="aberturas.php?categoriaId=12">Puertas</a></li><li><a href="aberturas.php?categoriaId=13">Portones</a></li><li><a href="productos_detalle.php?productoId=4">Mamparas de ba&ntilde;o</a></li><li><a href="productos_detalle.php?productoId=5">Cerramientos / Techos</a></li><li><a href="productos_detalle.php?productoId=6">Curvados PVC | aluminio</a></li><li><a href="productos_detalle.php?productoId=11">Vidrio</a></li><li><a href="productos_detalle.php?productoId=14">Divisores de oficina</a></li><li><a href="productos_detalle.php?productoId=2">Ventanas madera</a></li><li><a href="productos_detalle.php?productoId=3">Velux</a></li><li><a href="productos_detalle.php?productoId=10">Cortinas</a></li><li><a href="productos_detalle.php?productoId=13">Frentes de placard normalizado</a></li><li><a href="productos_detalle.php?productoId=7">Frentes de placard Integral</a></li><li><a href="productos_detalle.php?productoId=12">Herrajes</a></li>                            </ul>
                        </li>
                        <li class=" servicios">
                            <a href="servicios.php" class="anima2">servicios</a>
                        </li>
                        <li class=" obras">
                            <a href="obras.php" class="anima2">obras</a>
                        </li>
                        <li class=" fabrica">
                            <a href="fabrica.php" class="anima2">fábrica</a>
                        </li>
                        <li class=" contacto">
                            <a href="contacto.php" class="anima2">Contacto</a>
                        </li>
                    </ul>  
                </div>     
            </div>
        </div> 
    </header>
            <header style="display: none">
		<div class="menu container">
			<div class="logo col-xs-4 col-sm-3 col-md-2 col-lg-2">
                <a href="http://www.aberturasezeiza.com.ar/home.php?idioma=es">                      </a>
            </div>
            <div class="lateral col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <!--NAVEGADOR -->
                <button type="button" id="hamburguesa" class="btn btn-default"></button>
                <div class="navegador header-inner wrapper hidden-xs">
                    <ul class="alpha-menu nav-tabs nav-justified am-js-0 am-full-width am-response-margin am-response-switch">
                    <!--<input type='button' id="hamburguesa" value="===">-->
                    
                        <!-- Responsive toggle -->
                        <!--<li class="am-responsive-toggle">
                            <span>Menu</span>
                        </li>-->
                       <!-- Simple item -->
                        <li class="empresa">
                            <a href="empresa.php?idioma=es" class="anima2">Empresa</a>
                            <ul am-size="300">
						    <li><a href="videos.php?idioma=es">Videos</a></li> 
                            </ul>
                        </li>
                        <li class="productos">
                            <a href="productos.php?idioma=es" class="anima2">Productos</a>
                        </li>
                        <li class="recetas">
                            <a href="recetas.php?idioma=es" class="anima2">Recetas</a>
                        </li>
                        <li class="novedades">
                            <a href="novedades.php?idioma=es" class="anima2">Novedades</a>
                        </li>
                        <li class="tienda">
                            <a href="tienda.php?idioma=es" class="anima2">Tienda</a>
                        </li>
                        <li class="enlaces">
                            <a href="enlaces.php?idioma=es" class="anima2">Enlaces</a>
                        </li>
                        <li class="descargas">
                            <a href="descargas.php?idioma=es" class="anima2">Descargas</a>
                        </li>
                        <li class="contacto">
                            <a href="contacto.php?idioma=es" class="anima2">Contacto</a>
                        </li>
                    </ul> 
                </div>
                <div class="lang hidden-xs">
                    <ul>
                        <li class="active"><a href="home.php?idioma=es" class="anima2">es</a></li>
                        |
                        <li class=""><a href="home.php?idioma=en" class="anima2">en</a></li>
                    </ul>
                </div>   
            </div>
		</div>  
	</header>
           
      
      <div id="cuerpo">
        <div>
             <link rel="stylesheet" href="app/scripts/slider-home.css"> <!-- css del slider -->
    <script type="text/javascript" src="app/scripts/jssor.js"></script> <!-- js para que ande el slider -->
    <script type="text/javascript" src="app/scripts/jssor.slider.js"></script> <!-- js para que ande el slider -->
<script>
        jQuery(document).ready(function ($) {

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Finish --> 
<article class="main-slider">
    <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1400px; height: 275px; overflow: hidden;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1400px; height: 275px; overflow: hidden;">
                        <div>
                <img u="image" src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/ProductoPortada/imagen9%20test%20%281%29.png" />
                
                <div style="position: absolute; overflow: hidden; bottom: 20%; left: 12%; padding: 1.3%; text-align: left; line-height: 56px; font-size: 56px; color: #FF9933; background: rgba(255, 255, 255, .8); font-family: 'Source Sans Pro', sans-serif; font-weight: 300; text-transform: uppercase;">
			<p><b>Experiencia</b></p>
                </div>
            </div>
                        <div>
                <img u="image" src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/ProductoPortada/imagentecho.png" />
                
                <div style="position: absolute; overflow: hidden; bottom: 20%; left: 12%; padding: 1.3%; text-align: left; line-height: 56px; font-size: 56px; color: #FF9933; background: rgba(255, 255, 255, .8); font-family: 'Source Sans Pro', sans-serif; font-weight: 300; text-transform: uppercase;">
			<p><b>Calidad<b></p>
                </div>
            </div>
                    </div>
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>

        <style>
            .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(images/a21.png) center center no-repeat;
                overflow: hidden;
            }
            .jssora21l { background-position: -3px -33px; }
            .jssora21r { background-position: -63px -33px; }
            .jssora21l:hover { background-position: -123px -33px; }
            .jssora21r:hover { background-position: -183px -33px; }
            .jssora21ldn { background-position: -243px -33px; }
            .jssora21rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
    </div>
    <!-- Jssor Slider End -->
	</article>





<section class="aberturas">
    <div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cont-miga">
	    <div class="miga">
		<div>
		    <a href="aberturas.php?categoriaId=10" class="arrow">Ventanas</a>
		    <a href="aberturas_productos.php?subcategoriaId=19" class="arrow">Aluminio</a>
		    <a>At-Premium</a>
		</div>
	    </div>
	</div>
	<div class="cont-aberturas">
                <div class="item-detalle table">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 floatInherit slider-detalle">
                        <div id="latestwork-sidebar" class="carousel slide">
                            <div class="carousel-inner">
															<div class="active item"><img src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/ProductoPropio/imagen1At-p%20vc%20%281%29.png" alt="photo"></div>
					                                											<div class="item"><img src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/ProductoPropio/imagen2At-p%20abrir%20%281%29.png" alt="photo"></div>
					                                											<div class="item"><img src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/ProductoPropio/imagen3At-p%20desplazable%20%281%29.png" alt="photo"></div>
					                                											<div class="item"><img src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/ProductoPropio/imagen4At-p%20pf%20%281%29.png" alt="photo"></div>
					                                											<div class="item"><img src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/ProductoPropio/imagen5At-p%20puerta%20%281%29.png" alt="photo"></div>
					                                					                                					                                					                                					                                					                                                            </div>
                            <a class="carousel-control left" href="#latestwork-sidebar" data-slide="prev"></a>
                            <a class="carousel-control right" href="#latestwork-sidebar" data-slide="next"></a>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('.carousel').carousel({
                                        interval: 5000
                                    })
                                });
                            </script>
                        <!-- CARRUSEL -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 floatInherit main-desc">
                        <h2>At-Premium</h2>
                        <p>Linea de Alta Prestaci&oacute;n que permite realizar aberturas de gran tama&ntilde;o y expuestas a grandes exigencias estructurales y clim&aacute;ticas.</br>
</br>
-Marco de 60 mm de ancho para todas las tipolog&iacute;as.</br>
-Caja de agua y encauzadores de desag&uuml;es</br>
-C&aacute;mara compensadora de presiones y doble contacto </br>
-Felpa de polipropileno siliconado de 7 x 6 mm </br>
-Armado de la hoja a 90 grados en formas curvas.</br>
-Admite vidrio simple y DVH.</br>
-Admite cortina tipo veneciana en la c&aacute;mara del DVH. </br>
- Premarco dise&ntilde;ado para optimizar la colocaci&oacute;n de la ventana.</br>
-El tratamiento puede ser en pintura a horno o anodizado en cualquiera de sus variables.</br>
</p>
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
								<div class="item-tipo">
					<a href="javascript:openFicha('t', 1)" class="img anima2">
					      <div class="overlay anima2">
						  <span class="glyphicon glyphicon-plus centeredY"></span>
					      </div>
					    <img src="http://www.aberturasezeiza.com.ar/images/img-aberturas-tipo-1.jpg" class="img-responsive centeredX" alt="">
					    <span id="t-tit-1">de abrir</span>
					    <span id="t-desc-1" class="anima2" style="display: none">El formato m&aacute;s usual es el de una o dos hojas, que se abren verticalmente, sobre un eje, hacia fuera o hacia dentro. Su mayor ventaja es su alto valor de aislamiento tanto ac&uacute;stico, como t&eacute;rmico.</span>
					</a>
				</div>
                                				<div class="item-tipo">
					<a href="javascript:openFicha('t', 2)" class="img anima2">
					      <div class="overlay anima2">
						  <span class="glyphicon glyphicon-plus centeredY"></span>
					      </div>
					    <img src="http://www.aberturasezeiza.com.ar/images/img-aberturas-tipo-2.jpg" class="img-responsive centeredX" alt="">
					    <span id="t-tit-2">corredizas</span>
					    <span id="t-desc-2" class="anima2" style="display: none">El formato m&aacute;s usual es el de dos hojas, que se deslizan horizontalmente sobre el marco, y permite una apertura, sin ocupar espacio adicional. Es posible incrementar el n&uacute;mero de hojas para mayores superficies.</span>
					</a>
				</div>
                                				<div class="item-tipo">
					<a href="javascript:openFicha('t', 3)" class="img anima2">
					      <div class="overlay anima2">
						  <span class="glyphicon glyphicon-plus centeredY"></span>
					      </div>
					    <img src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/TipoProductoPropio/imagenbanderola2%20%281%29.jpg" class="img-responsive centeredX" alt="">
					    <span id="t-tit-3">banderola</span>
					    <span id="t-desc-3" class="anima2" style="display: none">Hoja que se abre en posici&oacute;n inclinada, hacia el interior. Es ideal para espacios peque&ntilde;os que necesitan ventilaci&oacute;n. Este tipo de abertura permite el uso de mosquitero</span>
					</a>
				</div>
                                				<div class="item-tipo">
					<a href="javascript:openFicha('t', 4)" class="img anima2">
					      <div class="overlay anima2">
						  <span class="glyphicon glyphicon-plus centeredY"></span>
					      </div>
					    <img src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/TipoProductoPropio/imagenproyectante%20%282%29.png" class="img-responsive centeredX" alt="">
					    <span id="t-tit-4">proyectantes</span>
					    <span id="t-desc-4" class="anima2" style="display: none">Hoja que se desplaza en posici&oacute;n inclinada, hacia el exterior. Es ideal para no ocupar espacio en el ambiente interior. Este tipo de abertura no permite el uso de mosquitero</span>
					</a>
				</div>
                                				<div class="item-tipo">
					<a href="javascript:openFicha('t', 5)" class="img anima2">
					      <div class="overlay anima2">
						  <span class="glyphicon glyphicon-plus centeredY"></span>
					      </div>
					    <img src="http://www.aberturasezeiza.com.ar/images/img-aberturas-tipo-5.jpg" class="img-responsive centeredX" alt="">
					    <span id="t-tit-5">pa&ntilde;o fijo</span>
					    <span id="t-desc-5" class="anima2" style="display: none">Aberturas ideales para aprovechar las vistas en ambientes que no necesitan ventilaci&oacute;n. Ofrecen mejores niveles de conservaci&oacute;n de energ&iacute;a. </span>
					</a>
				</div>
                                				<div class="item-tipo">
					<a href="javascript:openFicha('t', 8)" class="img anima2">
					      <div class="overlay anima2">
						  <span class="glyphicon glyphicon-plus centeredY"></span>
					      </div>
					    <img src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/TipoProductoPropio/imagenoscilobatiente.jpg" class="img-responsive centeredX" alt="">
					    <span id="t-tit-8">Oscilobatiente</span>
					    <span id="t-desc-8" class="anima2" style="display: none">El formato m&aacute;s usual es de una o dos hojas, que combinan la apertura practicable y batiente, permitiendo una apertura vertical y una apertura inclinada. Su mayor ventaja es que combina dos tipos de apertura con el mejor valor de aislamiento.</span>
					</a>
				</div>
                                				<div class="item-tipo">
					<a href="javascript:openFicha('t', 7)" class="img anima2">
					      <div class="overlay anima2">
						  <span class="glyphicon glyphicon-plus centeredY"></span>
					      </div>
					    <img src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/TipoProductoPropio/imagenexterior-aluminio-puerta-365301-MLA20322955394_062015-O%20%281%29.jpg" class="img-responsive centeredX" alt="">
					    <span id="t-tit-7">Puerta</span>
					    <span id="t-desc-7" class="anima2" style="display: none">El formato es el de una o dos hojas, que se abren verticalmente, sobre un eje, hacia fuera o hacia dentro. Se puede optar por colocarlas con o sin umbral.</span>
					</a>
				</div>
                                                            </div>
                        </div>
                        <div id="lineas" class="tab-pane fade">
                            <div class="cont-item-lineas">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 slider">
                                    <div id="latestwork-sidebar-2">
                                        
                                            <div class="item">
						    						    
						   <img class="li1 li" style="width:100%;display: none" src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/LineaProductoPropio/imagenvidrio-float_04%20%281%29.jpg" alt="photo">

						   						    
						   <img class="li2 li" style="width:100%;display: none" src="http://www.aberturasezeiza.com.ar/app/adm/ezeiza/fileUpload/server/php/files/LineaProductoPropio/imagendvh%20para%20pag.png" alt="photo">

						                                               </div>
                                        
                                        <a class="carousel-control left" href="javascript:passLiL()" data-slide="prev"></a>
                                        <a class="carousel-control right" href="javascript:passLiR()" data-slide="next"></a>
                                       
                                    <!-- CARRUSEL -->
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
</section>
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
</script>
 
             
        </div> 
      </div>


    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="bootstrap/js/bootstrap.js"></script>
	</div>
  </body>
</html








modelos








@extends('pages.templates.body')
@section('title', 'Tolosa - Producto')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/productos.css') }}">
@endsection
@section('contenido')
<div class="container">
  
<div class="flex-containter">
    <div class="p_info">   
        <div style="margin: 7% 7%;">
          <div class="row">
            <div class="links col l12 s12 m12">
              <h7>
                <a href="{{ route('productos', $categoria->id)}}" style= "color: gray;text-transform: lowercase">{!!$categoria->nombre !!} • </a>
                <a href="" style="color: gray";>{!!$producto->nombre !!}</a>
                <a href="" style="color: gray";>{!!$modelo->nombre!!}</a>
              </h7>
            </div>
              <div class="col l12 s12 m12">
                <div class="producto">
                  <div class="row" style="">
                      <div class="col l6 s12 hide-on-med-and-down" style="width: 390px">
                          



              <div class="carousel ext1carousel" style="height: 320px; width: 320px;">
               
            @foreach($categorias as $categoria)  
                <div class="carousel-item">
                  <img src="{{asset('img/producto/ventana1.png')}}" style="position: relative; top: -61px;width: 420px; height: 320px;">
                  
                </div>
                
            @endforeach
          
              </div>
                      </div>
                      <div class="col l6 s12" >
                          <p style="font-size: 39px; font-weight: bold; color: #858585!important;">{!! $modelo->nombre !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $modelo->texto !!}</p>
                      </div>

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
  $(document).ready(function(){
    $('.carousel').carousel({
        dist: 5,
        numVisible: 0,
        padding: 10,
        duration: 100,
        indicators: true,
      });
  });
</script> 
@endsection