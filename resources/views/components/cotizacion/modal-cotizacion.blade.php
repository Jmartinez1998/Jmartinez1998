<div class="modal fade" id="modalPoll" tabindex="-1" style="background-image:url(/assets/images/system/cotzr.jpg); background-size:cover" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color:#80717170">
        <div class="modal-header">
        <a class="navbar-brand" href="#page-top"><img src="/assets/images/system/bg2.png" class="img-fluid img-responsive img-logo-banner" style="width:8rem;" alt=""></a>
          <h5 class="modal-title" id="exampleModalLabel" style="float:center">Cotiza aquí tú producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
          <form>
              <div class="row">
                <div class="col-md-8">
                </div>
                <div class="col-md-4">
                    <label>Fecha {{ date('Y-m-d') }}</label>
                    <input type="text" class="form-control" id="fecha" value="{{ date('Y-m-d') }}" style="display:none">
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="ingrese el correo" required>
                        <small id="emailHelp" class="form-text text-muted" style="color:#000">Debe ingresar el correo correctamente.</small>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">Usuario:</label>
                        <input type="text" class="form-control" id="nombre"placeholder="ingresa un nombre" required>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="producto">Producto a cotizar</label>
                        <input type="text" class="form-control" id="producto" value="{{$product->nombre}}" disabled>
                        <input type="text" class="form-control" id="id" value="{{$product->id}}" style="display:none">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" required>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="empresa">Empresa (Opcional)</label>
                    <input type="text" class="form-control" id="empresa" placeholder="Ingrese el nombre de la empresa">
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mensaje" class="col-form-label">Mensaje:</label>
                        <textarea class="form-control" id="mensaje"></textarea>
                      </div>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Enviar Cotización</button>
        </div>
      </div>
    </div>
  </div>