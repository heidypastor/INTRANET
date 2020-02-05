@extends('layouts.app', ['page' => __('Alertas'), 'pageSlug' => 'alerts'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Alertas
@endsection

@section('content')
	<div class="card">
		<div class="card-title text-center">
			<br>
			<h2>Alertas Tempranas</h2>
		</div>
		<div class="float-right">
			<a href="{{ route('alerts.create') }}" class="fas fa-plus btn btn-fill btn-success" style="margin: 0em 0em 0em 2em;"> Crear</a>
		</div>
        @include('alerts.success')
		<div class="card-body">
		  <div class="table-responsive table-upgrade">
		    <table class="table">
		      <thead>
		        <th class="text-center">Fecha Evento</th>
		        <th class="text-center">Nombre</th>
		        <th class="text-center">Descripción</th>
		        <th class="text-center">Fecha Notificación</th>
		        <th class="text-center">Notificado</th>
		        <th class="text-center">Editar</th>
		      </thead>
		      <tbody>
		      	@foreach($alerts as $alert)
		      		@if($alert->user_id === Auth::user()->id)
			          <tr>
			            <td class="text-center">{{$alert->AlertDateEvent}}</td>
			            <td class="text-center">{{$alert->AlertName}}</td>
			            <td class="text-center">{{$alert->AlertDescription}}</td>
			            <td class="text-center">{{$alert->AlertDateNotifi}}</td>
			            <td class="text-center">
			            	@if($alert->AlertNotification == 0)
			            		<p>Sin Notificar</p>
			            	@else
			            		<p>Notificado</p>
			            	@endif
			            </td>
			            <td class="text-center"><a href="alerts/{{$alert->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a></td>
			          </tr>
			        @endif
		        @endforeach
		      </tbody>
		    </table>
		  </div>
		</div>
	</div>
@endsection