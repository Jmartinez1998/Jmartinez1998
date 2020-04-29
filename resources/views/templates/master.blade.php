<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <title>Audi- @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Google Font -->
    <link rel="shortcut icon" href="/assets/images/logo-banner.png">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link media="all" type="text/css" rel="stylesheet" href="/libs/mdb/css/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="/libs/font-awesome/css/font-awesome.min.css">

  	<link media="all" type="text/css" rel="stylesheet" href="/libs/mdb/css/mdb.min.css">

    <!-- Main CSS -->
    <link href="/assets/css/blog.css" rel="stylesheet" type="text/css">
    @yield('css')
</head>
<body>
  <!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark black">
        <a style="margin-left:5rem;" class="navbar-brand" href="/"><img src="/assets/images/logo-banner.png" class="img-fluid" style="width:10rem;height:2.6rem;" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fa fa-home"></i> Inicio </a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!--Main Navigation-->

<!--Main Layout-->
<main class="text-center py-5" style="margin-top:2rem;">
  <!--Main Layout-->
  <div class="container">
    @yield('content')
  </div>
</main>

    <!-- Begin Footer -->
    <footer class="footer">

        <!-- Begin Footer Section -->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 footer-column not-right-column">
                        <div class="footer-text">
                          <h4>Contactanos</h4>

                          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla rebds vel pellentesqu</p> -->
                          <p>Nos gustaría saber más de tí dejanos algún mensaje o contáctanos</p>
                          <ul class="icon-list list-unstyled">
                              <li>
                                  <i class="fa fa-phone"></i> +8712127851
                              </li>

                              <li>
                                  <i class="fa fa-envelope-o"></i> Audi-laguna@audi.com
                              </li>

                              <li>
                                  <i class="fa fa-map-marker"></i> 14374 Salemba Raya, Central Jakarta
                              </li>

                              <li>
                                  <i class="fa fa-clock-o"></i> HORARIOS:
LUNES A VIERNES DE 9 AM A 6 PM Y SÁBADO DE 10 AM A 1 PM
                              </li>
                          </ul>
                        </div>
                        <!-- //.footer-text -->
                    </div>
                    <!-- //.footer-column -->

                    <!-- //.footer-column -->

                    <div class="col-sm-4 col-md-4 footer-column">

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
                        <p>Copyright &copy; 2016 <a href="#">Audi Laguna.</a></p>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.container -->
        </div>
        <!-- //End Copyright -->
    </footer>
    <!-- //End Footer -->

<script src="/libs/mdb/js/jquery-3.1.1.min.js"></script>
<script src="/libs/moment/moment.js"></script>
<script src="/libs/moment/messages_es.js"></script>
<script type="text/javascript">
  //date moement
  var localLocale = moment()
  localLocale.calendar('es', {
            sameDay: '[Hoy]',
            nextDay: '[Mañana]',
            nextWeek: 'dddd',
            lastDay: '[Ayer]',
            lastWeek: '[Last] dddd',
            sameElse: 'DD/MM/YYYY'
  });
  moment.locale('es');
</script>
<script src="/libs/mdb/js/popper.min.js"></script>

<script src="/libs/mdb/js/bootstrap.min.js"></script>

<script src="/libs/mdb/js/mdb.min.js"></script>
@yield('js')
</body>
</html>
