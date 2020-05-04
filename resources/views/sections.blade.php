@extends('templates.admin')

@section('styles')
  <link rel="stylesheet" href="/libs/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="/styles/section/css/section.css">
@stop

@section('title')
  Secciones
@stop

@section('content')
  <section class="row section-table">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Cateorias del Blog</h3>
          <div class="pull-right">
            <button type="button" name="conf-in" class="btn btn-success conf-display">
              <span class="fa fa-plus"></span>&nbsp;
              Nueva sección
            </button>
          </div>
          <br>
        </div>
        <div class="box-body">
          <table id="sections" class="table table-bordered table-striped table-responsive">
            <thead>
              <tr>
                <th>Nombre de la sección</th>
                <th>Fecha de Creación</th>
                <th>Última Actualización</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($secciones as $seccion)
              <tr>
                <td>{{$seccion->titulo}}</td>
                <td>{{$seccion->created_at}}</td>
                <td>{{$seccion->updated_at}}</td>
                <td>
                  <center>
                    
                    <button type="button" name="section-del" class="btn btn-danger btn-inline-block" title="Eliminar" data-val="{{$seccion->id}}">
                      <span class="fa fa-trash"></span>
                    </button>


                    <button type="button" name="section-edit" class="btn btn-info btn-inline-block" title="Rolar" data-val="{{$seccion->id}}">
                      <span class="fa fa-pencil"></span>
                    </button>


                    
                    <a href="/admin/post/{{$seccion->id}}" name="section-in" class="btn btn-primary btn-inline-block" title="Ingresar">
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
            Agregar nueva sección
          </h3>
        </div>

        <div class="box-body">
          <form name="form-section">
            <div class="form-group">
              <label>Título de la sección</label>
              <input type="text" name="titulo" class="form-control" autofocus>
            </div>
            <div class="form-group">
              <label>Imagen de la sección</label>
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
              <label>Descripción</label>
              <textarea name="contenido"></textarea>
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
            <button type="button" name="saveSection" class="btn btn-primary">
              <span class="fa fa-check"></span>&nbsp;
              Guardar sección
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
  <script src="/scripts/sections/sections.js" charset="utf-8"></script>
@stop
