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
				<button type="button" class="btn btn-danger fas fa-trash" data-toggle="modal" data-target="#eliminar{{$document->id}}">
				  Eliminar
				</button>
				@component('layouts.partials.modal')
					@slot('id')
						{{$document->id}}
					@endslot
					@slot('textModal')
						{{$document->DocName}}
					@endslot
					@slot('botonModal')
						<form id="eliminardocument" action="{{ route('documents.destroy', $document) }}" method="POST" class="pull-right">
							@method('DELETE')
							@csrf
							<button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
						</form>
					@endslot
				@endcomponent
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

					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Versión</b>" data-content="Ingresar la versión a la cual corresponde el documento."><i class="far fa-question-circle"></i> Versión</label>

					<input name="DocVersion" type="text" placeholder="{{$document->DocVersion}}" id="DocVersion" class="text-center form-control" required="" value="{{$document->DocVersion}}">
				</div>
				<div class="form-group">

					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tipo de documento</b>" data-content="Ingresa la categoria a la cual pertenece dicho documento."><i class="far fa-question-circle"></i> Tipo de documento</label>

					<select class="text-center form-control" name="DocType" id="DocType" required>
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

					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Publicado o borrador</b>" data-content="Ingresar si el documento es provicional o puede ser público."><i class="far fa-question-circle"></i> Publicado o borrador</label>
				
					<select class="text-center form-control" placeholder="{{$document->DocPublisher}}" required="" name="DocPublisher" id="DocPublisher">
						<option {{$document->DocPublisher == 0 ? 'selected' : ''}} value="0">Borrador</option>
						<option {{$document->DocPublisher == 1 ? 'selected' : ''}} value="1">Publico</option>
					</select>
				</div>
				<div class="form-group">

					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>General o Restringido</b>" data-content="Ingresar si el documento es general o restringido para las áreas involucradas."><i class="far fa-question-circle"></i> General o Restringido</label>

					<select class="text-center form-control" placeholder="{{$document->DocGeneral}}" required="" name="DocGeneral" id="DocGeneral">
						<option {{$document->DocGeneral == 0 ? 'selected' : ''}} value="0">Restringido</option>
						<option {{$document->DocGeneral == 1 ? 'selected' : ''}} value="1">General</option>
					</select>
				</div>
				<div class="form-group">

					<label class="form-control-label" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Áreas a la que pertenece el documento</b>" data-content="Ingresar las áreas a las cuales pertenece el documento y en caso de que este sea restringido, solo los usuarios pertenecientes a dicha área tendran permitido visualizar el documento."><i class="far fa-question-circle"></i> Áreas a la que pertenece el documento</label>

					<select multiple name="areas[]" id="input-area" class="form-control form-control-alternative" placeholder="{{ __('Selecciona las áreas a las que pertenece')}}" value="{{ old('areas[]') }}">
						@foreach($areas as $area)
							<option 
							@foreach($document->areas as $areaSelect)
							@if($areaSelect->id == $area->id)
							selected
							@endif
							@endforeach
							value="{{$area->id}}">{{$area->AreaName}}</option>
						@endforeach
					</select>
				</div>
				<button type="submit" class="btn btn-fill btn-success fas fa-arrow-circle-up"> Actualizar</button>
			</form>
		</div>
	</div>
@endsection
