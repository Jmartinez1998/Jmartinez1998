<div>
    <div class="float-right-messenger">
        <div class="card">
            <div class="card-header">
                 <!-- MENSAJE DE ALERTA-->
                <div style="position:absolute"
                class="alert alert-success collapse"
                role="alert" id="avisoSuccess">Se ha enviado
            </div>
              <h2 style="color:black">Chat en línea </h2> 
            </div>
            <div class="card-body">
              <p style="color:black" class="card-text">¿Tienes alguna duda? Contactanos por aquí </p>
              <div class="form-group">
                @livewire('chat-list')
              </div>
                <form>
                    <div class="form-group">
                        <label style="color:black" for="nombre" class="col-form-label">Nombre:</label>
                        <input wire:model="name" type="text" class="form-control" id="name" required>
                      </div>
                  <div class="form-group">
                    <label style="color:black" for="message-text" class="col-form-label"required >Mensaje:</label>
                    <textarea class="form-control" id="mensaje" wire:model="mensaje"></textarea>
                    
                   </div>
                </form>
            </div>
            <!--Footer-->
            <div class="modal-footer justify-content-center" style="height:10%;background-color:#c9e3d936">
              <a  type="button" class="btn btn-primary waves-effect waves-light" wire:click="sendMessage" >Enviar Mensaje
                <i class="fa fa-paper-plane ml-1"></i>
              </a>
            </div>
            </div>
          </div>
      </div>
     

      <script>
          //Esto lo recibimox en js cuando lo emite el componente
          //El evento 'mensajeenviado'
         
          window.livewire.on('mensajeEnviado', function(){
              //Mostramos el aviso
              $('#avisoSuccess').fadeIn("slow");
              //Ocultamos el aviso a los 3 segundos
              setTimeout(function(){ $("#avisoSuccess").fadeOut("slow");},3000);
          });
      </script>

</div>
 