$(document).ready(function(){

$("#btn-login").click(function(){
      let obj = {
      	"accion" : "login"
      };

$("form").find("input").map(function(i, e){
      obj[$(this).prop("name")] = $(this).val();
      if ($(this).prop("type") == "checkbox"){
      	obj[$(this).prop("name")] = $(this).prop("checked");
      }
	});
      //console.log(obj);
		$.post("includes/funciones.php", obj, function(respuesta){
			//alert(respuesta.texto);
			//Si el estatus es 0 enviar mensajes de datos incorrectos, intente de nuevo
			//Si el estatus es 1, redireccionar al index.
		}, "JSON");
});

});