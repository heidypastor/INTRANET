@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])
@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection
@section('htmlheader_title')
Proceso de {{$proceso->ProcName}}
@endsection
@push('css')
{{--
<link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet" />
<link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet" /> --}}
@endpush
@section('content')
	<div class="col-md-12 card degradado-procesos">
		<div class="row">
			<div class="col-md-2">
				<a href="{{$proceso->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a>
			</div>
			<div class="col-md-8">
			</div>
			<div class="col-md-2">
				<button type="button" class="btn btn-danger fas fa-trash" data-toggle="modal" data-target="#eliminar{{$proceso->id}}">
				  Eliminar
				</button>
				@component('layouts.partials.modal')
					@slot('id')
						{{$proceso->id}}
					@endslot
					@slot('textModal')
						{{$proceso->ProcName}}
					@endslot
					@slot('botonModal')
						<form action="{{ route('proceso.destroy', $proceso) }}" method="POST">
						    @method('DELETE')
						    @csrf 
						    <button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
						</form>
					@endslot
				@endcomponent
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row color">
			<div class="col-md-3 margen" style="background-color:white;">
			<img src="{{asset('white/img/logo_nombre.png')}}" class="py-5">
			</div>
			<div class="col-md-5 text-center margen">
				<h4>CARACTERIZACIÓN DE PROCESO</h4><br>
				<h4>SISTEMA DE GESTIÓN INTEGRAL - HSEQ</h4>
			</div>
			<div class="col-md-4 text-center margen">
				<h4>FORMATO</h4><br>
				<div class="row">
					<div class="col-md-4 margen">
						<h4>HSEQ-04</h4>
					</div>
					<div class="col-md-4 margen">
						<h4>{{$proceso->ProcRevVersion}}</h4>
					</div>
					<div class="col-md-4 margen">
						<h4>{{$proceso->ProcDate}}</h4>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<br><br>
		</div>

		<div class="row">
			<div class="col-md-3 margen">
				{{-- <img src="{{Storage::url($proceso->ProcImage)}}"> --}}
				@if($proceso->ProcImage === "")
				   <a href="/white/img/no_image.png"> <img src="/white/img/no_image.png" class="responsive"></a>
				@else
				   <a href="{{Storage::url($proceso->ProcImage)}}"> <img src="{{Storage::url($proceso->ProcImage)}}" class="responsive"></a>
				@endif
			</div>
			<div class="col-md-5 text-center margen">
				<br><h4>{{$proceso->ProcName}}</h4><br>
			</div>
			<div class="col-md-4 text-center margen">
				<br>
				@foreach($proceso->areas as $area)
					{{$area->AreaName}}<br>
				@endforeach
			</div>
		</div>

		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row text-center">
			<div class="col-md-6 margen">
				<h4>OBJETIVO</h4><br>
				<p>{{$proceso->ProcObjetivo}}</p>
			</div>
			<div class="col-md-3 margen">
				<h4>LIDER</h4><br>
				<p>{{$proceso->ProcAutoridad}}</p>
			</div>
			<div class="col-md-3 margen">
				<h4>RESPONSABLES</h4><br>
				<p>
					@foreach($proceso->ProcResponsable as $responsable)
						<li>{{$responsable}}</li>
					@endforeach
				</p>
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row margen text-center">
			<div class="col-md-12">
				<h4>ALCANCE</h4><hr>
				<p>{{$proceso->ProcAlcance}}</p>
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-3 text-center margen color">
				<h4>PLANEAR</h4>
			</div>
			<div class="col-md-3 text-center margen color">
				<h4>HACER</h4> 
			</div>
			<div class="col-md-3 text-center margen color">
				<h4>VERIFICAR</h4> 
			</div>
			<div class="col-md-3 text-center margen color">
				<h4>ACTUAR</h4> 
			</div>
		</div>




		<div class="row">
			<div class="col-md-12 margen text-center color1">
				<h4>PROVEEDOR</h4>
			</div>
			{{-- <div class="col-md-12 row">
				<div class="col-md-3 margen">
					PLANEAR
				</div>
				<div class="col-md-3 margen">
					HACER
				</div>
				<div class="col-md-3 margen">
					VERIFICAR
				</div>
				<div class="col-md-3 margen">
					ACTUAR
				</div>
			</div> --}}
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->proveedores as $proveedor)
						@if($proveedor->ProvType == 'Planear')
							<li>{{$proveedor->ProvName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->proveedores as $proveedor)
						@if($proveedor->ProvType == 'Hacer')
							<li>{{$proveedor->ProvName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->proveedores as $proveedor)
						@if($proveedor->ProvType == 'Verificar')
							<li>{{$proveedor->ProvName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->proveedores as $proveedor)
						@if($proveedor->ProvType == 'Actuar')
							<li>{{$proveedor->ProvName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 margen text-center color1">
				<h4>ENTRADA</h4>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->entradas as $entrada)
						@if($entrada->InputType == 'Planear')
							<li>{{$entrada->InputName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->entradas as $entrada)
						@if($entrada->InputType == 'Hacer')
							<li>{{$entrada->InputName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->entradas as $entrada)
						@if($entrada->InputType == 'Verificar')
							<li>{{$entrada->InputName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->entradas as $entrada)
						@if($entrada->InputType == 'Actuar')
							<li>{{$entrada->InputName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 margen text-center color1">
				<h4>ACTIVIDAD / ETAPA</h4>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->actividades as $actividad)
						@if($actividad->ActiType == 'Planear')
							<li>{{$actividad->ActiName}}
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->actividades as $actividad)
						@if($actividad->ActiType == 'Hacer')
							<li>{{$actividad->ActiName}}
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->actividades as $actividad)
						@if($actividad->ActiType == 'Verificar')
							<li>{{$actividad->ActiName}}
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->actividades as $actividad)
						@if($actividad->ActiType == 'Actuar')
							<li>{{$actividad->ActiName}}
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 margen text-center color1">
				<h4>RESULTADOS / SALIDAS</h4>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->salidas as $salida)
						@if($salida->OutputType == 'Planear')
							<li>{{$salida->OutputName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->salidas as $salida)
						@if($salida->OutputType == 'Hacer')
							<li>{{$salida->OutputName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->salidas as $salida)
						@if($salida->OutputType == 'Verificar')
							<li>{{$salida->OutputName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->salidas as $salida)
						@if($salida->OutputType == 'Actuar')
							<li>{{$salida->OutputName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 margen text-center color1">
				<h4>CLIENTE</h4>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->clientes as $cliente)
						@if($cliente->CliType == 'Planear')
							<li>{{$cliente->CliName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->clientes as $cliente)
						@if($cliente->CliType == 'Hacer')
							<li>{{$cliente->CliName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->clientes as $cliente)
						@if($cliente->CliType == 'Verificar')
							<li>{{$cliente->CliName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col-md-3 margen">
				<ul>
					@foreach($proceso->clientes as $cliente)
						@if($cliente->CliType == 'Actuar')
							<li>{{$cliente->CliName}}</li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>







		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row margen">
			<div class="col-md-9 text-center margen color">
				<h4>RECURSOS</h4><br>
			</div>
			<div class="col-md-3 text-center margen color">
				<h4>AMBIENTE DE TRABAJO</h4>
			</div>
			<div class="col-md-3 margen">
				<h4 class="text-center">FISICO</h4><br>
				@foreach($proceso->recursos as $recurso)
					@if($recurso->RecType == 0)
						<li>{{$recurso->RecName}}</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-3 margen">
				<h4 class="text-center">HUMANO</h4><br>
				@foreach($proceso->recursos as $recurso)
					@if($recurso->RecType == 1)
						<li>{{$recurso->RecName}}</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-3 margen">
				<h4 class="text-center">FINANCIERO</h4><br>
				@foreach($proceso->recursos as $recurso)
					@if($recurso->RecType == 2)
						<li>{{$recurso->RecName}}</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-3 margen">
				<p>{{$proceso->ProcAmbienTrabajo}}</p>
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 text-center margen color1">
				<h4>REQUISITOS Y REGULACIONES</h4>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">LEGALES</h4><br>
				@foreach($proceso->requisitos as $requisito)
					@if($requisito->ReqType == 0)
						<li>
							@if($requisito->ReqLink == "N" || $requisito->ReqLink == "")
								<a href='{{$requisito->ReqSrc}}'>{{$requisito->ReqName}}</a>
							@else
								<a href='{{$requisito->ReqLink}}'>{{$requisito->ReqName}}</a>
							@endif
						</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">EMPRESARIALES</h4><br>
				@foreach($proceso->requisitos as $requisito)
					@if($requisito->ReqType == 1)
						<li>
							@if($requisito->ReqLink == "N" || $requisito->ReqLink == "")
								<a href='{{$requisito->ReqSrc}}'>{{$requisito->ReqName}}</a>
							@else
								<a href='{{$requisito->ReqLink}}'>{{$requisito->ReqName}}</a>
							@endif
						</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">OTRAS - CLIENTE</h4><br>
				@foreach($proceso->requisitos as $requisito)
					@if($requisito->ReqType == 2)
						<li>
							@if($requisito->ReqLink == "N" || $requisito->ReqLink == "")
								<a href='{{$requisito->ReqSrc}}'>{{$requisito->ReqName}}</a>
							@else
								<a href='{{$requisito->ReqLink}}'>{{$requisito->ReqName}}</a>
							@endif
						</li>
					@endif
				@endforeach
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 text-center margen">
				<h4>RIESGOS</h4><hr>
				<p>
					@foreach($proceso->ProcRiesgos as $riesgo)
						<li>{{$riesgo}}</li>
					@endforeach
				</p>
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 margen color">
				<h4 class="text-center">GESTIÓN AMBIENTAL</h4>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">ASPECTOS AMBIENTALES</h4>
				@foreach($proceso->ambientales as $gambiental)
					@if($gambiental->GesType == 0)
						<li>{{$gambiental->GesName}}</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">IMPACTOS AMBIENTALES</h4>
				@foreach($proceso->ambientales as $gambiental)
					@if($gambiental->GesType == 1)
						<li>{{$gambiental->GesName}}</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">CONTROLES OPERACIONALES</h4>
				@foreach($proceso->ambientales as $gambiental)
					@if($gambiental->GesType == 2)
						<li>{{$gambiental->GesName}}</li>
					@endif
				@endforeach
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 margen color1">
				<h4 class="text-center">GESTIÓN EN SEGURIDAD Y SALUD EN EL TRABAJO</h4>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">PELIGROS</h4>
				@foreach($proceso->gseguridads as $gseguridad)
					@if($gseguridad->SeguType == 0)
						<li>{{$gseguridad->SeguName}}</li>
					@else
					@endif
				@endforeach
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">RIESGOS</h4>
				@foreach($proceso->gseguridads as $gseguridad)
					@if($gseguridad->SeguType == 1)
						<li>{{$gseguridad->SeguName}}</li>
					@else
					@endif
				@endforeach
			</div>
			<div class="col-md-4 margen">
				<h5 class="text-center">CONTROLES OPERACIONALES</h5>
				@foreach($proceso->gseguridads as $gseguridad)
					@if($gseguridad->SeguType == 2)
						<li>{{$gseguridad->SeguName}}</li>
					@else
					@endif
				@endforeach
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 margen text-center">
				<h4>POLITICA DE OPERACIÓN</h4><hr>
				<p>
					@foreach($proceso->ProcPolitOperacion as $operacion)
						<li>{{$operacion}}</li>
					@endforeach
				</p>
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 margen color">
				<h4 class="text-center">INDICADORES</h4>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">Eficiencia</h4>
				<div class="row">
					<div class="col-md-6 margen text-center color1-1">
						<h4>Indicador</h4>
					</div>
					<div class="col-md-6 margen text-center color1-1">
						<h4>Meta</h4>
					</div>
					@foreach($proceso->indicadores as $indicador)
						@if($indicador->IndEfe == 0)
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndName}}</a></li>
							</div>
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndObjective}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">Eficacia</h4>
				<div class="row margen">
					<div class="col-md-6 margen text-center color1-2">
						<h4>Indicador</h4>
					</div>
					<div class="col-md-6 margen text-center color1-2">
						<h4>Meta</h4>
					</div>
					@foreach($proceso->indicadores as $indicador)
						@if($indicador->IndEfe == 1)
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndName}}</a></li>
							</div><hr>
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndObjective}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>	
			<div class="col-md-4 margen">
				<h4 class="text-center">Efectividad</h4>
				<div class="row margen">
					<div class="col-md-6 margen text-center color1-3">
						<h4>Indicador</h4>
					</div>
					<div class="col-md-6 margen text-center color1-3">
						<h4>Meta</h4>
					</div>
					@foreach($proceso->indicadores as $indicador)
						@if($indicador->IndEfe == 2)
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndName}}</a></li>
							</div>
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndObjective}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>		
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 margen color">
				<h4 class="text-center">DOCUMENTOS APLICABLES</h4>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">Manuales o Procedimientos</h4>
				<div class="row">
					<div class="col-md-6 margen text-center color1-1">
						<h4>Nombre</h4>
					</div>
					<div class="col-md-6 margen text-center color1-1">
						<h4>Identificación</h4>
					</div>
					@foreach($proceso->documentos as $documento)
						@if($documento->DocType == 'Manuales' || 'Procedimientos')
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocName}}</a></li><hr>
							</div>
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocIdentification}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">Instructivos</h4>
				<div class="row margen">
					<div class="col-md-6 margen text-center color1-2">
						<h4>Nombre</h4>
					</div>
					<div class="col-md-6 margen text-center color1-2">
						<h4>Identificación</h4>
					</div>
					@foreach($proceso->documentos as $documento)
						@if($documento->DocType == 'Instructivos')
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocName}}</a></li><hr>
							</div>
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocIdentification}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>	
			<div class="col-md-4 margen">
				<h4 class="text-center">Formatos</h4>
				<div class="row margen">
					<div class="col-md-6 margen text-center color1-3">
						<h4>Nombre</h4>
					</div>
					<div class="col-md-6 margen text-center color1-3">
						<h4>Identificación</h4>
					</div>
					@foreach($proceso->documentos as $documento)
						@if($documento->DocType == 'Formatos')
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocName}}</a></li><hr>
							</div>
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocIdentification}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>		
		</div>
		<div class="col-md-12">
			<br><br><br>
		</div>
		<div class="row color">
			<div class="col-md-4 margen text-center">
				<h4>Elaborado por</h4><br>
				{{$proceso->ProcElaboro}}
			</div>
			<div class="col-md-4 margen text-center">
				<h4>Revisado Por</h4><br>
				{{$proceso->ProcReviso}}
			</div>
			<div class="col-md-4 margen text-center">
				<h4>Aprobado Por</h4><br>
				{{$proceso->ProcAprobo}}
			</div>
		</div>
		<div class="col-md-12">
			<br><br><br>
		</div>
	</div>
@endsection
{{-- librerias adicionales para el funcionamiento de la vista --}}
@push('js')
{{-- <script src="{{ asset('js') }}/datatable-depen.js"></script>
<script src="{{ asset('js') }}/datatable-plugins.js"></script> --}}
@endpush
{{-- scripts adicionales para el funcionmiento de la vista --}}
@push('scripts')
<script>
// $(document).ready(function() {
// 	console.log('vista cargada correctamente')
// });

</script>
@endpush
