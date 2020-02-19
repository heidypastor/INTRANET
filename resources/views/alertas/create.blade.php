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
			<form role="form" method="POST" action="{{ route('alerts.store') }}" enctype="multipart/form-data">
				@csrf
				<div>
				  <h3 class="card-title">Nueva Alerta</h3>
				</div>
				<div class="form-group">
				  <label>Nombre de la alerta</label>
				  <input name="AlertName" type="text" id="AlertName" class="text-center form-control" required="">
				</div>
				<div class="form-group">
					<label>Fecha Evento</label>
					<input name="AlertDateEvent" type="date" id="AlertDateEvent" class="text-center form-control AlertDateEvent" required="">
				</div>
				<div class="form-group">
				    <label>Descripción</label>
					<input name="AlertDescription" type="text" id="AlertDescription" class="text-center form-control" required="">
				</div>
				<div class="form-group">
				    <label>Fecha de Notificación</label>
					<input type="date" name="AlertDateNotifi" id="AlertDateNotifi" class="text-center form-control">
				</div>
				<div class="form-group">
				    <label>Tipo de alerta</label>
					<select class="text-center form-control" required="" name="AlertType" id="AlertType">
						<option value="Global">Global</option>
						<option value="Sede">Sede</option>
						<option value="Area">Área</option>
						<option value="Personal">Personal</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-success fas fa-plus"> Crear</button>
				</div>
			</form>
		</div>
	</div>
@endsection