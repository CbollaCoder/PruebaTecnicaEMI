<div class="form-group">
	<label for="Nombre"> Nombre </label>
	<input type="text" class="form-control" value="{{isset($materia->Nombre)?$materia->Nombre:''}}" name="Nombre" id="Nombre">
</div>
<div class="form-group">
	<label for="Carrera"> Carrera </label>
	<input type="text" class="form-control" value="{{isset($materia->Carrera)?$materia->Carrera:''}}" name="Carrera" id="Carrera">
</div>
<div class="form-group">
	<label for="Semestre"> Semestre </label>
	<input type="text" class="form-control" value="{{isset($materia->Semestre)?$materia->Semestre:''}}" name="Semestre" id="Semestre">
</div>
<div class="form-group">
	<label for="Docente"> Docente </label>
	<input type="text" class="form-control" value="{{isset($materia->Docente)?$materia->Docente:''}}" name="Docente" id="Docente">
</div>
<div class="form-group">
    <input type="submit" value="{{$modo}} datos">
    <a href="{{url('materia/')}}"> Regresar </a>
</div>