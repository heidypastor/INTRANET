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
				{{-- <div class="custom-input-file">
					<label>Archivo</label>
					<input type="file" name="DocSrc" id="DocSrc" class="custom-input-file">
				</div> --}}
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Versión</b>" data-content="Ingresar la versión a la cual corresponde el documento."><i class="far fa-question-circle"></i> Versión</label>
					<input name="DocVersion" type="text" placeholder="" id="DocVersion" class="text-center form-control" required="">
				</div>


				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Código</b>" data-content="Ingresar el código referencia la cual corresponde el documento."><i class="far fa-question-circle"></i> Código</label>
					<input name="DocCodigo" type="text" placeholder="" id="DocCodigo" class="text-center form-control" required="">
				</div>


				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tipo de documento</b>" data-content="Ingresa la categoria a la cual pertenece dicho documento."><i class="far fa-question-circle"></i> Tipo de documento</label>
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
				    
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Publicado o borrador</b>" data-content="Ingresar si el documento es provicional o puede ser público."><i class="far fa-question-circle"></i> Publicado o borrador</label>
					<select class="text-center form-control" required="" name="DocPublisher" id="DocPublisher">
						<option value="0">Borrador</option>
						<option value="1">Publicado</option>
					</select>
				</div>
				<div class="form-group">

					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>General o Restringido</b>" data-content="Ingresar si el documento es general o restringido para las áreas involucradas."><i class="far fa-question-circle"></i> General o Restringido</label>
					
					<select class="text-center form-control" required="" name="DocGeneral" id="DocGeneral" onchange="clasificacion()">
						<option value="1">General</option>
						<option value="0">Restringido</option>
					</select>
				</div>
				
				<div class="form-group" id="div-contenedor">
					
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div>
@endsection
@push('scripts')
<script type="text/javascript">
	function clasificacion(){
		var clasificacion = $('#DocGeneral').val();
		if (clasificacion == 1) {
			$('#div-contenedor').empty();
		}else{
			$('#div-contenedor').empty();
			$('#div-contenedor').append(`
				<label class="form-control-label" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Áreas a la que pertenece el documento</b>" data-content="Ingresar las áreas a las cuales pertenece el documento y en caso de que este sea restringido, solo los usuarios pertenecientes a dicha área tendran permitido visualizar el documento."><i class="far fa-question-circle"></i> Áreas a la que pertenece el documento</label>

				<select multiple name="areas[]" id="input-area" class="form-control form-control-alternative" placeholder="{{ __('Selecciona las áreas a las que pertenece')}}" value="{{ old('areas[]') }}"  required>
					@foreach($areas as $area)
					<option value="{{$area->id}}">{{$area->AreaName}}</option>
					@endforeach
				</select>
			`);
		}
	}
</script>
@endpush