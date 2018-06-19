$( "#agregar" ).submit(function( event ) {
var formData = new FormData();
formData.append('file', $('#file')[0].files[0]);
formData.append('nombre', $('#nombre').val());
formData.append('version', $('#version').val());
btnenviar = $('#enviar').val();
$.ajax({
     url: '../procesos/documentos/agregar.php',
     type: 'POST',
     data: formData, //el data es tu objeto formData
     processData: false, //indicas a jQuery que no procese la informaciÃ³n
     contentType: false, //indicas a jQuery que no configure el contentType del request
      beforeSend: function(objeto){
    $("#mensaje-carga").html("<div class='panel panel-default'><div class='panel-heading'>El archivo se esta Subiendo, espere un momento y no cierre la pantalla... <br><img src='../assets/img/subiendo.gif'></div></div>");
     
     btnenviar.disabled = true;
  
  
    },
  success: function(datos){
  $("#mensaje").html(datos);//mostrar mensaje
  $("#agregar")[0].reset();  //resetear inputs
  $('#newModal').modal('hide');  // ocultar modal
  $("#mensaje-carga").html("");//mostrar mensaje
  loadTabla(1);

  }
});

event.preventDefault();
});
