@extends('layouts.app', ['page' => __('Alertas'), 'pageSlug' => 'alerts'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Alertas
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			@include('alerts.danger')
			<form role="form" method="POST" action="{{ route('alerts.update', $alert) }}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="row">
					<div class="col-md-10">
					  <h3 class="card-title">Editar Alerta</h3>
					</div>
					<div class="col-md-2">
					  <button type="button" class="btn btn-danger fas fa-trash" data-toggle="modal" data-target="#eliminar{{$alert->id}}">
					    Eliminar
					  </button>
					  @component('layouts.partials.modal')
					  	@slot('id')
					  		{{$alert->id}}
					  	@endslot
					  	@slot('textModal')
					  		{{$alert->AlertName}}
					  	@endslot
					  	@slot('botonModal')
					  		<form id="eliminaralert" action="{{ route('alerts.destroy', $alert) }}" method="POST" class="pull-right">
					  			@method('DELETE')
					  			@csrf
					  			<button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
					  		</form>
					  	@endslot
					  @endcomponent
					</div>
				</div>
				<div class="form-group">
				  <label>Nombre de la alerta</label>
				  <input name="AlertName" type="text" id="AlertName" class="text-center form-control" value="{{$alert->AlertName}}">
				</div>
				<div class="form-group">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Fecha Evento</b>" data-content="Fecha en la cual se realiza el 'evento'."><i class="far fa-question-circle"></i> Fecha Evento</label>
					<input name="AlertDateEvent" type="date" id="AlertDateEvent" class="text-center form-control" value="{{date_format($alert->AlertDateEvent, 'Y-m-d')}}" min="{{date('Y-m-d', strtotime(today()))}}" placeholder="{{$alert->AlertDateEvent}}">
				</div>
				<div class="form-group">
				    <label>Descripción</label>
					<input name="AlertDescription" type="text" id="AlertDescription" class="text-center form-control" value="{{$alert->AlertDescription}}">
				</div>
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Fecha de Notificación</b>" data-content="Fecha en la cual se iniciaran las notificaciones de alerta."><i class="far fa-question-circle"></i> Fecha de Notificación</label>
					<input type="date" name="AlertDateNotifi" id="AlertDateNotifi" class="text-center form-control" value="{{date_format($alert->AlertDateNotifi, 'Y-m-d')}}" min="{{date('Y-m-d', strtotime(today()))}}">
				</div>
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tipo de alerta</b>" data-content="Ingresar el tipo de alerta, puede ser de tipo: <br><ul><li> Global <li>Sede <li>Área <li>Personal <ul>"><i class="far fa-question-circle"></i> Tipo de alerta</label>
					<select class="text-center form-control" required="" name="AlertType" id="AlertType">
						<option {{ $alert->AlertType === "Global" ? "selected" : "" }} value="Global">Global</option>
						<option {{ $alert->AlertType === "Sede" ? "selected" : "" }} value="Sede">Sede</option>
						<option {{ $alert->AlertType === "Area" ? "selected" : "" }} value="Area">Área</option>
						<option {{ $alert->AlertType === "Personal" ? "selected" : "" }} value="Personal">Personal</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-success fas fa-arrow-circle-up"> Actualizar</button>
				</div>
			</form>
		</div>
	</div>
@endsection