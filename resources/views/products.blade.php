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

    <!-- Component CSS -->
    <link href="assets/css/component/component.css" rel="stylesheet" type="text/css">
    <!--<link href="assets/css/component/colors/blue.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="/libs/alertifyjs/css/alertify.min.css">
    <!-- Main CSS -->
    <link href="assets/css/green.css" rel="stylesheet" type="text/css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body>
    <!-- Begin Page Loader -->
    <div id="page-loader">
        <div class="preload">
            <img src="assets/img/preloader.gif" alt="Loading"/>
        </div>
        <!-- //.preload -->
    </div>
    @include('components.globals.navbar-two')
    <div class="container">
      <div class="row" style="margin-top:2rem;margin-bottom:2rem;">
        @isset($products)
        @if(count($products) > 0 )
        @foreach($products as $product)
        <div class="col-md-4">
          <div class="card" style="width: 100%;">
            <img src="/assets/images/productos/{{$product->imagen}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$product->nombre}}</h5>
                  <p class="card-text">{!!$product->descripcion!!}</p>
                @include('components.btn-cotizacion')
                </div>
              </div>
              @include('components.cotizacion.modal-cotizacion')
          </div>
        
          @endforeach
          @else
          <div class="row justify-content-center" style="margin-top:5%;margin-bottom:5%;">
            <div class="col-12 col-lg-8">
              <h3 class="h3-responsive">Ningún producto coincide con tu busqueda</h3>
              <p class="lead">Nos discupalmos por el error, por favor prueba con otro término de busqueda</p>
              <div class="row">
                <div class="col-12 col-lg-4">
                  <a href="/" class="btn btn-block">Regresar a Inicio</a>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endisset
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
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>

                                <li class="hidden-xs">
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- //.footer-text -->
                    </div>
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
    <!-- Plugins JS -->
    <script src="libs/jquery.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/jquery-validation/jquery.validate.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Animation JS (Optional) -->
    <script src="assets/js/animation.js"></script>

    <!-- Component JS -->
    <script src="libs/alertifyjs/alertify.js" charset="utf-8"></script>
    <script src="/scripts/login.js" type="text/javascript"></script>
    <script src="/scripts/buzon.js" charset="utf-8"></script>
</body>
</html>







