<?php

include("printVariedades.php");

session_start();
if (isset($_SESSION['usuario'])) {
    $links = "<a class='p-1 links' href='addVariedad.php'>Agregar variedades</a>";
    $links .= "<a class='p-1 links' href='delVariedad.php'>Eliminar variedades</a>";
    $links .= "<a class='p-1 links' href='cerrarSesion.php'>Cerrar Sesion</a>";

} else {
    $links = '<a class="p-1 links" href="log.php">Log?</a>';
}


?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home - Lúpulo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <!-- Navigation 
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="pagination justify-content-center">
                  <li class="page-item"><a class="page-link border-0 active" href="#home">Home</a></li>
                  <li class="page-item"><a class="page-link border-0 " href="#historia">Historia</a></li>
                  <li class="page-item"><a class="page-link border-0 " href="#preparacion">Preparación</a></li>
                  <li class="page-item"><a class="page-link border-0 " href="#tipos">Tipos</a></li>
                  <li class="page-item"><a class="page-link border-0 " href="#variedades">Variedades</a></li>
                </ul>
            </div>
          </div>
        </nav>
        -->
        <div id="home" class="align-items-center" >
            <?php echo $links; ?>
            <nav class="mainnav sticky-top align-items-center container" aria-label="Site navigation">
                <ul class="pagination justify-content-center mb-0 nav">
                  <li class="page-item"><a class="page-link border-0 active" href="#home">Home</a></li>
                  <li class="page-item"><a class="page-link border-0 " href="#historia">Historia</a></li>
                  <li class="page-item"><a class="page-link border-0 " href="#preparacion">Preparación</a></li>
                  <li class="page-item"><a class="page-link border-0 " href="#tipos">Tipos</a></li>
                  <li class="page-item"><a class="page-link border-0 " href="#variedades">Variedades</a></li>
                </ul>
            </nav>
            

            <header class="mainhead text-center align-items-center" >
              <div class="mainhead-content">
                  <div class="p-1 titulos">  
                    <h1 class="mainhead-heading">Lúpulo</h1>
                    <h2 class="mainhead-subheading">Un sitio de la Cerveza</h2>
                  </div>
                  <div class="imagenlupulo">
                      <img class="img-fluid" id="imagenlupulo" class="imagenlupulo" src="img/lupulo2.png" alt="lupulo">
                  </div>

              </div>
            </header>
        </div>

        <div id="historia" class="nohome">
            <nav class="historia subnav sticky-top " aria-label="Site navigation">
                      <ul class="pagination justify-content-center mb-0 nav">
                        <li class=""><a class="page-link border-0 " href="#home">Home</a></li>
                        <li class=""><a class="page-link border-0 active " href="#historia">Historia</a></li>
                        <li class=""><a class="page-link border-0 " href="#preparacion">Preparación</a></li>
                        <li class=""><a class="page-link border-0 " href="#tipos">Tipos</a></li>
                        <li class=""><a class="page-link border-0 " href="#variedades">Variedades</a></li>
                      </ul>
            </nav>
            <section class="historia" >
              <div class="container" >
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-2">
                    <div class="p-4">
                      <img class="img-fluid rounded" src="img/historica(1).jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                      <h2 class="h2">Primeras apariciones</h2>
                      <p>Según los documentos históricos, es preciso asegurar que el primer intento de crear una bebida similar a la cerveza se remonta a alrededor de 6000 años, cuando las antiguas civilizaciones chinas comenzaron a elaborar una sustancia denominada kyui, de características similares a la cerveza.
                      Pero lo cierto es que la primera cultura civilizada que se dedicó a la fabricación de cerveza fue la de los samaritanos asentados en la Mesopotamia. Ellos la llamaban la “bebida divina”, por lo que comúnmente la utilizaban durante rituales y como ofrendas para los dioses.
                      <p>Posteriormente, la cultura de los babilonios, derivada de los samaritanos, como consecuencia de su herencia comenzaron a fabricar cerveza, e incluso se perfeccionaron de tal manera en ello que lograron desarrollar más de 20 tipos diferentes de dicha bebida.</p>
                      <p>Existen también diversas representaciones en arcilla de la antigua Babilonia que demuestra la presencia de la cerveza hace más de 4000 años, en las que aparecen hombres y mujeres respetados por la sociedad bebiendo esta refrescante bebida. Incluso se ha llegado a saber que en la época existían ciertos tipos de cervezas que eran exclusivamente reservadas para las ceremonias religiosas que tenían lugar en los templos.
                      En el año 2100 AC, el sexto rey de babilonia, llamado Hammurabi, decretó las primeras leyes escritas, entre las que se incluía la norma legal que establecía que los individuos de buena posición social debían ser recompensados con una ración diaria de cerveza. A partir de aquello, la cerveza comenzó a ser un producto comercial.</p>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-1">
                    <div class="p-4">
                      <img class="img-fluid rounded" src="img/historica(2).jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                      <h2 class="h2"></h2>
                      <p>Por otra parte, existen documentos que aseguran que en Israel ya se producía cerveza hace más de 3000 años, en la época de los reyes Saúl y David. Según uno de estos documentos históricos, la cerveza fue una de las bebidas transportadas a bordo del Arca de Noé.</p>

                      <p>Mientras tanto, los egipcios solían reunirse en las llamadas “casas de la cerveza” durante la noche, y allí tanto la realeza como los campesinos disfrutaban de la bebida, que al mismo tiempo era utilizada como medicamento. Asimismo, la cerveza también era ofrecida como un obsequio para los dioses, incluso la diosa de la naturaleza, llamada Isis, era la patrona de fabricación de la cerveza.</p>

                      <p>Según se cree, fueron los egipcios quienes les enseñaron a elaborar cerveza a los griegos. Para ellos también era sumamente importante esta bebida, y la enseñanza que recibieron de los egipcios se la transmitieron a los romanos, quienes a su vez le enseñaron a elaborar cerveza a las tribus salvajes en Gran Bretaña.</p>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-2">
                    <div class="p-4">
                      <img class="img-fluid rounded" src="img/historica(3).jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                      <h2 class="h2"></h2>
                      <p>Pero lo cierto es que cuando el vino se convirtió en la bebida preferida de los romanos, la cerveza comenzó a fabricarse y distribuirse sólo en la periferia más lejana del imperio, por lo que pasó a ser conocida como la bebida de los salvajes.

                      Tiempo después la cerveza recuperó su estatus en la sociedad gracias a que comenzó a ser fabricada y mejorada por los monjes de los monasterios cristianos. En este sentido, cabe destacar que existen tres santos cristianos que se consideran los patrones de elaboración de cerveza: San Agustín de Hipona, San Lucas Evangelista y San Nicolás de Myra.</p>

                      <p>Ya durante la época medieval la cerveza comenzó a ser elaborada por las mujeres, y se la solía considerar una bebida-comida.

                      Pero más allá de los lejanos tiempos de su creación, lo cierto es que la cerveza se convirtió en lo que es en la actualidad gracias a la revolución industrial y la evolución en la historia de la humanidad. Es que después de las notables mejoras incorporadas por la máquina de vapor en 1765, la industrialización de la cerveza se convirtió en una realidad.

                      Debido a la gran historia que existe detrás de esta bebida, suele ser la impronta de muchos países, como Bélgica, Alemania, Austria, Irlanda y el Reino Unido, entre otros.</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        
        </div>

        <div id="preparacion" class="nohome">
           <nav class="preparacion subnav sticky-top" aria-label="Site navigation">
                      <ul class="pagination justify-content-center mb-0 nav">
                        <li class=""><a class="page-link border-0 " href="#home">Home</a></li>
                        <li class=""><a class="page-link border-0 " href="#historia">Historia</a></li>
                        <li class=""><a class="page-link border-0 active" href="#preparacion">Preparación</a></li>
                        <li class=""><a class="page-link border-0 " href="#tipos">Tipos</a></li>
                        <li class=""><a class="page-link border-0 " href="#variedades">Variedades</a></li>
                      </ul>
            </nav>
            <section class="preparacion">
              <div class="container" >
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-2">
                    <div class="p-4 text-center">
                        <a href="img/preparacion1b.jpg" class="preparacionimg">
                            <img class="img-fluid rounded-circle preparacion" src="img/preparacion1.jpg" alt="">
                        </a>
                    </div>
                  </div>
                  <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                      <h2 class="h2">Germinación de la malta</h2>
                      <p>El grano de cebada, seleccionado, limpiado y humedecido, se extiende en una gran sala llamada cámara de germinación, la cual esta acondicionada a 18-20ºC. Enseguida con ayuda del Galland, (aparato formado por dos cilindros, uno metálico exterior y otro interior giratorio de tela metálica) en donde caen las semillas desde una tolva; por un eje interior sale una corriente de aire húmedo. El proceso dura de ocho a nueve días y se interrumpe con una corriente de aire a 25ºC que deseca los granos (malta verde. Enseguida se tuestan en hornos especiales entre 100 y 200ºC y se muelen hasta reducirlos a harina.</p>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-1">
                    <div class="p-4 text-center">
                        <a href="img/preparacion2b.jpg" class="preparacionimg">
                            <img class="img-fluid rounded-circle preparacion" src="img/preparacion2.jpg" alt="">
                        </a>    
                    </div>
                  </div>
                  <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                      <h2 class="h2">Maceración</h2>
                      <p>Transformación del almidón en azúcar fermentable, que se realiza entre 60 y 70ºC mediante la diastasa y dura unas 3 horas. El agua caliente se añade a las cubas que tienen agitadores en las que está la harina de malta. Hirviendo el líquido se detiene la acción enzimática, y las proteínas indeseables coagulan y precipitan. Se filtra en una cuba decantadora (lauter), provista de doble fondo agujereado, o bien en filtros prensa. El filtrado, llamado mosto, se hierve en grandes depósitos, en donde se adiciona la cantidad precisa de lúpulo. Se filtra, se enfría y airea.</p>                      
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-2">
                    <div class="p-4 text-center">
                        <a href="img/preparacion3b.jpg" class="preparacionimg">
                            <img class="img-fluid rounded-circle preparacion" src="img/preparacion3.jpg" alt="">
                        </a>
                    </div>
                  </div>
                  <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                      <h2 class="h2">Fermentación</h2>
                      <p>Se introducen levaduras que se clasifican en:</p>
                      <p>1) altas: formadas por cultivos de Saccharomyces cerevisiae, que suben a la parte posterior del tanque de fermentación (cervezas "ale"). El proceso empieza alrededor de los 9ºC; la temperatura asciende unos pocos grados en la fermentación tumultuosa, y finalmente desciende alrededor de 5ºC en el enfriamiento. Al cabo de unos días comienza la fermentación lenta, que dura de quince a veinte días, según la fábrica y el tipo de cerveza.</p>

                      <p>2) bajas: formadas por cultivos de S. Carlsbergensis, que se depositan en la parte inferior, con temperaturas entre 15 y 20ºC (cervezas "Lager"). </p>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-1">
                    <div class="p-4 text-center">
                        <a href="img/preparacion4b.jpg" class="preparacionimg">
                            <img class="img-fluid rounded-circle preparacion" src="img/preparacion4.jpg" alt="">
                        </a>
                    </div>
                  </div>
                  <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                      <h2 class="h2">Maduración</h2>
                      <p>Este proceso consiste en dejar reposar el líquido en tanques especiales durante algunos meses. Se adicionan agentes antioxidantes, ácido sulfuroso o ácido ascórbico, para evitar el cambio de gusto. A veces se filtra con ayuda de agentes clarificantes</p>
                      <h2 class="h2">Envasado</h2>
                      <p>El contenido de anhídrido carbónico se regula en el tanque embotellador. El envasado de la cerveza se realiza en botellas, botes, cubas o barriles, generalmente se pasteuriza. La cantidad de alcohol oscila del 2 al 6%. Gracias al envasado la cerveza llega a su hogar con las mayores garantias de conservación, sabor y cuerpo.</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </div>

        <div id="tipos" class="nohome">
           <nav class="tipos subnav sticky-top" aria-label="Site navigation">
                      <ul class="pagination justify-content-center mb-0 nav">
                        <li class=""><a class="page-link border-0 " href="#home">Home</a></li>
                        <li class=""><a class="page-link border-0 " href="#historia">Historia</a></li>
                        <li class=""><a class="page-link border-0 " href="#preparacion">Preparación</a></li>
                        <li class=""><a class="page-link border-0 active" href="#tipos">Tipos</a></li>
                        <li class=""><a class="page-link border-0 " href="#variedades">Variedades</a></li>
                      </ul>
            </nav>
            <section class="tipos">
              <div class="container" >
                <div class="row">
                  <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                      <h2 class="display-4 text-center">Ale</h2>
                      <p>Ale es un nombre que abarca a todas las cervezas de fermentación alta, lo que las diferencia de las lager que son de fermentación baja. Esto quiere decir que en las ales, el proceso de fermentación ocurre en la superficie del líquido, mientras que en las cervezas lager esta ocurre cerca del fondo. En otras palabras, la levadura que cumple el proceso de fermentación flota en la superficie del líquido durante varios días antes de descender al fondo. Para esto se usa principalmente levadura del tipo Saccharomyces cerevisiae.1​ Las ales fermentan rápidamente a temperaturas entre 15 y 25 °C y se sirven, por lo general, a una temperatura de 12 °C o más.</p>
                      <p>Existe una amplia diversidad de estilos, los cuales se clasifican según su procedencia. Las ales angloamericanas cuentan entre sus filas con los estilos amber ale, red ale, stout, porter, pale ale, barley wine, bitter, brown ale, India pale ale (IPA), old ale y extra strong bitter (ESB) entre otros.</p>
                      <p>En Escocia se desarrolló en el siglo XIX un estilo propio de ale, la Scotch Ale, que se caracteriza por tener mayor cuerpo y dulzura, y menos sabor y olor a lúpulo que otras ales británicas. Este estilo se ha hecho popular también en Norteamérica.</p>
                      <p>En Bélgica se desarrollaron muchos estilos, entre los que sobresalen las Belgian Ale, Belgian Strong Ale, Witbier, Oud Bruin, Bière de Garde, Saison y algunos estilos famosos por haber sido originalmente elaborados en abadías como Dubbel, Tripel y Quadrupel. De entre estas últimas se encuentra la cerveza trapista.</p>
                      <p>En Alemania predominan las lagers pero aun así existen varios tipos de ales como Altbier, Hefe Weizen, Berliner Weissbier y Kölsch.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                      <h2 class="display-4 text-center">Lager</h2>
                      <p>Lager es un tipo de cerveza con sabor acentuado que se sirve fría, caracterizada por fermentar en condiciones más lentas empleando levaduras especiales, conocidas como levaduras de fermentación baja, y que en las últimas partes del proceso son almacenadas en bodegas (o lagered —de allí su nombre—) durante un período en condiciones de baja temperatura con el objeto de limpiar las partículas residuales y estabilizar los sabores. Los ejemplos más populares de cerveza de tipo lager son los pale lagers o pilsners, conocidas también como largers.</p>
                      <p>En el siglo XIX los cerveceros bávaros empleaban los sótanos, las cuevas y las bodegas para «almacenar» (lagern) su cerveza, lo hacían así para que en estos lugares frescos y de temperatura muy estable se fuera madurando la cerveza poco a poco. A la cerveza así obtenida, la denominaron Lagerbier, del alemán lagern («almacenar»). Esta voz puede a su vez derivar de la palabra latina "lacus" (lago), tal y como lo hace la palabra española lagar, referente al utensilio empleado para almacenar y pisar la uva y producir el mosto del vino o el aceite de oliva. Los cerveceros bávaros utilizaron una levadura originaria de la Patagonia, Saccharomyces eubayanus, que es capaz de madurar la cerveza en ambientes fríos.3​ La diferencia más evidente con respecto a la cerveza inglesa (ale) es la temperatura de fermentación y la posición donde fermenta la cerveza que emplean levaduras de fermentación baja.</p>
                      <p>En el periodo 1820-1830, un cervecero denominado Gabriel Sedlmayr II el joven, cuya familia regentaba desde hace tiempo la cervecería Spaten Brauerei en Baviera hizo una gira por Europa para mejorar sus conocimientos sobre la elaboración de la cerveza. Al volver a su tierra empezó a utilizar las enseñanzas aprendidas y elaboró una cerveza lager más estable y consistente. A pesar de ello la cerveza lager de Baviera es diferente debido a la dureza de las aguas empleadas en el proceso de elaboración.</p>
                      <p>La nueva receta empleada por los cerveceros de Baviera se fue expandiendo por toda Europa, en particular el amigo de Sedlmayr Anton Dreher adoptó las nuevas técnicas de lager para mejorar las cervezas Vienesas entre el periodo comprendido entre 1840-1841. El agua de Viena permitía el uso de maltas más ligeras dando lugar a una coloración final de la cerveza ámbar-rojo.</p>
                      <p>En su diseminación, la nueva receta llegó a Bohemia, donde la receta fue mejorada. En el año 1842, en la ciudad de Pilsen, un cervecero de 29 años llamado Josef Groll intentó hacer una versión de la receta de lager empleando una malta diferente además de emplear un agua local, el resultado fue una cerveza más suave de sabor que la variedad de Múnich o incluso que la de Viena: la cerveza resultante era mucho más dorada y de brillantes tonos. A este nuevo tipo de cerveza se le denomió como Pilsener o Pilsner y tuvo un gran éxito, divulgándose rápidamente a lo largo de todos los países de Europa.</p>
                    </div>
                  </div>              
                </div>
              </div>
            </section>
             <!--<section class="tipos">
              <div class="container" >
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-1">
                    <div class="p-4 text-center">
                        <a href="img/tipos2b.jpg" class="tiposimg">
                            <img class="img-fluid rounded-circle tipos" src="img/tipos1.jpg" alt="">
                        </a>    
                    </div>
                  </div>
                  <div class="col-lg-6 order-lg-2">
                    <div class="p-4 text-center">
                        <a href="img/tipos1b.jpg" class="tiposimg">
                            <img class="img-fluid rounded-circle tipos" src="img/tipos2.jpg" alt="">
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </section>-->
        </div>
        <div id="variedades" class="variedades nohome" >
           <nav class="variedades subnav sticky-top" aria-label="Site navigation">
                      <ul class="pagination justify-content-center mb-0 nav">
                        <li class=""><a class="page-link border-0 " href="#home">Home</a></li>
                        <li class=""><a class="page-link border-0 " href="#historia">Historia</a></li>
                        <li class=""><a class="page-link border-0 " href="#preparacion">Preparación</a></li>
                        <li class=""><a class="page-link border-0 " href="#tipos">Tipos</a></li>
                        <li class=""><a class="page-link border-0 active" href="#variedades">Variedades</a></li>
                      </ul>
            </nav>
            <div class="container variedades pt-4">
                 <div class="row align-items-center">
                  <?php 
                    echo $bloque;
                   ?>
                </div>
            </div>                        
            <section class="variedades container">
                <div class="pt-4 pb-1 text-center">
                        <h6>(Mantener click para hacer zoom)</h6>
                </div>

                <div class="p-1 text-center variedadesimg">
                        <img class="img-fluid rounded variedades" src="img/variedades.jpg" alt="">
                </div>

            </section>
        </div>
    <!-- Footer -->
    <footer class="py-1">
        <p class="text-center text-white small">Copyright &copy; Your Website 2018</p>
      <!-- /.container -->
    </footer>
        
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>

        <script>
        $(document).ready(function(){
                
                $('a.preparacionimg').fancybox({
                    afterLoad : function(instance, current) {
                        var pixelRatio = window.devicePixelRatio || 1;

                        if ( pixelRatio > 1.5 ) {
                            current.width  = current.width  / pixelRatio;
                            current.height = current.height / pixelRatio;
                        }
                    }
                });


                $('img.variedades').wrap('<span style="display:inline-block"></span>')
                .css('display', 'block')
                .parent()
                .zoom({
                    on: 'grab',
                    duration:200,
                    touch: true
                });


                $('nav ul li a').attr("data-scroll");

        });


        var scroll = new SmoothScroll("a[href*='#']",{

        });         
        </script>




        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
