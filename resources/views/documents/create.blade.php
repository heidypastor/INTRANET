@extends('layouts.app', ['page' => __('Documentos'), 'pageSlug' => 'documents'])

@section('content')

	<div class="card-body">
		<form role="form" method="POST" action="{{ route('documents.store') }}" enctype="multipart/form-data">

			@csrf

			<div class="box-body">
			  <h3 class="card-title">Nuevo Documento </h3>
			</div>
			<div class="box-body form-group">
			  <label>Nombre del documento</label>
			</div>
			<div class="box-body form-group">
			  <input name="DocName" type="text" placeholder="" id="DocName" class="text-center form-control" required="">
			</div>
			<div class="box-body form-group">
			  <label>Archivo</label>
			</div>
			<div class="box-body" style="background: #00ffd8">
				<div class="box-body form-group">
					<input name="DocSrc" type="File" id="DocSrc" class="form-control" required="true">
				</div>	
			</div>
			<div class="box-body form-group">
			  <label>Versión</label>
			</div>
			<div class="box-body form-group">
				<input name="DocVersion" type="text" placeholder="" id="DocVersion" class="text-center form-control" required="">
			</div>
			<div class="box-body form-group">
			  <label>Tipo de documento</label>
			</div>
			<div class="box-body form-group">
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
			<div class="box-body form-group">
			  <label>Publico o borrador</label>
			</div>
			<div class="box-body form-group">
				<select class="text-center form-control" required="" name="DocPublisher" id="DocPublisher">
					<option value="0">Borrador</option>
					<option value="1">Publico</option>
				</select>
			</div>
			<div class="box-body form-group">
				<button type="submit" class="btn btn-fill btn-success">Crear</button>
			</div>
		</form>
	</div>
@endsection