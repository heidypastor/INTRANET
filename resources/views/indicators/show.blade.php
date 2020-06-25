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
			<div class="row mt-4">
				<div class="col-md-12 text-responsive">
				<p class="text-center negrilla">{{$indicator->IndName}} - 
					@switch($indicator->IndEfe)
						@case('0')
							{{'Eficacia'}}
							@break
						@case('1')
							{{'Eficiencia'}}
							@break
						@case('2')
							{{'Efectividad'}}
							@break
						@default
					@endswitch
				</p>
				</div>
			</div>
			<div class="row my-3 justify-content-center">
					@if($indicator->IndGraphic === "")
						<a target="_blank" href="/white/img/graficos1.jpg"> <img src="/white/img/graficos1.jpg" class="responsive"></a>
					@else
						<a target="_blank" href="{{Storage::url($indicator->IndGraphic)}}"> <img src="{{Storage::url($indicator->IndGraphic)}}" class="responsive"></a>
					@endif
			</div>
			<div class="row my-3 justify-content-center">
					@if($indicator->IndAnalysis === "")
						<a target="_blank" href="/white/img/graficos1.jpg"> <img src="/white/img/graficos1.jpg" class="responsive"></a>
					@else
						<a target="_blank" href="{{Storage::url($indicator->IndAnalysis)}}"> <img src="{{Storage::url($indicator->IndAnalysis)}}" class="responsive"></a>
					@endif
			</div>
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Área</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<li class="list-group-item"  style="background: #d2ffce;">
		      	  			{{$area->AreaName}}
		      	  		</li>
					</div>
				</div>
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Objetivo</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						@switch($indicator->IndObjective)
							@case(1)
							<p>Implementar actividades de promoción y prevención en salud, dirigidas a nuestros trabajadores y de seguridad para nuestros colaboradores, contratistas y visitantes con el fin de prevenir accidentes y enfermedades laborales. </p>
								@break
							@case(2)
							<p>Garantizar que los servicios de recolección, transporte, manejo, tratamiento, incineración y destrucción de toda clase de desechos y residuos sean oportunos, adecuados y seguro, previniendo la contaminación y la disminuyendo los impactos que se puedan generar a los recursos naturales </p>
								@break
							@case(3)
							<p>Cumplir con los estándares de calidad en la prestación del servicio a nuestros clientes, optimizando y mejorando continuamente en los procesos y procedimientos establecidos en la Empresa, llegando a los estándares de eficiencia, eficacia, efectividad, cumpliendo siempre con la legislación Ambiental Colombiana y los requerimientos de nuestros Clientes. </p>
								@break
							@default
						@endswitch
					</div>
				</div>
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Descripción</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$indicator->IndDescripcion}}</p>
					</div>
				</div>
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Frecuencia</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$indicator->IndFrecuencia}}</p>
					</div>
				</div>
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Meta</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$indicator->IndMeta}}</p>
					</div>
				</div>
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">Formula</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$indicator->IndFormula}}</p>
					</div>
				</div>
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla">N° de ficha</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$indicator->IndFicha}}</p>
					</div>
				</div>
				<div class="row mx-auto">
					<div class="col-md-3 recuadro mx-auto">
						<h4 class="text-center negrilla" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tabla</b>" data-content="Archivo que contiene la información correspondiente a la grafica."><i class="far fa-question-circle"></i> Archivo</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						@if($indicator->IndTable === "")
						    <p><a href="/white/img/test.pdf"><strong>Archivo</strong></a></p>
						@else
							<p><a href="{{Storage::url($indicator->IndTable)}}"><strong>Archivo</strong></a></p>
						@endif
					</div>
				</div>
			<br>
		</div>
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12 text-center">
						@php
						$userid = Auth::user()->id;
						@endphp

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
							@if(auth()->user()->can('updateIndicators') && $indicator->user_id === $userid)
								<div class="row">
									<div class="col-md-6 col-sm-12 text-center">
										<form action="{{ route('indicators.destroy', $indicator) }}" method="POST">
											@method('DELETE')
											@csrf 
											<button type="submit" class="btn btn-default sw-btn-prev disabled"> Eliminar</button>
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
							@endif
						@endhasrole
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection