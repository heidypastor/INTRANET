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
<div class="card col-md-12">
	<div class="card-header">
		<div class="row">
			<div class="col-md-8">
				<h2>
					<b>{{$proceso->ProcName}}</b>
				</h2>
			</div>
			<div class="col-md-2">
				<a href="{{$proceso->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a><br><br><br>
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
	</div>
	<div class="card-body">
		{{-- div para la imagen y el objetivo --}}
		<div class="row col-md-12">
			<img src="https://picsum.photos/1024/768" class="col-md-3 col-xs-12 float-left" alt="...">
			<div class="col-md-9 col-xs-12 float-left">
				<h4 class="mt-0"><b class="text-info">Objetivo</b></h4>
				<p>
					{{$proceso->ProcObjetivo}}

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
							</h4>
						</a>
					</div>
					<div id="collapse1" class="collapse show">
						<div class="card-body">
							<span>
								<ul class="list-group">
									<a href="#" class="list-group-item list-group-item-action">
										{{-- {{ Role::findByName($proceso->ProcResponsable) }} --}}
										{{$proceso->ProcResponsable}}
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
									{{'Gerente General'}}
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
								<a href="#" class="list-group-item list-group-item-action">
									{{'Normas NTC ISO 9001'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'Normas NTC ISO 14001'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'Normas NTC OHSAS 18001'}}
								</a>
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
								<a href="#" class="list-group-item list-group-item-action">
									{{'Planificación'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'Transporte y Recolección'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'Gestión Ambiental y SI&SO'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'Almacén'}}
								</a>
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
									{{'Oficina, Computador, teléfono, fax, vehículo'}}
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
								<a href="#" class="list-group-item list-group-item-action">
									{{'P-11 Compras'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'P-02 PLanificación'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'P-22 Manejo del Producto No Conforme'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'P-17 Auditorias'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'P-18 Mejoras'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'Programa de gestión SI&SO y Medio Ambiente'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'Normas de Trabajo'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'Hojas de Seguridad'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									{{'Matriz de requisitos Legales'}}
								</a>
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
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Requisiciones de bienes y servicios'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'solicitud de elaboración y eliminación de contratos'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Fichas del PMA'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Identificación del peligro evaluación y eliminación de riesgos'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Identificación de aspectos e impacto ambiental'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Programa de Gestión en SI$SO y medio Ambiente'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Normas de Trabajo'}}
								</a>
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
								<a href="#" class="list-group-item list-group-item-action ">
									{{'evaluación de proveedores y contratistas'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'solicitud y análisis de cotización'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'elaboración de términos de referencia para licitaciones'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'selección de proveedores'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'elaboración de ordenes de compra, ordenes de servicio y contratos'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Manejo de relaciones con proveedores y seguimiento hasta la llegada del insumo al Almacén'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'levar estadística mensual de entrega de pedidos, haciendo énfasis en los productos críticos para el desarrollo de proyectos'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Implementación de los programas de gestión'}}
								</a>
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
								<a href="#" class="list-group-item list-group-item-action ">
									{{'suministros de bienes y servicios acordes con los requerimientos'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Reducción de los riesgos e impacto ambiental'}}
								</a>
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
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
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Auditorias Internas y Externas'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Revisión por la Dirección'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Revisión por la Dirección'}}
								</a>
							</ul>
						</div>
					</div>
				</div>
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
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Tiempo requerido para el tramite de una requisicion'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'Tiempo de llegada para los productos'}}
								</a>
								<a href="#" class="list-group-item list-group-item-action ">
									{{'N° de Pedidos no conformes'}}
								</a>
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
						<th class="text-center" style="color:lightsteelblue !important;">Descrición de modificación</th>
						<th class="text-center" style="color:lightsteelblue !important;">Elaboró</th>
						<th class="text-center" style="color:lightsteelblue !important;">Revisó</th>
						<th class="text-center" style="color:lightsteelblue !important;">Aprobó</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">{{'12-15-2001'}}</td>
						<td class="text-center">{{'0'}}</td>
						<td class="text-center">{{'emision inicial'}}</td>
						<td class="text-center">{{'superintendente de planta'}}</td>
						<td class="text-center">{{'Gerente general'}}</td>
						<td class="text-center">{{'Presidencia GC'}}</td>
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
