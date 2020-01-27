@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])
@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection
@section('htmlheader_title')
Proceso de {{'nombre del proceso'}}
@endsection
@push('css')
{{--
<link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet" />
<link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet" /> --}}
@endpush
@section('content')
	<div class="card col-md-12">
		<div class="card-header">
			<h2>
				<b>{{'Compras'}}</b>
			</h2>
		</div>
		<div class="card-body">
			{{-- div para la imagen y el objetivo --}}
			<div class="row col-md-12">
					<img src="https://picsum.photos/1024/768" class="col-md-3 col-xs-12 float-left" alt="...">
					<div class="col-md-9 col-xs-12 float-left">
						<h4 class="mt-0"><b class="text-info">Objetivo</b></h4>
						<p>
							Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						</p>
						<br>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				
				{{-- columna para entidades relacionadas --}}
				<div class="col-md-6 col-xs-12">
					<h4 class="text-info text-center">
						<b>{{'Responsabilidad'}}</b>
					</h4>
					<ul class="list-group">
						<a href="#" class="list-group-item list-group-item-action">
						    {{'Superintendente de planta'}}
						</a>
					</ul>

					<h4 class="text-info text-center">
						<b>{{'Autoridad'}}</b>
					</h4>
					<ul class="list-group">
						<a href="#" class="list-group-item list-group-item-action">
						    {{'Gerente General'}}
						</a>
					</ul>

					<h4 class="text-info text-center">
						<b>{{'Requsitos por cumplir'}}</b>
					</h4>
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

					<h4 class="text-info text-center">
						<b>{{'Procesos de Soporte'}}</b>
					</h4>
					<ul class="list-group">
						<a href="#" class="list-group-item list-group-item-action">
						    {{'Planificacion'}}
						</a>
						<a href="#" class="list-group-item list-group-item-action">
						    {{'Transporte y Recolección'}}
						</a>
						<a href="#" class="list-group-item list-group-item-action">
						    {{'Gestion Ambiental y SI&SO'}}
						</a>
						<a href="#" class="list-group-item list-group-item-action">
						    {{'Almacén'}}
						</a>
					</ul>
					<h4 class="text-info text-center">
						<b>{{'Recursos necesarios (fisicos, humanos...)'}}</b>
					</h4>
					<ul class="list-group">
						<li class="list-group-item">
						    {{'Oficina, Computador, telefono, fax, vehiculo'}}
						</li>
					</ul>
					<h4 class="text-info text-center">
						<b>{{'Documentación Aplicable'}}</b>
					</h4>
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
						    {{'xxxxxxxxxxx'}}
						</a>
						<a href="#" class="list-group-item list-group-item-action">
						    {{'xxxxxxxxxxxxxxx'}}
						</a>
						<a href="#" class="list-group-item list-group-item-action">
						    {{'xxxxxxxxxxxxxx'}}
						</a>
						<a href="#" class="list-group-item list-group-item-action">
						    {{'xxxxxxxxxxxxx'}}
						</a>
					</ul>
				</div>

				{{-- div para ciclo del proceso --}}
				<div class="col-md-6 col-xs-12">
					<div class="card">
						<div class="card-header">
							<h4 class="text-info text-center">
								<b>{{'Entradas'}}</b>
							</h4>
						</div>
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">
								    {{'Requisiciones de bienes y servicios'}}
								</li>
								<li class="list-group-item">
								    {{'solicitud de elaboración y eliminación de contratos'}}
								</li>
								<li class="list-group-item">
								    {{'Fichas del PMA'}}
								</li>
								<li class="list-group-item">
								    {{'Identificación del peligro evaluación y eliminación de riesgos'}}
								</li>
								<li class="list-group-item">
								    {{'Identificación de aspectos e impacto ambiental'}}
								</li>
								<li class="list-group-item">
								    {{'PRograma de Gestión en SI$SO y medio Ambiente'}}
								</li>
								<li class="list-group-item">
								    {{'Normas de Trabajo'}}
								</li>
							</ul>
						</div>
					</div>
					
					
					<div class="card">
						<div class="card-header">
							<h4 class="text-info text-center">
								<b>{{'Actividades'}}</b>
							</h4>
						</div>
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">
								    {{'evaluación de proveedores y contratistas'}}
								</li>
								<li class="list-group-item">
								    {{'solicitud y análisis de cotización'}}
								</li>
								<li class="list-group-item">
								    {{'elaboración de términos de referencia para licitaciones'}}
								</li>
								<li class="list-group-item">
								    {{'selección de proveedores'}}
								</li>
								<li class="list-group-item">
								    {{'elaboración de ordenes de compra, ordenes de servicio y contratos'}}
								</li>
								<li class="list-group-item">
								    {{'Manejo de relaciones con proveedores y seguimiento hasta la llegada del insumo al Almacén'}}
								</li>
								<li class="list-group-item">
								    {{'levar estadística mensual de entrega de pedidos, haciendo énfasis en los productos críticos para el desarrollo de proyectos'}}
								</li>
								<li class="list-group-item">
									{{'Implementación de los programas de gestión'}}
								</li>
							</ul>
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
