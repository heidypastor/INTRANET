@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'indicators'])

@section('content')
	{{-- @method('GET') --}}

	<div class="card-header text-center">
	  <h4 class="card-title">INDICADORES</h4>
	</div>

	@php
	$userid = Auth::user()->id;
	@endphp

	@if(auth()->user()->can('editIndicator') && $indicator->user_id === $userid)
		<div class="text-left">
		  <form action="{{ route('indicators.destroy', $indicator) }}" method="POST" class="pull-right">
		    @method('DELETE')
		    @csrf 
		      <button type="submit" class="far fa-trash btn btn-danger"> Eliminar</button>
		  </form>
		</div>

		<div class="text-right">
			<a href="{{$indicator->id}}/edit" class="btn btn-fill btn-success far fa-edit"> Editar</a> 
		</div>
	@else
		@hasrole('Super Admin')
			<div class="text-left">
			  <form action="{{ route('indicators.destroy', $indicator) }}" method="POST" class="pull-right">
			    @method('DELETE')
			    @csrf 
			      <button type="submit" class="fas fa-backspace btn btn-danger"> Eliminar</button>
			  </form>
			</div> 

			<div class="text-right">
				<a href="{{$indicator->id}}/edit" class="btn btn-fill btn-success far fa-edit"> Editar</a>
			</div>
		@else
			<div class="text-left">
			  <form action="{{ route('indicators.destroy', $indicator) }}" method="POST" class="pull-right">
			    @method('DELETE')
			    @csrf 
			      <button type="submit" class="btn btn-default sw-btn-prev disabled"> Eliminar</button>
			  </form>
			</div>

			<div class="text-right">
				<button class="btn btn-default sw-btn-prev disabled" type="button">Editar</button>
			</div>
		@endhasrole
	@endif	

	<div class="card-body">
	  <div class="table-responsive table-upgrade">
	  	<div style="background: #e7e7e7; border-radius: 5%; margin: 1em 1em 1em 1em">
		    <table class="table">
				<thead>
					<th></th>
					<th class="text-center">    </th>
					<th class="text-center">{{$indicator->IndName}}</th>
				</thead>
				<tbody>
		      	<tr>
		      		<td></td>
		      		<th class="text-center">Área a la cual pertenece</th>
		      		<td class="text-center">
		      	  		<li class="list-group-item"  style="background: #e7e7e7;">
		      	  			{{$area->AreaName}}
		      	  		</li>
		      	  	</td>
		      	</tr>
		      	<tr>
		      		<td></td>
		      		<th class="text-center">Objetivo</th>
		      		<td class="text-center"><p> {{$indicator->IndObjective}} </p></td>
		      	</tr>
				<tr>
						<td></td>
					<th class="text-center">¿Que Mide?</th>
					<td class="text-center"><p> {{$indicator->IndQueMide}} </p></td>
				</tr>
				<tr>
						<td></td>
					<th class="text-center">Fecha de Evaluación</th>
					<td class="text-center"><p><strong>Desde</strong> {{$indicator->IndDateFrom}}</p>  <p><strong>Hasta</strong> {{$indicator->IndDateUntil}} </p></td>
				</tr>
				<tr>
					<td></td>
					<th class="text-center">Grafica</th>
					<td class="text-center"><div class="col-md-12 text-center"><a href="{{Storage::url($indicator->IndGraphic)}}"><img style="width: 20em; height: 15em; margin: 1.5em 1.5em 1.5em 1.5em; width: 40em; height: 20em;" src="{{Storage::url($indicator->IndGraphic)}}"></a></div></td>
				</tr>
				<tr>
					<td></td>
					<th class="text-center">Tabla</th>
					<td class="text-center"><a href="{{Storage::url($indicator->IndTable)}}"><strong>Archivo</strong></a></td>
				</tr>
				<tr>
					<td></td>
					<th class="text-center">Analisis</th>
					<td class="text-center"><p>{{$indicator->IndAnalysis}}</p></td>
				</tr>
		      </tbody>
		    </table>
		</div>
	  </div>
	</div>
@endsection