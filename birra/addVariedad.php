<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Agregar variedad</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="css/customlog.css">
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
  
    <div id="home">
            <div class="mainhead container" >
              <div class="mainhead-content">
                <div class="row">
                  <div class="col-lg-6 order-lg-2 p-4 text-center">
                      <figure >
                          <img id="imagenlupulo" src="img/lupulo2.png" alt="lupulo">
                      </figure>  
                      <h2 class="mainhead-heading mb-0">Lúpulo</h2>
                      <h4 class="mainhead-subheading mb-0">Un sitio de la Cerveza</h4>
                  </div>
                  <div class="col-lg-6 order-lg-1 p-4">
                      <form class="container" method="POST" action="addVariedadw.php" id="formulario">
                        <div class="form-group">
                          <label for="variedad">Variedad</label>
                          <input type="text" name="variedad" class="form-control" id="variedad" required="true">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Descripción</label>
                          <textarea name="descripcion" class="form-control" id="descripcion" rows="10" required> 
                          </textarea>
                        </div>
                        <div class="form-group">
                          <label for="imagen">Nombre de la imagen</label>
                          <input type="text" name="imagen" class="form-control" id="imagen" >
                        </div>                                                               
                        <div class="pt-4">
                          <button type="button" id="btn_agregar" class="btn btn-custom">Agregar!</button>
                        </div>
                      </form>
                  </div>
                  <div class="col-lg-6 order-lg-2 p-4" id="resultado">
                    
                  </div>
                </div>
              </div>
            </div>
        
    </div>
    <!-- Footer -->
    <footer class="container-fluid">
      <div class="container p-0">
        <p class="m-0 text-center text-white small py-2">Copyright &copy; Your Website 2018</p>
        
      </div>
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

                $('#btn_agregar').click(function(){

                  $.ajax({
                    method: "POST",
                    url: "addVariedadw.php",
                    data: $('#formulario').serialize()

                  })
                    .done(function( msg ) {
                      $('#resultado').html(msg);
                    });

                  $("#formulario")[0].reset();
                });



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
