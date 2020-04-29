@extends('templates.admin')

@section('styles')
  <link rel="stylesheet" href="/libs/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="/styles/section/css/section.css">
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
@stop

@section('title')
  Chats - Audi Laguna
@stop 

@section('content')
  <section class="row section-table">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Historial de chats</h3>
          <div class="pull-right">
          </div>
          <br>
        </div>
        <div class="box-body">
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
<<<<<<< HEAD

      <footer class="main-footer">
        <strong>
          Copyright &copy; 2020
          <a href="#">UTT - Project</a>
        </strong>
        | Todos los derechos reservados.
      </footer>

=======
          </table>
        </div>
      </div>
>>>>>>> 10c5138d844ec4fb805da1d7da7320a9d6d8375e
    </div>
  </section>

<!-- Detalles de la seccion y agregar nuevo -->
  <section class="row admin-section">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-header">
          <h3 class="box-title">
            Agregar nueva categoría
          </h3>
        </div>

        <div class="box-body">
          <form name="form-section">
            <div class="form-group">
              <label>Título de la categoría</label>
              <input type="text" name="titulo" class="form-control" autofocus>
            </div>
          </form>
          <form name="form-imagen" hidden="hidden" id="form-imagen">
            <input type="file" name="imagen" id="imagen">
          </form>
        </div>

        <div class="box-footer">
          <div class="text-right">
            <button type="button" name="conf-cancel" class="btn btn-warning conf-display">
              <span class="fa fa-trash"></span>&nbsp;
              Cancelar
            </button>
            <button type="button" name="saveCategoria" class="btn btn-primary">
              <span class="fa fa-check"></span>&nbsp;
              Guardar Categoría
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="row section-preview">
    <div class="col-md-12">
      <div class="back-section">
        <button name="back-conf" class="btn btn-primary btn-preview">
          <span class="fa fa-arrow-left"></span>&nbsp;
          Regresar
        </button><br><br>
      </div>
      <div class="box">
        <div class="box-body">
          <div id="preview"></div>
          @for ($i=0; $i < 3; $i++)
          <div class="col-md-4">
            <img src="/assets/images/system/post.png" class="img-responsive">
            {{-- <div id="preview-posts"></div> --}}
          </div>
          @endfor
        </div>
      </div>
    </div>
  </section>

      @stop

      @section('scripts')
        <script src="/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="/libs/datatables/dataTables.bootstrap.min.js"></script>
        <script src="/libs/tinymce/js/tinymce/tinymce.min.js" charset="utf-8"></script>
        <script src="/scripts/catalogo/categoria.js" charset="utf-8"></script>
      @stop

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
