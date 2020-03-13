@extends('layouts.app', ['page' => __('Alertas'), 'pageSlug' => 'alerts'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Alertas
@endsection

@section('content')
	<div class="card">
		<div class="card-body" id="createAlert">
			@include('alerts.danger')
			<form role="form" method="POST" action="{{ route('alerts.store') }}" enctype="multipart/form-data">
				@csrf
				<div>
				  <h3 class="card-title">Nueva Alerta</h3>
				</div>
				<div class="form-group">
				  <label>Nombre de la alerta</label>
				  <input name="AlertName" type="text" id="AlertName" class="text-center form-control" required="" value="{{ old('AlertName') }}">
				</div>
				<div class="form-group">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Fecha Evento</b>" data-content="Fecha en la cual se realiza el 'evento'."><i class="far fa-question-circle"></i> Fecha Evento</label>
					<input name="AlertDateEvent" type="date" id="AlertDateEvent" class="text-center form-control AlertDateEvent" min="{{date('Y-m-d', strtotime(today()))}}" value="{{ old('AlertDateEvent') }}" required="">
				</div>
				<div class="form-group">
				    <label>Descripción</label>
					<input name="AlertDescription" type="text" id="AlertDescription" class="text-center form-control" required="" value="{{ old('AlertDescription') }}">
				</div>
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Fecha de Notificación</b>" data-content="Fecha en la cual se iniciaran las notificaciones de alerta."><i class="far fa-question-circle"></i> Fecha de Notificación</label>
					<input type="date" name="AlertDateNotifi" id="AlertDateNotifi" class="text-center form-control" min="{{date('Y-m-d', strtotime(today()))}}" required="" value="{{ old('AlertDateNotifi') }}">
				</div>
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tipo de alerta</b>" data-content="Ingresar el tipo de alerta, puede ser de tipo: <br><ul><li> Global <li>Sede <li>Área <li>Personal <ul>"><i class="far fa-question-circle"></i> Tipo de alerta</label>
					<select class="text-center form-control" required="" name="AlertType" id="AlertType">
						<option value="Global">Global</option>
						<option value="Sede">Sede</option>
						<option value="Area">Área</option>
						<option value="Personal">Personal</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div>
@endsection