<div class="form-group">
	<label for="CI"> CI </label>
	<input type="text" class="form-control" value="{{isset($estudiante->CI)?$estudiante->CI:''}}" name="CI" id="CI">
</div>
<div class="form-group">
	<label for="Nombre"> Nombre </label>
	<input type="text" class="form-control" value="{{isset($estudiante->Nombre)?$estudiante->Nombre:''}}" name="Nombre" id="Nombre">
</div>
<div class="form-group">
	<label for="ApellidoPaterno"> Apellido Paterno </label>
	<input type="text" class="form-control" value="{{isset($estudiante->ApellidoPaterno)?$estudiante->ApellidoPaterno:''}}" name="ApellidoPaterno" id="ApellidoPaterno">
</div>
<div class="form-group">
	<label for="ApellidoMaterno"> Apellido Materno </label>
	<input type="text" class="form-control" value="{{isset($estudiante->ApellidoMaterno)?$estudiante->ApellidoMaterno:''}}" name="ApellidoMaterno" id="ApellidoMaterno">
</div>
<div class="form-group">
	<label for="FechaNac"> Fecha de Nacimiento </label>
	<input type="date" class="form-control" value="{{isset($estudiante->FechaNac)?$estudiante->FechaNac:''}}" name="FechaNac" id="FechaNac">
</div>
<div class="form-group">
	<label for="Carrera"> Carrera </label>
	<input type="text" class="form-control" value="{{isset($estudiante->Carrera)?$estudiante->Carrera:''}}" name="Carrera" id="Carrera">
</div>
<div class="form-group">
	<label for="Semestre"> Semestre </label>
	<input type="text" class="form-control" value="{{isset($estudiante->Semestre)?$estudiante->Semestre:''}}" name="Semestre" id="Semestre">
</div>
<div class="form-group">
	<label for="Materias"> Materias </label>
	<input type="text" class="form-control" value="{{isset($estudiante->Materias)?$estudiante->Materias:''}}" name="Materias" id="Materias">
</div>
<div>
    <input type="submit" class="btn btn-success" value="{{$modo}} datos">
    <a href="{{url('estudiante/')}}" class="btn btn-primary"> Regresar </a>
</div>