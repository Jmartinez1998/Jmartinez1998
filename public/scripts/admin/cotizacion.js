$(function () {
    // =========================================================================
    // DECLARACION DE VARIABLES
      const $imagen = $("input[name=imagen]");
      const $openfile = $("button[name=openfile]");
      const $cotizaciones = $("#cotizaciones");
      const $imageName = $("input[name=file-image]");
      const maxSize = 2048000;
      const $title = $("input[name=titulo]");
      const $content = $("input[name=contenido]");
      const $btnSave = $("button[name=saveCotizacion]");
      const $btnPrev = $("button[name=preview]");
      const $btnDel = $("body").find('button[name=cotizacion-del]');
      const $btnCancel = $('body').find('button[name=conf-cancel]');
      const $btnEdit = $('body').find('button[name=cotizacion-edit]');
      const $btnInPost = $('body').find('button[name=cotizacion-in]');
      var saveType = "save";
      var cotizacion_id;
    // =========================================================================
    // INICIALIZACIÓN
      //$cotizaciones.DataTable
      // =========================================================================
// INICIALIZACIÓN
  $cotizaciones.DataTable();
  tinymce.init({
    selector: 'textarea',
    height: 400,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor textcolor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table contextmenu paste code help'
    ],
    toolbar: 'insert | undo redo |  styleselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tinymce.com/css/codepen.min.css']
  });
    // =========================================================================
    // FUNCIONES
      function fileExt(archivo, tipos){
        extensiones_permitidas = tipos;
        extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
        permitida = false;
        for (var i = 0; i < extensiones_permitidas.length; i++) {
          if (extensiones_permitidas[i] == extension) {
            permitida = true;
            break;
          }
        }
        if (!permitida) {
           swal(
             'Upps!',
             "Comprueba la extensión del archivo a subir. \nSólo se pueden subir archivos con extensiones de tipo: "+extensiones_permitidas.join(),
             'warning'
           );
            }else{
           return true;
            }
         return false;
      }
      function resetConf(){
        $imageName.val("");
        $title.val("");
        $content.val("");
      }
      function getValues(){
        let values = new FormData($("#form-imagen")[0]);
        values.append('nombre', $title.val());
        return values;
      }
      function saveCotizacion(data, uri){
        $.ajax({
          url: uri,
          type: 'POST',
          data: data,
          cache: false,
          contentType: false,
          processData: false
        })
        .done(function(res){
          try {
            switch (res.status) {
              case "200":
                swal(
                  'Bien hecho!',
                  'La sección de ha guardado.',
                  'success'
                );
                window.location.reload();
                break;
              case "401":
                $.each(res.data, function(index, obj){
                  swal(
                    'Upps!',
                     ""+obj,
                    'info'
                  );
                });
                $btnSave.prop("disabled", false);
                $btnDel.prop("disabled", false);
                $btnCancel.prop("disabled", false);
                break;
              default:
                $btnSave.prop("disabled", false);
                $btnDel.prop("disabled", false);
                $btnCancel.prop("disabled", false);
                swal(
                  'Upps!',
                  'Error no administrado, vulve a intentarlo\nSi el problema continua, contactanos para solucionar',
                  'error'
                );
                break;
            }
          } catch (e) {
            swal(
              'Upps!',
              'Error no administrado, vulve a intentarlo\nSi el problema continua, contactanos',
              'error'
            );
          }
        })
        .fail(function(err){
          console.log(err);
        });
      }
      function deleteCotizacion(id){ 
        swal({
          title: '¿Estás seguro?',
          text: "Al eliminar esta cotizacion también se eliminaran todos los productos permanecientes a esta cotizacion.",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sí, eliminar!',
          cancelButtonText: 'cancelar'
        }).then(function () {
          $.ajax({
            url: '/cotizacion-delete',
            type: 'POST',
            data: {'id': id}
          })
          .done(function(res){
            console.log(res);
            switch (res.status) {
              case '200':
                swal(
                  'Eliminado!',
                  'La cotizacion ha sido eliminada.',
                  'success'
                );
                window.location.reload();
                break;
              case '404':
                swal(
                  'Upps!',
                  'No se ha realizado la acción, recarga e intentalo nuevamente.',
                  'info'
                );
                break;
            }
          })
          .fail(function(err){
            swal(
              'Upps!',
              'Error no administrado, vulve a intentarlo\nSi el problema continua, contactanos',
              'error'
            );
            console.log(err);
          });
        });
        $btnDel.prop('disabled', false);
        $btnInPost.prop("disabled", false);
        $btnEdit.prop('disabled', false);
      }
      function getEditValues(id){
        $.ajax({
          url: '/cotizacion-info',
          type: 'POST',
          data: {'id': id}
        })
        .done(function(res){
          try {
            switch (res.status) {
              case '200':
                $title.val(res.data.nombre);
                $(`.section-table`).hide('slow');
                $(`.admin-section`).show('slow');
                break;
              case '404':
                swal(
                  'Upps',
                  'La cotizacion seleccionada no pudo ser obtenida',
                  'info'
                );
                break;
              default:
                swal(
                  'Upps!',
                  'Error no administrado, vuelve a intentarlo\nSi el problema continua, contactanos',
                  'error'
                );
                break;
            }
          } catch (e) {
            console.log(e);
            swal(
              'Upps!',
              'Error no administrado, vulve a intentarlo\nSi el problema continua, contactanos',
              'error'
            );
          }
        })
        .fail(function(err){
          swal(
            'Upps!',
            'Error no administrado, vulve a intentarlo\nSi el problema continua, contactanos',
            'error'
          );
          console.log(err);
        });
      }
    // =========================================================================
    // LLAMADAS Y ACCIONES
      $("button[name=conf-cancel]").on('click', resetConf);
      $("button[name=conf-in]").on('click', function(e){
        resetConf();
        saveType = "save";
      });
      $openfile.on('click', () => { $imagen.trigger('click'); })
      $imagen.on('change', (e) => {
        if (e.target.value.trim() != ""){
          var archivos = document.getElementById(e.target.id).files;
          if(archivos[0].size > maxSize){
            $imageName.val("");
            $imagen.val("");
            $btnPrev.data('img-prev', '');
            swal(
              'Upps!',
              `El archivo seleccionado excede el peso máximo de ${((maxSize / 1024) / 1000) + " MB"}`,
              'warning'
            );
          }
          let value = archivos[0].name;
          if ( fileExt(value, ['.png', '.jpg']) == true ){
            var reader = new FileReader();
            reader.onload = function (e) { $btnPrev.data('img-prev', e.target.result); }
            reader.readAsDataURL(archivos[0]);
            $imageName.val(value);
          }
          else {
            $imageName.val("");
            $imagen.val("");
            $btnPrev.data('img-prev', '');
          }
        }
      });
      $btnSave.on('click', function(e) {
        $btnSave.prop("disabled", true);
        $btnDel.prop("disabled", true);
        $btnCancel.prop("disabled", true);
        let data = getValues();
        var uri = "";
        if (saveType == "save"){
          uri= "/cotizacion-create";
        }
        else {
          uri = "/cotizacion-update";
          data.append('id', cotizacion_id);
        }
        saveCotizacion(data, uri);
      });
      $btnPrev.on('click', function() {
        $("#preview").html("");
        $("#preview").append(`<h1 class="cotizacion-title">${$title.val()}</h1>`);
        $("#preview").append(`<div style="background-image: url(${$btnPrev.data('img-prev')})" class="cotizacion-banner"></div>`);
      });
      $btnDel.on('click', function(e) {
        $btnDel.prop('disabled', true);
        $btnInPost.prop("disabled", true);
        $btnEdit.prop('disabled', true);
        $("button[name=conf-in]").prop("disabled", true);
        deleteCotizacion($(this).data('val'));
      });
      $btnEdit.on('click', function (e) {
        $btnEdit.prop('disabled', true);
        $btnDel.prop('disabled', true);
        $btnInPost.prop("disabled", true);
        $("button[name=conf-in]").prop("disabled", true);
        cotizacion_id = $(this).data('val');
        saveType = 'update';
        getEditValues(cotizacion_id);
      });
      $btnCancel.on('click', (e) => {
        $btnEdit.prop('disabled', false);
        $btnDel.prop('disabled', false);
        $btnInPost.prop("disabled", false);
        $("button[name=conf-in]").prop("disabled", false);
      });
      $(".li-menu").removeClass("active");
      $("#li-cotizacion").addClass("active");
    
    // =========================================================================
    });
    