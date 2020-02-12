@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'indicators'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Indicadores
@endsection

@section('content')
	<div class="card">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-12">
					<br><br>
					<h3 class="card-title text-center"><strong>INDICADORES</strong></h3>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						@php
						$userid = Auth::user()->id;
						@endphp

						@if(auth()->user()->can('editIndicator') && $indicator->user_id === $userid)
							<div class="row">
								<div class="col-md-6 col-sm-12 text-center">
									<button type="button" class="btn btn-danger fas fa-trash" data-toggle="modal" data-target="#eliminar{{$indicator->id}}">
									  Eliminar
									</button>
									@component('layouts.partials.modal')
										@slot('id')
											{{$indicator->id}}
										@endslot
										@slot('textModal')
											{{$indicator->IndName}}
										@endslot
										@slot('botonModal')
											<form action="{{ route('indicators.destroy', $indicator) }}" method="POST">
											    @method('DELETE')
											    @csrf 
											    <button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
											</form>
										@endslot
									@endcomponent
								</div>
								<div class="col-md-6 col-sm-12 text-center">
									<a href="{{$indicator->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a><br><br><br>
								</div>
							</div>

						@else
							@hasrole('Super Admin')
								<div class="row">
									<div class="col-md-6 col-sm-12 text-center">
										<form action="{{ route('indicators.destroy', $indicator) }}" method="POST">
										    @method('DELETE')
										    @csrf 
										    <button type="submit" class="fas fa-backspace btn btn-danger"> Eliminar</button>
										</form>
									</div>
									<div class="col-md-6 col-sm-12 text-center">
										<a href="{{$indicator->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a><br><br><br>
									</div>
								</div>
							@else
								<div class="row">
									<div class="col-md-6 col-sm-12 text-center">
									  	<form action="{{ route('indicators.destroy', $indicator) }}" method="POST">
									    	@method('DELETE')
									    	@csrf 
									    	<button type="submit" class="btn btn-default sw-btn-prev disabled"> Eliminar</button>
										</form>
									</div>
									<div class="col-md-6 col-sm-12 text-center">
										<button class="btn btn-default sw-btn-prev disabled" type="button">Editar</button><br><br><br>
									</div>
								</div>
							@endhasrole
						@endif
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<h3 class="text-center negrilla">{{$indicator->IndName}}</h3>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Área a la cual pertenece</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<li class="list-group-item"  style="background: #d2ffce;">
		      	  			{{$area->AreaName}}
		      	  		</li>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Objetivo</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$indicator->IndObjective}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">¿Que Mide?</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$indicator->IndQueMide}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Fecha de Evaluación</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p><strong>Desde</strong> {{$indicator->IndDateFrom}}</p>  <p><strong>Hasta</strong> {{$indicator->IndDateUntil}} </p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Gráfica</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<a href="{{Storage::url($indicator->IndGraphic)}}">
							@if($indicator->IndGraphic !== 'graficos1.jpg' || $indicator->IndGraphic === 'Null')
							    <img src="{{Storage::url($indicator->IndGraphic)}}">
							@else
							    <img src="/white/img/graficos1.jpg">
							@endif
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Tabla</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						@if($indicator->IndTable == ' ' & $indicator->IndTable == 'Null')
						    <p><a href="/white/img/test.pdf"><strong>Archivo</strong></a></p>
						@else
							<p><a href="{{Storage::url($indicator->IndTable)}}"><strong>Archivo</strong></a></p>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Analisis</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$indicator->IndAnalysis}}</p>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>
@endsection