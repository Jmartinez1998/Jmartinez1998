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
      <!-- Plugins CSS -->
      <link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="libs/animate-css/animate.min.css" rel="stylesheet" type="text/css">
      <link href="libs/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
      <link href="libs/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
      <link href="libs/jquery-magnificPopup/magnific-popup.css" rel="stylesheet" type="text/css">
      <!-- Component CSS -->
      <link href="assets/css/component/component.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="/libs/alertifyjs/css/alertify.min.css">
      <!-- Main CSS -->
      <link href="assets/css/green.css" rel="stylesheet" type="text/css">
      <!-- Script -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <style>
    .float-right-messenger{
        display:block;
        width:60px;
        height:60px;
        background-color:#b8c829;
        position: fixed;
        left:90%;
        bottom:15%;
        border-radius:50%;
        line-height:80px;
        text-align:center;
        z-index:999;
    }
  </style>
  <!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="51">
    <!-- Begin Page Loader -->
    <div id="page-loader">
      <div class="preload">
        <img src="assets/img/preloader.gif" alt="Loading"/>
      </div>
      <!-- //.preload -->
    </div>
    <!-- //End Page Loader -->
    <!-- Begin Intro Section -->
    <section id="intro" style="margin-top:-1.8rem;">
      <div class="intro-body text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12 intro-content">
              <!-- //.page-scroll -->
            </div>
            <!-- //.intro-content -->
          </div>
          <!-- //.row -->
        </div>
        <!-- //.container -->
      </div>
      <!-- //.intro-body -->
    </section>
    <!-- //End Intro Section -->

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

                <a class="navbar-brand" href="#page-top"><img src="/assets/images/logo-banner.png"
                        class="img-fluid img-responsive img-logo-banner"
                        style="width:14rem;height:4.5rem;margin-top:1rem;margin-bottom:1rem;" alt=""></a>
            </div>
            <!-- //.navbar-header -->

            <div class="navbar-collapse collapse navbar-rj-collapse">
                <ul class="nav navbar-nav navbar-right">
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
                        <a href="#our-latest-work">{{__('ini.navbar.NB4')}}</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#our-blog">{{__('ini.navbar.NB5')}}</a>
                    </li>

                    <li class="page-scroll">
                        <a href="/blog" onclick="window.location = '/blog'">{{__('ini.navbar.NB6')}}</a>
                    </li>

                    <li class="page-scroll">
                        <a href data-toggle="modal" data-target="#modalAccess">{{__('ini.navbar.LOG')}}</a>
                    </li>
                </ul>
            </div>
            <!-- //.navbar-collapse -->
        </div>
        <!-- //.navbar-header -->
        <div class="navbar-collapse collapse navbar-rj-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="page-scroll">
              <a href="#who-we-are">Acerca de nosotros</a>
            </li>
            <li class="page-scroll">
              <a href="#our-services">Servicios</a>
            </li>
            <li class="page-scroll">
              <a href="#keep-in-touch">Redes sociales</a>
            </li>
            <li class="page-scroll">
              <a href="#our-latest-work">Nuestros Productos</a>
            </li>
            <li class="page-scroll">
              <a href="#our-blog">Noticas</a>
            </li>
            <li class="page-scroll">
              <a href="/blog" onclick="window.location = '/blog'">Blog</a>
            </li>
            <li class="page-scroll">
              <a  href data-toggle="modal" data-target="#modalAccess">Entrar</a>
            </li>
          </ul>
        </div>
        <!-- //.navbar-collapse -->
      </div>
      <!-- //.container -->
    </nav>
    <!-- //End Navbar -->
    <!-- Begin Who We Are Section -->
    <section id="who-we-are" class="section">
        <div class="section-inner">
            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="main-title"><strong>{{__('ini.Q')}}</strong></h2>

                            <h3 class="sub-title"><strong>{{__('ini.IFO_N')}}</strong></h3>

                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-6">
                        <div id="carousel-who-we-are" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="assets/images/system/1.jpeg" alt="" class="img-responsive img-rounded" />
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <img src="assets/images/system/2.jpg" alt="" class="img-responsive img-rounded" />
                            </div>
                        </div>
                        <!-- //.owl-carousel -->
                    </div>
                    <!-- //.col-md-6 -->

                    <div class="col-md-6">
                        <div class="who-we-are-text">
                            <h4>{{__('ini.BODY1_TITLE')}}</h4>
                            <h2>{{__('ini.AUDI_LAG')}}</h2>
                            <p>{{__('ini.BODY_QUIENES_SOMOS')}}</p>
                            <!-- //.page-scroll -->
                        </div>
                        <!-- //.who-we-are-text -->
                    </div>
                    <!-- //.col-md-6 -->
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="who-we-are-text">
                <h4>Estamos contigo</h4>
                <p>Estamos contigo.
                  En Audi de México y su red de concesionarios actuamos con responsabilidad y
                  tomamos las medidas necesarias de acuerdo con las recomendaciones de la OMS y 
                  las autoridades correspondientes para seguir operando de forma habitual,
                  así podremos brindarte nuestro servicio y asesoría..
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //End Who We Are Section -->
    <!-- Begin Quote Section -->
    <section id="quote" class="section section-bgimage-yes">
        <div class="section-inner">
            <div class="section-overlay"></div>

            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="quote-text text-center">
                            <span class="quote-icon">
                                <i class="fa fa-quote-right fa-4x"></i>
                            </span>

                            <h2 style="color:#fff">"{{__('ini.BODY2')}}".</h2>

                            <a href="#our-latest-work" class="btn btn-green86">{{__('ini.btn.INTERES')}}</a>
                        </div>
                        <!-- //.quote-text -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //End Quote Section -->



    <!-- Begin Our Services Section -->
    <section id="our-services" class="section">
        <div class="section-inner">
            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3 class="main-title">{{__('ini.SERV')}}</h3>

                            <h4 class="sub-title">{{__('ini.SERV_BODY')}}</h4>

                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-sm-2 col-md-2">
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="funny-boxes float-shadow not-right-column text-center">
                            <span class="funny-boxes-icon">
                                <i class="fa fa-lightbulb-o"></i>
                            </span>

                            <div class="funny-boxes-text">
                                <h4>{{__('ini.B_SERVICIOS.HEAD')}}</h4>

                                <p>{{__('ini.B_SERVICIOS.BOD')}}</p>
                            </div>
                            <!-- //.funny-boxes-text -->
                        </div>
                        <!-- //.funny-boxes -->
                    </div>
                    <!-- //.col-sm-4 col-md-4 -->

                    <div class="col-sm-4 col-md-4">
                        <div class="funny-boxes float-shadow  text-center">
                            <span class="funny-boxes-icon">
                                <i class="fa fa-heart-o"></i>
                            </span>

                            <div class="funny-boxes-text">
                                <h4>{{__('ini.B_SERVICIOS.HEAD_2')}}</h4>

                                <p>{{__('ini.B_SERVICIOS.BOD2')}}</p>
                            </div>
                            <!-- //.funny-boxes-text -->
                        </div>
                        <!-- //.funny-boxes -->
                    </div>
                    <!-- //.col-sm-4 col-md-4 -->

                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
    </section>
    <!-- //End Our Services Section -->


    <!-- Begin Keep In Touch Section -->
    <section id="keep-in-touch" class="section section-bgimage-yes">
        <div class="section-inner">
            <div class="section-overlay"></div>

            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3 class="main-title">{{__('ini.REDS')}}</h3>

                            <h4 class="sub-title">{{__('ini.INFO')}}</h4>

                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-xs- col-sm-2 col-md-3">
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="social-icon-item text-center not-right-column top-column">
                            <a target="_blank" href="">
                                <span class="social-icon">
                                    <i class="fa fa-facebook"></i>
                                </span>

                                <h4>Facebook</h4>
                            </a>
                        </div>
                        <!-- //.social-icon-item -->
                    </div>
                    <!-- //.col-xs-6 col-sm-4 col-md-2 -->

                    <!-- <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="social-icon-item text-center not-right-column top-column">
                            <a href="#twitter">
                                <span class="social-icon">
                                    <i class="fa fa-twitter"></i>
                                </span>

                                <h4>Twitter</h4>
                            </a>
                        </div>
                    </div> -->
                    <!-- //.col-xs-6 col-sm-4 col-md-2 -->

                    <!-- <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="social-icon-item text-center not-right-column top-column">
                            <a href="#google+">
                                <span class="social-icon">
                                    <i class="fa fa-google-plus fa-5x"></i>
                                </span>

                                <h4>Google +</h4>
                            </a>
                        </div>
                    </div> -->
                    <!-- //.col-xs-6 col-sm-4 col-md-2 -->

                    <!-- <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="social-icon-item text-center not-right-column">
                            <a href="#youtube">
                                <span class="social-icon">
                                    <i class="fa fa-youtube fa-5x"></i>
                                </span>

                                <h4>Youtube</h4>
                            </a>
                        </div>
                    </div> -->
                    <!-- //.col-xs-6 col-sm-4 col-md-2 -->

                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="social-icon-item text-center not-right-column">
                            <a href="#pinterest">
                                <span class="social-icon">
                                    <i class="fa fa-pinterest fa-5x"></i>
                                </span>

                                <h4>Pinterest</h4>
                            </a>
                        </div>
                        <!-- //.social-icon-item -->
                    </div>
                    <!-- //.col-xs-6 col-sm-4 col-md-2 -->

                    <div class="col-xs-12 col-sm-3 col-md-2">
                        <div class="social-icon-item text-center">
                            <a href="#instagram">
                                <span class="social-icon">
                                    <i class="fa fa-instagram fa-5x"></i>
                                </span>

                                <h4>Instagram</h4>
                            </a>
                        </div>
                        <!-- //.social-icon-item -->
                    </div>
                    <!-- //.col-xs-6 col-sm-4 col-md-2 -->
                </div>
                <!-- //.row -->
            </div>
            <div class="col-xs-12 col-sm-3 col-md-2">
              <div class="social-icon-item text-center">
                <a href="#instagram">
                  <span class="social-icon">
                    <i class="fa fa-instagram fa-5x"></i>
                  </span>
                  <h4>Instagram</h4>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //End Keep In Touch Section -->

    <!-- Begin Our Latest Work Section -->
    <section id="our-latest-work" class="section">
        <div class="section-inner">
            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="main-title">Nuestros productos</h2>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-portfolio">
                            <ul class="list-unstyled">
                                <li class="active">
                                    <a href="#" data-filter="*" class="btn btn-rj disabled">todo</a>
                                </li>
                                @foreach($categorias as $categoria)
                                <li class="">
                                    <a href="#" data-filter=".{{trim($categoria->nombre)}}" class="btn btn-rj"
                                        data-categoria="{{$categoria->nombre}}">{{$categoria->nombre}}</a>
                                </li>
                                @endforeach

                                <!-- <li>
                                        <a href="#" data-filter=".logo" class="btn btn-rj">Logo</a>
                                    </li>

                                    <li>
                                        <a href="#" data-filter=".illustration" class="btn btn-rj">Illustration</a>
                                    </li> -->
                            </ul>
                        </div>
                        <!-- //.filter-portfolio -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="popup-portfolio">
                            @foreach($productos as $producto)
                            <div class="portfolio-item grow {{$producto->categoria}}"
                                data-categoria="{{trim($producto->categoria)}}">
                                <div class="inner-content">
                                    <div class="portfolio-content">
                                        <div class="portfolio-detail">
                                            <a class="download-link" target="_blank"
                                                href="/assets/images/productos/{{$producto->imagen}}"
                                                title="{{$producto->nombre}}">
                                                <div class="portfolio-text">
                                                    <h4>{{$producto->nombre}}</h4>
                                                    <p>{{strip_tags($producto->descripcion)}}</p>
                                                </div>
                                                <!-- //.portfolio-text -->
                                            </a>
                                            <div class="text-center" style="text-align:center;position:relative;">
                                                <h6 role="button" data-id="{{$producto->id}}"
                                                    class="btn btn-green86 btn-interesa" data-toggle="modal"
                                                    data-target="#md-interes" style="margin-top:-39rem;">¡Me interesa!
                                                </h6>
                                            </div>
                                        </div>
                                        <!-- //.portfolio-detail -->
                                    </div>
                                    <!-- //.portfolio-content -->
                                    <img src="/assets/images/productos/{{$producto->imagen}}" alt=""
                                        class="img-responsive">
                                    </img>

                                </div>
                                <!-- //.inner-content -->
                            </div>
                            @endforeach
                            <!-- //.portfolio-item -->
                        </div>
                        <!-- //.popup-portfolio -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
    </section>
    <!-- //End Our Latest Work Section -->

        <section id="our-blog" class="section" style="background-color:#ddd;">
            <div class="section-inner">
                <div class="container section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h3 class="main-title">Nuestro Blog</h3>

                                    alt="{{$post->titulo}}" style="width:100%; height:22rem;">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <!-- <h4 class="card-title">Card title</h4>
                                <hr> -->
                                <!--Text-->
                                <p class="card-text">{{substr(strip_tags($post->contenido),0,100)}}...</p>
                            </div>
                            <!--/.Card content-->

                            <!-- Card footer -->
                            <div class="card-data">
                                <h4 class="card-title">{{$post->titulo}}</h4>
                                <!-- <ul>
                                  <li><i class="fa fa-clock-o"></i> 05/10/2015</li>
                                  <li><a href="#"><i class="fa fa-comments-o"></i>12</a></li>
                              </ul> -->
                            </div>
                            <!-- Card footer -->

                        </div>
                        <!--/.Card-->

                        <!-- //.funny-boxes -->
                    </div>
                </div>
                <!-- //.row -->
                <center class="center-button">
                    <a href="/blog" class="btn btn-green86 btn-lg">Visitar Blog</a>
                </center>
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
    </section>
    <!-- //End blog Section -->

    <div class="modal fade in" id="md-interes" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="">
                                <label style="font-size:1.6rem;">Hazle saber al administrador que te interesa este
                                    producto</label>
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
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"
                                            id="bntCancel">
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
                                    <i class="fa fa-envelope-o"></i> audi-laguna@audi.com
                                </li>

                                <li>
                                    <i class="fa fa-map-marker"></i> 14374 Salemba Raya, Central Jakarta
                                </li>

                                <li>
                                    <i class="fa fa-clock-o"></i> HORARIOS:
                                    LUNES A VIERNES DE 9 AM A 6 PM Y SÁBADO DE 10 AM A 1 PM
                                </li>
                            </ul>

                            <ul class="social-icon-list list-unstyled list-inline">
                                <li>
                                    <a href="https://www.facebook.com/search/top/?q=green%2086%2C%20ecodise%C3%B1o"><i
                                            class="fa fa-facebook"></i></a>
                                </li>

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
                                    <textarea type="text" id="message" style="background-color:transparent;"
                                        class="form-control" required></textarea>
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
                    <div class="col-md-12">
                        <p>UTT JLMR,JLM,KBD,IS &copy; {{Date('Y')}} <a href="#">Audi Laguna.</a></p>
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
                                    <button type="button" class="btn btn-warning" data-dismiss="modal" id="btnRegister">
                                        <span class="fa fa-check"></span>
                                        Cancelar
                                    </button>
                                    <button type="button" class="btn btn-success" id="btnLogin">
                                        <span class="fa fa-arrow-right"></span>
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
        $(function () {
            setTimeout(function () {
                $(".list-unstyled li.active").next().children("a").trigger("click");
                //  var filtros = $(".list-unstyled li.active>a").data("filter");
                //  $(".portfolio-item").hide();
                //  $(filtros).show();
                //console.clear();
            }, 700)
            $(".btn-interesa").click(function () {
                $("#id").val($(this).data("id"));
                //setTimeout(function(){$(".mfp-close").trigger("click");},1000)
            })
        });
    </script>
</body>

</html>