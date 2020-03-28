<!-- Ancho Máximo 767px -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="/assets/images/logo-banner.png">
    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/admin/stack/admin.min.css">
    <link rel="stylesheet" href="/styles/admin/stack/skins/skin-black.min.css">
    <link rel="stylesheet" href="/styles/admin/css/admin-gral.css">
    <link rel="stylesheet" href="/libs/sweetalert2-master/dist/sweetalert2.css">
    @yield('styles')

    <title>
      @yield('title')
    </title>
  </head>

  <body class="hold-transition skin-black fixed">
    <div class="wrapper">
      <header class="main-header">
        <a href="javascript:void(0)" class="logo">
          <span class="logo-lg"><b>Audi Laguna</b></span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Menú</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="active li-menu" id="li-blog">
              <a href="/admin/secciones">
                <i class="fa fa-link"></i>
                <span>Blog</span>
              </a>
            </li>
            <li class="li-menu" id="li-catalogo">
              <a href="#">
                <i class="fa fa-link"></i>
                <span>Cátalogo de producto</span>
              </a>
            </li>
            <li class="li-menu" id="li-catalogo">
              <a href="/Chat">
                <i class="fa fa-link"></i>
                <span>Chats</span>
              </a>
            </li>
            <li class="li-menu">
              <a href="/logout">
                <i class="fa fa-sign-out"></i>
                <span>Cerrar session</span>
              </a>
            </li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content">

        <div id="wrapper">
  <div id="menu">
        <p class="welcome">Bienvenido, <b></b></p>
        <p class="logout"><a id="exit" href="/logout">Salir del Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox"></div>
     
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
 
});
</script>

        </section>
      </div>

      <footer class="main-footer">
        <strong>
          Copyright &copy; 2017
          <a href="https://www.supernovaapps.com.mx">Supernova Apps</a>
        </strong>
        | Todos los derechos reservados.
      </footer>

    </div>

    <script src="/libs/jQuery/jquery-2.2.3.min.js"></script>
    <script src="/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/libs/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="/libs/fastclick/fastclick.js"></script>
    <script src="/scripts/app.min.js"></script>
    <script src="/scripts/admin/admin.js" charset="utf-8"></script>
    <script src="/libs/sweetalert2-master/dist/sweetalert2.js" charset="utf-8"></script>

    @yield('scripts')


    <style type="text/css">

  
form, p, span {
    margin:0;
    padding:0; }
  
input { font:12px arial; }
  
a {
    color:#0000FF;
    text-decoration:none; }
  
    a:hover { text-decoration:underline; }
  
#wrapper, #loginform {
    margin:0 auto;
    padding-bottom:25px;
    background:#EBF4FB;
    width:504px;
    border:1px solid #ACD8F0; }
  
#loginform { padding-top:18px; }
  
    #loginform p { margin: 5px; }
  
#chatbox {
    text-align:left;
    margin:0 auto;
    margin-bottom:25px;
    padding:10px;
    background:#fff;
    height:270px;
    width:430px;
    border:1px solid #ACD8F0;
    overflow:auto; }
  
#usermsg {
    width:395px;
    border:1px solid #ACD8F0; }
  
#submit { width: 60px; }
  
.error { color: #ff0000; }
  
#menu { padding:12.5px 25px 12.5px 25px; }
  
.welcome { float:left; }
  
.logout { float:right; }
  
.msgln { margin:0 0 2px 0; }
    </style>

  </body>
</html>
