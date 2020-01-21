@extends('layouts.app', ['page' => __('Documentos'), 'pageSlug' => 'documents'])

@section('content')

	<div class="card-body">
		<form role="form" method="POST" action="{{ route('documents.store') }}" enctype="multipart/form-data">

			@csrf

			<div>
			  <h3 class="card-title">Nuevo Documento </h3>
			</div>
			<div class="form-group">
			  <label>Nombre del documento</label>
			  <input name="DocName" type="text" placeholder="" id="DocName" class="text-center form-control" required="">
			</div>
			<div class="custom-input-file">
				<label>Archivo</label>
				<input name="DocSrc" type="file" id="DocSrc">
			</div>
			<div class="form-group">
			    <label>Versión</label>
				<input name="DocVersion" type="text" placeholder="" id="DocVersion" class="text-center form-control" required="">
			</div>
			<div class="form-group">
			    <label>Tipo de documento</label>
				<select class="text-center form-control" required="" name="DocType" id="DocType">
					<option value="Manuales">Manuales</option>
					<option value="Procedimientos">Procedimientos</option>
					<option value="Instructivos">Instructivos</option>
					<option value="NormasDeTrabajo">Normas De Trabajo</option>
					<option value="Formatos">Formatos</option>
					<option value="Politicas">Politicas</option>
					<option value="Reglamentos">Reglamentos</option>
				</select>
			</div>
			<div class="form-group">
			    <label>Publicado o borrador</label>
				<select class="text-center form-control" required="" name="DocPublisher" id="DocPublisher">
					<option value="0">Borrador</option>
					<option value="1">Publicado</option>
				</select>
			</div>
			<div class="form-group">
				<label>General o Restringido</label>
				<select class="text-center form-control" required="" name="DocGeneral" id="DocGeneral">
					<option value="0">Restringido</option>
					<option value="1">General</option>
				</select>
			</div>

			<div class="form-group">
				<label class="form-control-label">Áreas a la que pertenece el documento</label>
				<select multiple name="areas[]" id="input-area" class="form-control form-control-alternative" placeholder="{{ __('Selecciona las áreas a las que pertenece')}}" value="{{ old('areas[]') }}"  required>
					@foreach($areas as $area)
					<option value="{{$area->id}}">{{$area->AreaName}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-fill btn-success">Crear</button>
			</div>
		</form>
	</div>
@endsection