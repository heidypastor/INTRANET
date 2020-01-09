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

			<div class="box-body">
			  <h3 class="card-title">Editar Documento</h3>
			</div>
			<div class="box-body form-group">
			  <label>Nombre del documento</label>
			</div>
			<div class="box-body form-group">
			  <input name="DocName" type="text" placeholder="{{$document->DocName}}" id="DocName" class="text-center form-control" required="">
			</div>
			<div class="box-body form-group">
			  <label>Archivo</label>
			</div>
			<div class="box-body">
				<div class="box-body form-group">
					<input name="DocSrc" type="File" id="DocSrc" class="form-control" required="true">
					<input type="" placeholder="{{$document->DocSrc}}" class="form-control text-center" name="Adjuntar" placeholder="Adjuntar archivo"></input>
				</div>	
			</div>
			{{-- <div class="box-body form-group">
			</div> --}}
			<div class="box-body form-group">
			  <label>Versión</label>
			</div>
			<div class="box-body form-group">
				<input name="DocVersion" type="text" placeholder="{{$document->DocVersion}}" id="DocVersion" class="text-center form-control" required="">
			</div>
			<div class="box-body form-group">
			  <label>Tipo de documento</label>
			</div>
			<div class="box-body form-group">
				<select class="text-center form-control" required="" name="DocType" id="DocType" placeholder="{{$document->DocType}}">
					<option value="Manuales">Manuales</option>
					<option value="Procedimientos">Procedimientos</option>
					<option value="Instructivos">Instructivos</option>
					<option value="NormasDeTrabajo">Normas De Trabajo</option>
					<option value="Formatos">Formatos</option>
					<option value="Politicas">Politicas</option>
					<option value="Reglamentos">Reglamentos</option>
				</select>
			</div>
			<div class="box-body form-group">
			  <label>Público o borrador</label>
			</div>
			<div class="box-body form-group">
				<select class="text-center form-control" placeholder="{{$document->DocPublisher}}" required="" name="DocPublisher" id="DocPublisher">
					<option value="0">Borrador</option>
					<option value="1">Publico</option>
				</select>
			</div>
			<div class="box-body form-group">
			  <label>General o Restringido</label>
			</div>
			<div class="box-body form-group">
				<select class="text-center form-control" placeholder="{{$document->DocGeneral}}" required="" name="DocGeneral" id="DocGeneral">
					<option value="0">Restringido</option>
					<option value="1">General</option>
				</select>
			</div>
			<div class="box-body form-group">
				<button type="submit" class="btn btn-fill btn-warning">Actualizar</button>
			</div>
		</form>
	</div>

@endsection