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
			<div class="text-right">
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
			<form role="form" method="POST" action="{{ route('alerts.update', $alert) }}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div>
				  <h3 class="card-title">Editar Alerta</h3>
				</div>
				<div class="form-group">
				  <label>Nombre de la alerta</label>
				  <input name="AlertName" type="text" id="AlertName" class="text-center form-control" value="{{$alert->AlertName}}">
				</div>
				<div class="form-group">
					<label>Fecha Evento</label>
					<input name="AlertDateEvent" type="date" id="AlertDateEvent" class="text-center form-control" value="{{$alert->AlertDateEvent}}">
				</div>
				<div class="form-group">
				    <label>Descripción</label>
					<input name="AlertDescription" type="text" id="AlertDescription" class="text-center form-control" value="{{$alert->AlertDescription}}">
				</div>
				<div class="form-group">
				    <label>Fecha de Notificación</label>
					<input type="date" name="AlertDateNotifi" id="AlertDateNotifi" class="text-center form-control" value="{{$alert->AlertDateNotifi}}">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-success fas fa-arrow-circle-up"> Actualizar</button>
				</div>
			</form>
		</div>
	</div>
@endsection