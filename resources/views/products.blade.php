<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <title>Audi - Laguna</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="/assets/images/logo-banner.png">
    <!-- Bootstrap Core CSS -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
|
    <!-- Plugins CSS -->
    <link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="libs/animate-css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="libs/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="libs/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="libs/jquery-magnificPopup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Component CSS -->
    <link href="assets/css/component/component.css" rel="stylesheet" type="text/css">
    <!--<link href="assets/css/component/colors/blue.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="/libs/alertifyjs/css/alertify.min.css">
    <!-- Main CSS -->
    <link href="assets/css/green.css" rel="stylesheet" type="text/css">
    <!--<link href="assets/css/colors/blue.css" rel="stylesheet" type="text/css">-->

    <!-- Modernizr JS for IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/modernizr.min.js"></script>
    <![endif]-->
     <!-- Script -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body >

    <!--[if lt IE 8]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Begin Page Loader -->
    <div id="page-loader">
        <div class="preload">
            <img src="assets/img/preloader.gif" alt="Loading"/>
        </div>
        <!-- //.preload -->
    </div>
    <!-- //End Page Loader -->
    <!-- Begin Navbar -->
    <nav id="navigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-rj-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#page-top"><img src="/assets/images/system/bg2.png" class="img-fluid img-responsive img-logo-banner" style="width:14rem;height:4.5rem;margin-top:1rem;margin-bottom:1rem;" alt=""></a>
            </div>
            <!-- //.navbar-header -->

            <div class="navbar-collapse collapse navbar-rj-collapse">
                <ul class="nav navbar-nav ">
                    <li class="page-scroll">
                        <a href="#who-we-are">{{__('ini.navbar.NB1')}}</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#our-services">{{__('ini.navbar.NB2')}}</a>
                    </li>

                    <li class="page-scroll">
                      <a href="#keep-in-touch">{{__('ini.navbar.NB3')}}</a>
                    </li>

                  
                    <li class="page-scroll">
                        <a href="#our-blog">{{__('ini.navbar.NB5')}}</a>
                    </li>

                    <li class="page-scroll">
                        <a href="/blog" onclick="window.location = '/blog'">{{__('ini.navbar.NB6')}}</a>
                    </li>

                    <li class="page-scroll">
                        <a  href data-toggle="modal" data-target="#modalAccess">{{__('ini.navbar.LOG')}}</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" style="padding-top: 1rem;"action="{{route('products.search')}}" method="GET" id="search-form">
                    @csrf
                    <input class="form-control mr-sm-2" type="search" placeholder="Descubre" aria-label="Search">
                    <a type="button" class="btn btn-outline-success my-2 my-sm-0 fa fa-search" type="submit"  onclick="document.getElementById('search-form').submit();"></a>
                  </form>
            </div>
            <!-- //.navbar-collapse -->
        </div>
        <!-- //.container -->
    </nav>
    <!-- //End Navbar -->


    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

        <div class="modal fade in" id="md-interes" tabindex="-1" role="dialog" aria-hidden="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="">
                      <label style="font-size:1.6rem;">Hazle saber al administrador que te interesa este producto</label>
                      <hr class="hr-login">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-">

                  </div>
                  <div class="col-md-10">
                    <div class="">
                      <form id="frm-send-message-int">
                        <div class="form-group">
                          <label>Correo Electrónico</label>
                          <input type="email" class="form-control" id="emailaddress" required>
                        </div>
                        <div class="form-group">
                          <label>Nombre</label>
                          <input type="text" class="form-control" id="nombres" required>
                        </div>
                        <div class="form-group">
                          <label>Mensaje</label>
                          <textarea class="form-control" id="mensaje" required></textarea>
                        </div>
                        <input type="hidden" name="id" id="id" value="0">
                        <div class="form-group text-right">
                          <button type="button" class="btn btn-warning" data-dismiss="modal" id="bntCancel">
                            <span class="fa fa-check"></span>
                            Cancelar
                          </button>
                          <button type="submit" class="btn btn-success" id="btnSendInt">
                            <span class="fa fa-arrow-right"></span>
                            Enviar
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('components.chat.icon-chat')
    <!-- Begin Footer -->
    <footer class="footer">
        <!-- Begin Footer Section -->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 footer-column not-right-column" style="margin-top:2.1rem;">
                        <div class="footer-text">
                            <h4>Contactanos</h4>

                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla rebds vel pellentesqu</p> -->
                            <p>Nos gustaría saber más de tí dejanos algún mensaje o contáctanos</p>
                            <ul class="icon-list list-unstyled">
                                <li>
                                    <i class="fa fa-phone"></i> +8712127851
                                </li>

                                <li>
                                    <i class="fa fa-envelope-o"></i> audi-laguna@audi.com.mx
                                </li>

                                <li>
                                    <i class="fa fa-map-marker"></i> 14374 Salemba Raya, Central Jakarta
                                </li>

                                <li>
                                    <i class="fa fa-clock-o"></i> HORARIOS: LUNES A VIERNES DE 9 AM A 6 PM Y SÁBADO DE 10 AM A 1 PM
                                </li>
                            </ul>

                            <ul class="social-icon-list list-unstyled list-inline">
                                <li>
                                    <a href="https://www.facebook.com/search/top/?q=green%2086%2C%20ecodise%C3%B1o"><i class="fa fa-facebook"></i></a>
                                </li>

                                <!-- <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li> -->

                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>

                                <li class="hidden-xs">
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- //.footer-text -->
                    </div>
                    <!-- //.footer-column -->

                    <!-- //.footer-column -->

                    <div class="col-sm-4 col-md-4 footer-column">
                        <div class="footer-text">
                            <h4>Dejanos algún mensaje</h4>

                            <p></p>

                            <form role="form" class="newsletter-form" id="frm-send-message">
                                <div class="form-group">
                                    <label for="email_address">Correo*</label>
                                    <input type="email" id="email_address" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="first_name">Nombre</label>
                                    <input type="text" id="first_name" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="message">Mensaje</label>
                                    <textarea type="text" id="message" style="background-color:transparent;" class="form-control" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-rj" id="btnSend">Enviar</button>
                            </form>
                        </div>
                        <!-- //.footer-text -->
                    </div>
                    <!-- //.footer-column -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.container -->
        </section>
        <!-- //End Footer Section -->

        <!-- Begin Copyright -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" style="">

                    </div>
                    <div class="col-md-4" style="">
                        <p>UTT | Project - JLMR-JLMM-KABD-IEPV &copy; {{Date('Y')}} <a href="#">Audi Laguna.</a></p>
                    </div>
                    <div class="col-md-4" style="">

                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.container -->
        </div>
        <!-- //End Copyright -->
    </footer>


    <div class="modal fade in" id="modalAccess" tabindex="-1" role="dialog" aria-hidden="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-xs-12">
                <div class="">
                  <label>Administración del sistema</label>
                  <hr class="hr-login">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 hidden-sm hidden-xs">
                <img src="/assets/images/system/bg2.png" class="img-responsive">
              </div>
              <div class="col-md-8">
                <div class="">
                  <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo">
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="pass">
                  </div>
                  <div class="form-group text-right">
                    <button type="button" class="btn btn-warning" style="background-color:#d53b19; border-color:#fff" data-dismiss="modal" id="btnRegister">
                      <span class="fa fa-arrow-left"></span>
                      Regresar
                    </button>
                    <button type="button" class="btn btn-success" style="background-color:#000; border-color:#fff" id="btnLogin">
                      <span class="fa fa-check"></span>
                      Entrar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- //End Footer -->

    @include('components.chat.chatModal')
    <!-- Plugins JS -->
    <script src="libs/jquery.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/detectmobilebrowser/detectmobilebrowser.js"></script>
    <script src="libs/smartresize/smartresize.js"></script>
    <script src="libs/jquery-easing/jquery.easing.min.js"></script>
    <script src="libs/jquery-sticky/jquery.sticky.js"></script>
    <script src="libs/jquery-inview/jquery.inview.min.js"></script>
    <script src="libs/jquery-countTo/jquery.countTo.js"></script>
    <script src="libs/jquery-easypiechart/jquery.easypiechart.min.js"></script>
    <script src="libs/jquery-countdown/jquery.plugin.min.js"></script>
    <script src="libs/jquery-countdown/jquery.countdown.min.js"></script>
    <script src="libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="libs/isotope/isotope.pkgd.min.js"></script>
    <script src="libs/jquery-magnificPopup/jquery.magnific-popup.min.js"></script>
    <script src="libs/jquery-validation/jquery.validate.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Animation JS (Optional) -->
    <script src="assets/js/animation.js"></script>

    <!-- Component JS -->
    <script src="assets/js/component/bar-chart.js"></script>
    <script src="assets/js/component/countdown.js"></script>
    <script src="assets/js/component/counters.js"></script>
    <script src="assets/js/component/pie-chart.js"></script>
    <script src="assets/js/component/portfolio.js"></script>
    <script src="assets/js/component/animation.js"></script>

    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsRnDaJy4oSSaOLBiScwDJSyoDM7GniE8"></script>
    <script src="assets/js/component/map.js"></script>
    <script src="libs/alertifyjs/alertify.js" charset="utf-8"></script>
    <script src="/scripts/login.js" type="text/javascript"></script>
    <script src="/scripts/buzon.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(function(){
        setTimeout(function(){
          $(".list-unstyled li.active").next().children("a").trigger("click");
          //  var filtros = $(".list-unstyled li.active>a").data("filter");
          //  $(".portfolio-item").hide();
          //  $(filtros).show();
          //console.clear();
        },700)
        $(".btn-interesa").click(function(){
          $("#id").val($(this).data("id"));
          //setTimeout(function(){$(".mfp-close").trigger("click");},1000)
        })
      });
    </script>
</body>
</html>







