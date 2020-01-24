@extends('layouts.app', ['page' => __('Documentos'), 'pageSlug' => 'documents'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Documentos
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<div class="text-right">
				<form id="eliminardocument" action="{{ route('documents.destroy', $document) }}" method="POST" class="pull-right">
					@method('DELETE')
					@csrf
					<button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
				</form>
			</div>
			<form id="formudeediciondocu" role="form" method="POST" action="{{ route('documents.update', $document) }}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
				<div class="box-body">
					<h3 class="card-title">Editar Documento</h3>
				</div>
				<div class="form-group">
					<label class="col-form-label">Nombre del documento</label>
					<input name="DocName" type="text" placeholder="{{$document->DocName}}" id="DocName" class="text-center form-control" required="" value="{{$document->DocName}}">
				</div>
				<div class="custom-input-file">
					<label>Archivo</label>
					<input name="DocSrc" type="file" id="DocSrc">
				</div>
				<div class="form-group">
					<label>Versión</label>
					<input name="DocVersion" type="text" placeholder="{{$document->DocVersion}}" id="DocVersion" class="text-center form-control" required="" value="{{$document->DocVersion}}">
				</div>
				<div class="form-group">
					<label>Tipo de documento</label>
					<select class="text-center form-control" required="" name="DocType" id="DocType" placeholder="{{$document->DocType}}">
						<option {{$document->DocType == 'Manuales' ? 'selected' : ''}} value="Manuales">Manuales</option>
						<option {{$document->DocType == 'Procedimientos' ? 'selected' : ''}} value="Procedimientos">Procedimientos</option>
						<option {{$document->DocType == 'Instructivos' ? 'selected' : ''}} value="Instructivos">Instructivos</option>
						<option {{$document->DocType == 'NormasDeTrabajo' ? 'selected' : ''}} value="NormasDeTrabajo">Normas De Trabajo</option>
						<option {{$document->DocType == 'Formatos' ? 'selected' : ''}} value="Formatos">Formatos</option>
						<option {{$document->DocType == 'Politicas' ? 'selected' : ''}} value="Politicas">Politicas</option>
						<option {{$document->DocType == 'Reglamentos' ? 'selected' : ''}} value="Reglamentos">Reglamentos</option>
					</select>
				</div>
				<div class="form-group">
					<label>Público o borrador</label>
					<select class="text-center form-control" placeholder="{{$document->DocPublisher}}" required="" name="DocPublisher" id="DocPublisher">
						<option {{$document->DocPublisher == 0 ? 'selected' : ''}} value="0">Borrador</option>
						<option {{$document->DocPublisher == 1 ? 'selected' : ''}} value="1">Publico</option>
					</select>
				</div>
				<div class="form-group">
					<label>General o Restringido</label>
					<select class="text-center form-control" placeholder="{{$document->DocGeneral}}" required="" name="DocGeneral" id="DocGeneral">
						<option {{$document->DocGeneral == 0 ? 'selected' : ''}} value="0">Restringido</option>
						<option {{$document->DocGeneral == 1 ? 'selected' : ''}} value="1">General</option>
					</select>
				</div>

				<div class="form-group">
					<label class="form-control-label">Área a la que pertenece dicho documento</label>
					<select multiple name="areas[]" id="input-area" class="form-control form-control-alternative" placeholder="{{ __('Selecciona las áreas a las que pertenece')}}" value="{{ old('areas[]') }}" required>
						@foreach($areas as $area)
						<option value="{{$area->id}}">{{$area->AreaName}}</option>
						@endforeach
					</select>
				</div>
				<button type="submit" class="btn btn-fill btn-warning fas fa-arrow-circle-up"> Actualizar</button>
			</form>
		</div>
	</div>
@endsection
