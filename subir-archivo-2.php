<script>
$('#qr').submit(function (event){

var parametros =  $(this).serialize();

$.ajax({

url:"../controlador/ambiente/qr.php",
type:"POST",
data: new FormData(this),
contentType: false,
cache: false,
processData:false,
beforeSend:function(){

$('#mensaje_file').html('Subiendo Imagen');

},
success:function(data){
//$("#qr")[0].reset(); 

$('#mensaje_file').html(data);

}

});


event.preventDefault();
});
</script>
