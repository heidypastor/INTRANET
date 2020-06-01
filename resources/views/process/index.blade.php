@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Procesos
@endsection

@push('css')
    <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
    <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/>
@endpush

@section('content')
	<div class="card">

		<div class="card-header pull-left">
		  <h3 class="card-title"> 
		  		<strong>Procesos</strong> 
		  		@can('createProcess')
		  		<a href="{{ route('proceso.create') }}" class="fas fa-plus btn btn-fill btn-success pull-right"> Crear</a>
		  		@endcan
		  </h3>
		</div>

		<div class="card-body">
			<table class="table table-bordered table-striped" id="tableProcesses">
			  <thead>
			  	<tr>
			  		<th data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Nombre</b>" data-content="Nombre del proceso en cuestión.">Nombre</th>
			  		
			  		<th data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Revisión</b>" data-content="Número de revisiones realizadas al documento">Revisión</th>
			  		
			  		<th data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Responsable</b>" data-content="Usuario responsable del proceso.">Responsable</th>

			  		{{-- <th data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Requisitos</b>" data-content="Requisitos y documentos legales asociados al proceso.">Requisitos</th> --}}

			  		{{-- <th data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Recursos Necesarios</b>" data-content="Recursos necesarios para el desarrollo del proceso ya sean de tipo: <br> <ul> <li>Fisico <li>Humano <li>Financiero </ul>">Recursos Necesarios</th> --}}

			  		<th data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Elaborado por:</b>" data-content="Usuario que elaboro el proceso.">Elaborado por:</th>
			  		
			  		{{-- <th data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Aprobado por:</b>" data-content="Usuario que aprobo el proceso.">Aprobado por:</th> --}}

			  		<th data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Actualizado el:</b>" data-content="Última fecha de actualización del proceso en cuestión.">Actualizado el:</th>

			  		<th class="">Más Información</th>
			  	</tr>
			  </thead>
			  <tbody>
			  	@foreach($procesos as $proceso)
			      <tr>
			        <td class="text-center">{{$proceso->ProcName}}</td>
			        <td class="text-center">{{$proceso->ProcReviso}}</td>
			        <td class="text-center">
						<ul class="list-group">
							@foreach($proceso->ProcResponsable as $key => $value)
								<li class="list-group-item text-nowrap">{{$value}}</li>
							@endforeach
						</ul>
			        </td>
			        {{-- <td class="text-center">
				        	@foreach($proceso->requisitos as $requisito)
				        		{{$requisito->ReqName}}<br>
				        	@endforeach
			        </td>
					<td class="text-center">
						<ul class="list-gruup">
							@foreach($proceso->recursos as $recurso)
							<li class="list-group-item text-nowrap">
								{{$recurso->RecName}} -
								@switch($recurso->RecType)
									@case(0)
										Fisico
										@break
									@case(1)	
										Humano
										@break
									@case(2)
										Financiero
										@break
								@endswitch
							</li>
							@endforeach
						</ul>
					</td> --}}

			        <td class="text-center">{{$proceso->ProcElaboro}}</td>
			        {{-- <td class="text-center">{{$proceso->ProcAprobo}}</td> --}}
			        <td class="text-center">{{$proceso->updated_at}}</td>
		        	<td class="text-center">
		        		<a href="{{ route('proceso.show', $proceso) }}" class="btn btn-fill btn-info">
		        			<span style="font-size: 1em;">
								<i class="far fa-eye"></i>  Ver
							</span>
						</a>
					</td>
			      </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
@endsection




{{-- librerias adicionales para el funcionmiento de la vista --}}
@push('js')
	<script src="{{ asset('js') }}/datatable-depen.js"></script>
	<script src="{{ asset('js') }}/datatable-plugins.js"></script>
@endpush

{{-- scripts adicionales para el funcionmiento de la vista --}}
@push('scripts')
<script>
	$(document).ready(function() {
		// /*var rol defino el rol del usuario*/
		// var rol = "<?php echo Auth::user()->UsRol; ?>";
		// /*var botoncito define los botones que se usaran si el usuario es programador*/
		// var botoncito = (rol == 'Programador') ? [{extend: 'colvis', text: 'Columnas Visibles'}, {extend: 'copy', text: 'Copiar'}, {extend: 'excel', text: 'Excel'}, {extend: 'pdf', text: 'Pdf'}, {
		// 			extend: 'collection',
		// 			text: 'Selector',
		// 			buttons: ['selectRows', 'selectCells']
		// 		}] : [{extend: 'colvis', text: 'Columnas Visibles'}, {extend: 'excel', text: 'Excel'}];
		/*inicializacion de datatable general*/        
		var table = $('.table').DataTable({
			"dom": "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
				"<'row'<'col-md-12'tr>>" +
				"<'row'<'col-md-6'i><'col-md-6'p>>",
			"scrollX": false,
			"autoWidth": true,
			// "select": true,
			"colReorder": true,
			"searchHighlight": true,
			"responsive": true,
			"keys": true,
			"lengthChange": true,
			"buttons": [
				// botoncito,
			],
			"language": {
				"sProcessing":     "Procesando...",
				"sLengthMenu":     "Mostrar _MENU_ registros",
				"sZeroRecords":    "No se encontraron resultados",
				"sEmptyTable":     "Ningún dato disponible en esta tabla",
				"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered":   "",
				"sInfoPostFix":    "",
				"sSearch":         "Buscar:",
				"sUrl":            "",
				"sInfoThousands":  ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst":    "Primero",
					"sLast":     "Último",
					"sNext":     "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				},
				"colvis": 'Ajouté au presse-papiers',
			}
		});
		/*funcion para resaltar las busquedas*/
		// var table = $('.table').DataTable();


		table.on('draw', function() {
			var body = $(table.table().body());
			body.unhighlight();
			body.highlight(table.search());
		});
	});
</script>
@endpush