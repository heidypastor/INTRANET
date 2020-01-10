@extends('layouts.app', ['page' => __('Documentos'), 'pageSlug' => 'documents'])

@section('content')
	<div class="card-body">
		<div class="text-right">
			<form id="eliminardocument" action="/documents/{{$document->id}}" method="POST" class="pull-right">
				@method('DELETE')
				@csrf
		  		<button type="submit" class="btn btn-danger">Eliminar</button>
		  	</form>
	  	</div>

		<form id="formudeediciondocu" role="form" method="POST" action="{{-- documents/{{$Documents->id}} --}}" enctype="multipart/form-data">
		{{-- @endforeach --}}
			@csrf
			@method('PUT')

			<div>
			  <h3 class="card-title">Editar Documento</h3>
			</div>
			<div class="form-group">
			  <label>Nombre del documento</label>
			  <input name="DocName" type="text" placeholder="{{$document->DocName}}" id="DocName" class="text-center form-control">
			</div>
			<div class="box-body">
				<div class="form-group">
			        <label>Archivo</label>
					<input name="DocSrc" type="File" id="DocSrc" class="form-control">
					<input type="" placeholder="{{$document->DocSrc}}" class="form-control text-center" name="Adjuntar" placeholder="Adjuntar archivo"></input>
				</div>	
			</div>
			<div class="form-group">
			    <label>Versión</label>
				<input name="DocVersion" type="text" placeholder="{{$document->DocVersion}}" id="DocVersion" class="text-center form-control">
			</div>
			<div class="form-group">
			    <label>Tipo de documento</label>
				<select class="text-center form-control" name="DocType" id="DocType" placeholder="{{$document->DocType}}">
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
			    <label>Público o borrador</label>
				<select class="text-center form-control" placeholder="{{$document->DocPublisher}}" name="DocPublisher" id="DocPublisher">
					<option value="0">Borrador</option>
					<option value="1">Publico</option>
				</select>
			</div>
			<div class="form-group">
			    <label>General o Restringido</label>
				<select class="text-center form-control" placeholder="{{$document->DocGeneral}}" name="DocGeneral" id="DocGeneral">
					<option value="0">Restringido</option>
					<option value="1">General</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-fill btn-warning">Actualizar</button>
			</div>
		</form>
	</div>

@endsection