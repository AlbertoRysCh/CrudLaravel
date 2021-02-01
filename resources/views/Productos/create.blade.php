@extends("../layouts.plantilla")

@section("cabezera")

@section("contenido")

<form method="post" action="/productos">
<input type="text" name="NombreArticulo" id="" placeholder="Escribe tu nombre">
{{csrf_field()}}
<input type="submit" name="Enviar" value="Enviar">
</form>