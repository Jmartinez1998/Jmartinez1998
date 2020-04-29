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



    <script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'chat.php', true);
			req.send();
		}

		//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){ajax();}, 1000);
	</script>


    <title>
      @yield('title')
    </title>
  </head>

  <body class="hold-transition skin-black fixed" onload="ajax();>
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










        <div id="contenedor">
		<div id="caja-chat">
			<div id="chat"></div>
		</div>

		<form method="POST" action="index.php">
			<input type="text" name="nombre" placeholder="Ingresa tu nombre">			
			<textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
			<input type="submit" name="enviar" value="Enviar">
		</form>

		<?php
			if (isset($_POST['enviar'])) {
				
				$nombre = $_POST['nombre'];
				$mensaje = $_POST['mensaje'];


				$consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";

				$ejecutar = $conexion->query($consulta);

				if ($ejecutar) {
					echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
				}
			}

		?>
	</div>










        </section>
      </div>

      <footer class="main-footer">
        <strong>
          Copyright &copy; 2020
          <a href="#">UTT - Project</a>
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

  
*{
	padding:0;
	margin: 0;
	border: 2;
}

body{
	background: #972247;
}

#contenedor{
	width: 40%;
	background: #fff;
	margin: 0 auto;
	padding: 20px;
	border-radius: 12px;
	-moz-border-radius: 12px;
	-o-border-radius: 12px;
	-webkit-border-radius: 12px;
  border: 1px solid red;
}

#caja-chat{
	width: 90%;
	height: 400px;
  
}

#datos-chat{
	width: 100%;
	padding: 5px;
	margin-bottom: 5px;
	border-bottom: 1px solid red;
	font-weight: bold;
	font-family: 'Mukta Vaani', sans-serif;
  border: 1px solid red;
}

input[type='text']{
	width: 100%;
	height: 40px;
	border: 1px solid gray;
	border-radius: 5px;
}

input[type='submit']{
	width: 100%;
	height: 40px;
	border: 1px solid gray;
	border-radius: 5px;
	cursor: pointer;
}

textarea{
	width: 100%;
	height: 40px;
	border: 1px solid grey;
	border-radius: 5px;
}

input, textarea{
	margin-bottom: 3px;
}



    </style>

  </body>
</html>
