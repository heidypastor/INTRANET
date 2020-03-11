@extends('layouts.app', ['page' => __('Cómites'), 'pageSlug' => 'comites'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comités
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<form role="form" method="POST" action="{{ route('comites.store') }}" enctype="multipart/form-data">

				@csrf

				<div>
				  <h3 class="card-title">Nuevo Cómite</h3>
				</div>
				<div class="form-group">
				  <label>Nombre del cómite</label>
				  <input name="ComiName" type="text" placeholder="Ej: COPASST" id="ComiName" class="text-center form-control" required="">
				</div>
				<div class="custom-input-file">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Imagen del cómite</b>" data-content="Insertar imagen de relación al cómite"><i class="far fa-question-circle"></i> Imagen del cómite</label>

					<input name="ComiSrc" type="file" id="ComiSrc" required="">
				</div>
				<div class="custom-input-file">

				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Foto del cómite</b>" data-content="Adjuntar foto de los integrantes del cómite."><i class="far fa-question-circle"></i>Foto del cómite</label>

					<input name="ComiImage" type="file" id="ComiImage" required="">
				</div>
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Función del cómite</b>" data-content="Objetivo y/o función principal del cómite."><i class="far fa-question-circle"></i> Función del cómite</label>

					<input type="text" name="ComiParaQueSirve" id="ComiParaQueSirve" class="text-center form-control">
				</div>
				<div class="form-group">
				    <label>Telefono de contacto</label>
					<input type="text" name="ComiTelefono" id="ComiTelefono" class="text-center form-control">
				</div>
				<div class="form-group">
					<label>Email de Contacto</label>
					<input type="text" name="ComiEmail" id="ComiEmail" class="text-center form-control">
				</div>
				<div class="form-group">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Observaciones</b>" data-content="Temas tratados en la ultima reúnion y observaciones generales."><i class="far fa-question-circle"></i> Observaciones</label>
					
					<input type="text" name="ComiObservations" id="ComiObservations" class="text-center form-control">
				</div>
				<div class="form-group">
					<label>Próxima fecha de reunión</label>
					<input type="date" name="ComiDateNext" id="ComiDateNext" class="text-center form-control">
				</div>
				<div class="form-group">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Integrantes</b>" data-content="Ingresar el nombre de los integrantes del cómite."><i class="far fa-question-circle"></i> Integrantes</label>

					<input type="text" name="ComiIntegrantes" id="ComiIntegrantes" class="text-center form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div>
@endsection