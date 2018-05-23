@extends('pages.templates.body')
@section('title', 'Tolosa - Producto')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/bootstrap.css') }}" media="all" /> <!-- llamado al CSS de BOOTSTRAP -->
<link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/russo-styles.css') }}" media="all" />
<link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/reset.css') }}" media="all" />
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/productos.css') }}">
@endsection
@section('contenido')
         
      
      <div id="cuerpo">
        <div>
        <link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/slider-home.css') }}" media="all" /><!-- css del slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/jssor.js') }}" media="all" /> <!-- js para que ande el slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('app/scripts/jssor.slider.js') }}" media="all" /><!-- js para que ande el slider -->

    <!-- Jssor Slider Finish --> 

<section class="aberturas">
   <!--  <div class="container">-->
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
                                                            <div class="active item"><img src="{{asset('img/producto/ventana1.png')}}"></div>
                                                                                                <div class="item"><img src="{{asset('img/producto/6_otras6.png')}}" alt="photo"></div>
                                                                                                <div class="item"><img src="{{asset('img/producto/6_otras6.png')}}" alt="photo"></div>
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
                        <li id="liVentajas"><a data-toggle="tab" href="#ventajas">ventajas</a></li>
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
                                                
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 desc-lineas li1 li" style="display: none">
                                    <h5>Vidrio simple</h5>
                                    <p><b>Float incoloro o Vidrio transparente</b>
<br>
El vidrio float incoloro es un vidrio transparente de caras planas y paralelas, que asegura una visi&oacute;n n&iacute;tida y exacta totalmente libre de distorsi&oacute;n.<br>
Cuando el vidrio float se rompe, lo hace en pedazos grandes, en forma de cu&ntilde;a filosa y cortante; por ese motivo debe tenerse especial atenci&oacute;n con la selecci&oacute;n del espesor adecuado que garantice, que no se rompa frente a la presi&oacute;n del viento, as&iacute; como a no utilizarlo en zonas de riesgo para las personas. 
<br>
<br>
<br>
<b>Float color o Vidrio tonalizado
</b>
<br>
Los vidrios float color son fabricados del mismo modo que los float incoloros, a los que se les agregan algunos &oacute;xidos met&aacute;licos durante su fabricaci&oacute;n; produciendo un coloreado determinado en la masa del vidrio sin afectar la distorsi&oacute;n visual.<br>
Esto reduce el ingreso de calor solar radiante y disminuye las molestias causadas por una excesiva luminosidad.
<br>
<br>
<br>
<b>Vidrio translucido</b>
<br>
Este vidrio posee una textura que permite el paso de la luz pero a la vez impide la visi&oacute;n clara dando principalmente privacidad en el ambiente donde se lo utilice. La transmisi&oacute;n de luz es de aproximadamente un 80%,
<br>
<br>
<br>
<b>Vidrio laminado Blindex de seguridad</b>
<br>
Los vidrios laminados son vidrios formados por dos o m&aacute;s hojas de float incoloro o color unidas entre s&iacute; por una l&aacute;mina adhesiva que junta ambos pa&ntilde;os. La l&aacute;mina se denomina Polivinil de Butiral (PVB) y las mismas son aplicadas a presi&oacute;n y calor.
Esta composici&oacute;n combina las propiedades del vidrio; transparencia y dureza con las propiedades del PVB: Adherencia al vidrio, Elasticidad, Resistencia al impacto.
Ante un impacto sobre el vidrio laminado, la pel&iacute;cula de PVB absorbe la energ&iacute;a del choque al mismo tiempo que mantiene su adherencia al vidrio; los trozos no se desprenden y el conjunto se mantiene en el marco. </br>
El vidrio laminado no reduce la trasmisi&oacute;n lum&iacute;nica pero si se quiere lograr este efecto, el mismo puede ser tonalizado.</p>
                                </div>

                                
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 desc-lineas li2 li" style="display: none">
                                    <h5>Vidro DVH</h5>
                                    <p>Un Doble Vidrio Herm&eacute;tico o como se denomina con la sigla DVH, es un producto compuesto por dos o m&aacute;s vidrios, separados entre s&iacute; por una c&aacute;mara de aire; la misma se encuentra herm&eacute;ticamente sellada a lo largo de todo su per&iacute;metro.</br></br>
<b>Beneficios</b></br>
&bull;Aumenta en m&aacute;s del 100% el aislamiento t&eacute;rmico del vidriado.</br>
&bull;Mejora el aislamiento ac&uacute;stico.</br>
&bull;Disminuye hasta un 70% las p&eacute;rdidas de calor a trav&eacute;s del vidrio, ahorrando energ&iacute;a de climatizaci&oacute;n.</br>
&bull;Reduce la condensaci&oacute;n de humedad sobre el vidrio.</br>
&bull;Fabricado con Float de color &oacute; reflectivo, brinda control solar y disminuye el resplandor de la excesiva luminosidad.</br>

</p>
                                </div>

                                            </div>
                        </div>
                                                <div id="ventajas" class="tab-pane fade">
                            <div class="cont-item-ventajas">
                                                <a href="javascript:openFicha('v', 2)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img src="http://www.aberturasezeiza.com.ar/images/ico-aberturas-ventajas-2.jpg" class="img-responsive centeredX" alt="Image">
                                    <div class="clear"></div>
                                    <span id="v-tit-2" class="anima2">Aislamiento t&eacute;rmico</span>
                                    <span id="v-desc-2" class="anima2" style="display: none">Reduce no s&oacute;lo el consumo de energ&iacute;a, sino tambi&eacute;n el dimensionamiento de los equipos de refrigeraci&oacute;n necesarios para brindar un confort adecuado.</span>
                                </a>
                                                                <a href="javascript:openFicha('v', 3)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img src="http://www.aberturasezeiza.com.ar/images/ico-aberturas-ventajas-3.jpg" class="img-responsive centeredX" alt="Image">
                                    <div class="clear"></div>
                                    <span id="v-tit-3" class="anima2">Inversi&oacute;n en calidad</span>
                                    <span id="v-desc-3" class="anima2" style="display: none">Utilizando maquinarias de ultima generaci&oacute;n, perfiles 100 % virgen, accesorios y herrajes de primera linea.</span>
                                </a>
                                                                <a href="javascript:openFicha('v', 4)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img src="http://www.aberturasezeiza.com.ar/images/ico-aberturas-ventajas-4.jpg" class="img-responsive centeredX" alt="Image">
                                    <div class="clear"></div>
                                    <span id="v-tit-4" class="anima2">Aislamiento ac&uacute;stico</span>
                                    <span id="v-desc-4" class="anima2" style="display: none">El control de ruidos urbanos es vital para el confort ac&uacute;stico.</br>
Optar por DVH, utilizando vidrios laminados con PVB de mayor espesor, se reduce notoriamente la transmisi&oacute;n del sonido a trav&eacute;s de las superficies vidriadas, aumentando la aislaci&oacute;n con respecto a vidriados simples o Doble Vidriado con vidrio com&uacute;n.</br>

</span>
                                </a>
                                                               
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
</script>
@endsection