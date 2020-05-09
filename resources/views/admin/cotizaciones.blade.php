@extends('templates.admin')

@section('styles')
  <link rel="stylesheet" href="/libs/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="/styles/section/css/section.css">
@stop

@section('title')
  Cotizaciones - Audi Laguna
@stop 

@section('content')
  <section class="row section-table">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Cotizaciones</h3>
          <div class="pull-right">
          </div>
          <br>
        </div>
        <div class="box-body">
          <table id="cotizaciones" class="table table-bordered table-striped table-responsive">
            <thead>
              <tr>
                <th>Nombre del cotizante</th>
                <th>Correo</th>
                <th>Producto a cotizar</th>
                <th>Fecha de Creación</th>
                <th>Contestada</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cotizaciones as $cotizacion) 
              <tr>
                <td>{{$cotizacion->nombre}}</td>
                <td>{{$cotizacion->email}}</td>
                <td>{{$cotizacion->producto->nombre}}</td>
                <td>{{$cotizacion->created_at}}</td>
                @if (count(DB::table('cotizacion_respuestas')->where('cotizacion_id', '=', $cotizacion->id)->get()) > 1)
                <td>Si</td>
                @else
                <td>NO</td>
                @endif
                <td>
                  <center>
                    <a type="button" href="/cotizacion-delete/{{$cotizacion->id}}" name="cotizacion-del" class="btn btn-danger btn-inline-block" title="Eliminar">
                      <span class="fa fa-trash"></span>
                    </a>
                    <a href="/admin/cotizacion/{{$cotizacion->id}}" name="cotizacion-in" class="btn btn-primary btn-inline-block" title="Ingresar">
                      <span class="fa fa-arrow-right"></span>
                    </a>
                  </center>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

<!-- Detalles de la seccion y agregar nuevo -->
  <section class="row admin-section">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-header">
          <h3 class="box-title">
            Contestación de la cotización
          </h3>
        </div>

        <div class="box-body">
          <form name="form-section">
            <div class="form-group">
              <label>Titulo del mensaje</label>
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
            <button type="button" name="saveCotizacion" class="btn btn-primary">
              <span class="fa fa-check"></span>&nbsp;
              Guardar Cotizacion
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
  <script src="/scripts/admin/cotizacion.js" charset="utf-8"></script>
@stop
