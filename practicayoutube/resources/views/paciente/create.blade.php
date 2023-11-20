<!-- creaciones
/*
se creara un formulario de tipo post donde se añadira
una imagen, para agregar la imagen se necesita de una linea
 de codigo propiedad o atrivuto
 ----
 enctype="multipart/form-data"
*/ -->
<form action="{{url('/paciente')}}" method="post" enctype="multipart/form-data">
<!-- el csrf es para que se cree una llave o que entienda que viene de aki tambien es el token-->
@csrf
<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre">
<br>
<label for="apellido">apellido</label>
<input type="text" name="apellido" id="apellido">
<br>
<label for="email">email</label>
<input type="text" name="email" id="email">
<br>
<!-- // de tipo fali o tipo documente para la foto -->
<label for="foto">foto</label>
<!-- usamos label para que se vean ya que no nos muestra -->
<input type="file" name="foto" id="foto">
<br>
<!-- //para poder enviar el submit en un botton -->
<!-- el value es para que no me muestre el botton al retornar -->
<input type="submit" value="guardar el dato">
<br>
<!-- para un salto de linea es el br -->
</form>