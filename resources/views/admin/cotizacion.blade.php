@extends('templates.admin')

@section('styles')
  <link rel="stylesheet" href="/libs/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="/assets/css/post.css">
  <style media="screen">
    .img-fluid{
      width: 100%;
      height: auto;
    }
  </style>
@stop

@section('title')
  Cotización
@stop

@section('content')
  <section class="row section-table">
    <div class="col-xs-12">
      <div class="back-post">
        <a href="/admin/cotizaciones" name="post-in" class="btn btn-primary">
          <span class="fa fa-arrow-left"></span>&nbsp;
          Regresar
        </a><br><br>
      </div>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Cotización de {{$cotizacion->nombre}} </h3>
          <div class="pull-right">
            <button type="button" name="conf-in" class="btn btn-success conf-display" data-val="{{$cotizacion->id}}">
              <span class="fa fa-plus"></span>&nbsp;
             Responder Cotización
            </button>
          </div>
          <br>
        </div>
        <div class="box-body">
          <div class="container">
            <img src="">
            <h2 style="text-align:center">¡Ha llegado una cotización nueva!</h2>
            <h2>Hola, </h2>
            <h4>El cliente {{$cotizacion['nombre']}} ha enviado una cotización para el producto {{$cotizacion->producto->nombre}}.</h4>
          </div>
          <hr>
          <div class="col-md-2"></div>
          <div class="col-md-8">
          <div class="jumbotron" style="border-radius:10px">
            <div class="container">
              <h3 style="color:#2a76b0">Datos que proporciono el cliente:</h3>
              <br>
              <strong>Nombre: </strong>
              <h5 style="color:#2a76b0">{{$cotizacion['nombre']}}</h5>
              <strong>Email:</strong>
              <h5 style="color:#2a76b0">{{$cotizacion['email']}}</h5>
              <strong>Empresa: </strong>
              <h5 style="color:#2a76b0">{{$cotizacion['empresa']}}</h5>
              <strong>Mensaje: </strong>
              <h5 style="color:#2a76b0">{{$cotizacion['mensaje']}}</h5>
            </div> 
          </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Detalles de la seccion y agregar nuevo -->
    
  <section class="row admin-section">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-header">
          <h3 class="box-title" id="title-post">
            Respondiendo cotización
          </h3>
        </div>

        <div class="box-body">
          <form name="form-producto">
            <div class="form-group">
              <label>Asunto</label>
              <input type="text" name="titulo" class="form-control" autofocus>
            </div>
            <div class="form-group">
              <label>Archivo</label>
              <div class="input-group">
                <input type="text" name="file-image" class="form-control" readonly>
                <span class="input-group-btn">
                  <button type="button" name="openfile" class="btn btn-primary">
                    <span class="fa fa-folder-open"></span>&nbsp;
                    Abrir
                  </button>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label>Mensaje</label>
              <textarea name="descripcion" class="form-control" rows="8" maxlength="150"></textarea>
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
            <button type="button" name="preview" class="btn btn-info btn-preview">
              <span class="fa fa-eye"></span>&nbsp;
              Previsualizar
            </button>
            <button type="button" name="saveproducto" class="btn btn-primary">
              <span class="fa fa-check"></span>&nbsp;
              Guardar producto
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
        </div>
      </div>
    </div>
  </section>

@stop

@section('scripts')
  <script src="/libs/datatables/jquery.dataTables.min.js"></script>
  <script src="/libs/datatables/dataTables.bootstrap.min.js"></script>
  <script src="/libs/tinymce/js/tinymce/tinymce.min.js" charset="utf-8"></script>
  <script src="/scripts/catalogo/productos.js" charset="utf-8"></script>
@stop
