<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
</head>
  <body>
  <div class="container">
      <img src="" style="width:30%;margin-left: 35%;margin-right: 35%;">
      <h1 style="text-align:center">¡Gracias por enviar su cotización con nosotros!</h1>
      <h2>Hola, </h2>
      <h4>En seguida revisaremos su cotización y resivira la contestación previa.</h4>
    </div>
    <hr>
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <div class="jumbotron" style="border-radius:10px">
      <div class="container">
        <h3 style="color:#2a76b0">Usted nos ha proporcionado la siguiente información:</h3>
        <br>
        <strong>Nombre: </strong>
        <h5 style="color:#2a76b0">{{$request['nombre']}}</h5>
        <strong>Email:</strong>
        <h5 style="color:#2a76b0">{{$request['email']}}</h5>
        <strong>Empresa: </strong>
        <h5 style="color:#2a76b0">{{$request['empresa']}}</h5>
        <strong>Producto: </strong>
        <h5 style="color:#2a76b0">{{$request->producto->nombre}}</h5>
        <strong>Mensaje: </strong>
        <h5 style="color:#2a76b0">{{$request['mensaje']}}</h5>
      </div> 
    </div>
    </div>
    <div class="col-md-2"></div>
    <!-- Latest compiled and minified JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  </body>
</html> 