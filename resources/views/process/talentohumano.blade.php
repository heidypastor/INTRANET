@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])
@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection
@section('htmlheader_title')
SISTEMA DE GESTION INTEGRAL - HSEQ
@endsection
@push('css')
{{--
<link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet" />
<link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet" /> --}}
@endpush
@section('content')
<div class="card col-md-12">
	<div class="card-header">
		<div class="row">
			@php
			$userid = Auth::user()->id;
			@endphp
			<div class="col-md-8">
				<h2>
					<b>GESTIÓN DEL TALENTO HUMANO</b>
				</h2>
			</div>
			{{-- @can('updateProcess')
				<div class="col-md-2">
					<a href="talentohumano/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a><br><br><br>
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
			@endcan --}}
		</div>
	</div>
	<div class="card-body">
		{{-- div para la imagen y el objetivo --}}
		<div class="row col-md-12">
			<img src="https://picsum.photos/1024/768" class="col-md-3 col-xs-12 float-left" alt="...">
			<div class="col-md-9 col-xs-12 float-left">
				<h4 class="mt-0"><b class="text-info">Objetivo</b></h4>
				<p>
					Planear, organizar, ejecutar y controlar las acciones tendientes a la vinculación, evaluación y retiro del personal  de planta y temporal   contribuyendo al desarrollo de sus potencialidades, destrezas y habilidades  encaminadas al fortalecimiento continuo de las competencias, mejoramiento del clima organizacional y bienestar, reconociendo los derechos laborales, promoviendo los valores y principios éticos dentro del marco costitucional y legal, que contribuya al logro de las metas de PROSARC S.A ESP.
				</p>
            </div>
            <div class="col-md-9 col-xs-12 float-left">
				<h4 class="mt-0"><b class="text-info">ALCANCE</b></h4>
				<p>
                    Inicia con la gestión para la vinculación de personal, ya sea de forma directa o por la temporal, de acuerdo a la estructura administrativa de PROSARC S.A ESP; continúa con la capacitación a los trabajadores, según la necesidad de la Empresa, entrenamiento, estímulos, seguridad y salud en el trabajo, compensaciones, evaluación de desempeño, administración de las historias laborales, procesos disciplinarios, liquidación de nómina, trámites de incapacidades, licencias, permisos y vacaciones, actividades enmarcadas en el reglamento Interno de Trabajo y termina con el retiro definitivo del trabajador.
                </p>
			</div>
		</div>
		<div class="row">
			{{-- columna para entidades relacionadas --}}
			<div class="col-md-6 col-xs-12">
				<div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Responsabilidad'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse1" class="collapse show">
						<div class="card-body">
							<span>
								<ul class="list-group">
									
                                    <a href="#" class="list-group-item list-group-item-action">
										Jefe de Talento Humano
                                    </a>
								</ul>
							</span>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse2" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Autoridad'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse2" class="collapse show">
						<div class="card-body">
							<ul class="list-group">
								<a href="#" class="list-group-item list-group-item-action">
									{{-- {{$proceso->ProcAutoridad}} --}}
									{{-- @foreach($users as $user)
										@if($proceso->ProcAutoridad == $user->id)
											{{$user->name}}
										@endif
									@endforeach --}}
									@switch($proceso->ProcAutoridad)
										@case(1) 
											Super Admin
											@break
										@case(2)
											Gerente
											@break
										@case(3)
											Director
											@break
										@case(4)
											Jefe Área
											@break
										@case(5)
											User
											@break
									@endswitch
								</a>
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse3" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Requisitos por cumplir'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse3" class="collapse show">
						<div class="card-body">
							<ul class="list-group">
								@foreach($proceso->requisitos as $requisito)
									@if($requisito->ReqLink == 'N')
										@if($requisito->ReqSrc == 'N')
											<a href="#" class="list-group-item list-group-item-action"> 
												{{$requisito->ReqName}}
											</a>
										@else
											<a href="{{$requisito->ReqSrc}}" class="list-group-item list-group-item-action"> 
												{{$requisito->ReqName}}
											</a>
										@endif
									@else
										@if($requisito->ReqSrc == 'N')
											<a href="{{$requisito->ReqLink}}" class="list-group-item list-group-item-action">
												{{$requisito->ReqName}}
											</a>
										@else
											<a href="{{$requisito->ReqLink}}" class="list-group-item list-group-item-action">
												{{$requisito->ReqName}}
											</a>
										@endif
									@endif
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse4" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Procesos de Soporte'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse4" class="collapse show">
						<div class="card-body">
							<ul class="list-group">
								@foreach($proceso->procesosDeSoporte as $proSopor)
									<a href="{{ route('proceso.show', $proSopor) }}" class="list-group-item list-group-item-action">
										{{$proSopor->ProcName}}
									</a>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse5" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Recursos necesarios (físicos, humanos...)'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse5" class="collapse show">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">
									{{$proceso->ProcRecursos}}
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse6" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Documentación Aplicable'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse6" class="collapse show">
						<div class="card-body">
							<ul class="list-group">
								@foreach($proceso->documentos as $documento)
									<a href="{{Storage::url($documento->DocSrc)}}" class="list-group-item list-group-item-action">
										{{$documento->DocName}}
									</a>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
			{{-- div para ciclo del proceso --}}
			<div class="col-md-6 col-xs-12">
				<div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse7" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Entradas'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse7" class="collapse show">
						<div class="card-body">
							<ul class="list-group">
								@foreach($proceso->entradas as $entrada)
									<a href="#" class="list-group-item list-group-item-action ">
										{{$entrada->InputName}}
									</a>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse8" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Actividades'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse8" class="collapse show">
						<div class="card-body">
							<ul class="list-group">
								@foreach($proceso->actividades as $actividad)
									<a href="#" class="list-group-item list-group-item-action ">
										{{$actividad->ActiName}}
									</a>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse9" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Salidas'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse9" class="collapse show">
						<div class="card-body">
							<ul class="list-group">
								@foreach($proceso->salidas as $salida)
									<a href="#" class="list-group-item list-group-item-action ">
										{{$salida->OutputName}}
									</a>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				{{-- <div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse10" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Seguimiento'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse10" class="collapse show">
						<div class="card-body">
							<ul class="list-group">
								@foreach($proceso->seguimientos as $seguimiento)
									<a href="#" class="list-group-item list-group-item-action ">
										{{$seguimiento->SeguiName}}
									</a>
								@endforeach
							</ul>
						</div>
					</div>
				</div> --}}
				<div class="card">
					<div class="card-header">
						<a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false">
							<h4 class="text-info text-center">
								<b>{{'Indicadores'}}</b>
							</h4>
						</a>
					</div>
					<div id="collapse1" class="collapse show">
						<div class="card-body">
							<ul class="list-group">
								@foreach($proceso->indicadores as $indicador)
									<a href="{{ route('indicators.show', $indicador) }}" class="list-group-item list-group-item-action ">
										{{$indicador->IndName}}
									</a>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="card-footer table-responsive">
			<table class="w-100 wtable wtable-bordered">
				<thead class="thead-dark">
					<tr>
						<th class="text-center" style="color:lightsteelblue !important;">Fecha</th>
						<th class="text-center" style="color:lightsteelblue !important;">Rev N°</th>
						<th class="text-center" style="color:lightsteelblue !important;">Descripción de modificación</th>
						<th class="text-center" style="color:lightsteelblue !important;">Elaboró</th>
						<th class="text-center" style="color:lightsteelblue !important;">Revisó</th>
						<th class="text-center" style="color:lightsteelblue !important;">Aprobó</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">{{$proceso->ProcDate}}</td>
						<td class="text-center">{{$proceso->ProcRevVersion}}</td>
						<td class="text-center">{{$proceso->ProcChangesDescription}}</td>
						<td class="text-center">
							{{-- {{$proceso->ProcElaboro}} --}}
							{{-- @foreach($users as $user)
								@if($proceso->ProcElaboro == $user->id)
									{{$user->name}}
								@endif
							@endforeach --}}
							@switch($proceso->ProcElaboro)
								@case(1) 
									Super Admin
									@break
								@case(2)
									Gerente
									@break
								@case(3)
									Director
									@break
								@case(4)
									Jefe Área
									@break
								@case(5)
									User
									@break
							@endswitch
						</td>
						<td class="text-center">
							{{-- {{$proceso->ProcRevis}} --}}
							{{-- @foreach($users as $user)
								@if($proceso->ProcReviso == $user->id)
									{{$user->name}}
								@endif
							@endforeach --}}
							@switch($proceso->ProcReviso)
								@case(1) 
									Super Admin
									@break
								@case(2)
									Gerente
									@break
								@case(3)
									Director
									@break
								@case(4)
									Jefe Área
									@break
								@case(5)
									User
									@break
							@endswitch
						</td>
						<td class="text-center">
							{{-- {{$proceso->ProcAprobo}} --}}
							{{-- @foreach($users as $user)
								@if($proceso->ProcAprobo == $user->id)
									{{$user->name}}
								@endif
							@endforeach --}}
							@switch($proceso->ProcAprobo)
								@case(1) 
									Super Admin
									@break
								@case(2)
									Gerente
									@break
								@case(3)
									Director
									@break
								@case(4)
									Jefe Área
									@break
								@case(5)
									User
									@break
							@endswitch
						</td>
					</tr>
				</tbody>
			</table>
	</div>
</div>
@endsection
{{-- librerias adicionales para el funcionmiento de la vista --}}
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
