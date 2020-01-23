@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])

@section('htmlheader_titleicon')
/img/favicon.png
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
		  <h4 class="card-title"> 
		  	Procesos 
		  	<a href="{{ route('procesos.create') }}" class="fas fa-plus btn btn-fill btn-success pull-right"> Crear</a>
		  </h4>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table display" id="tableProcesses">
				  <thead>
				    <th class="text-center">Nombre</th>
				    <th class="text-center">Revisión</th>
				    {{-- <th class="text-center">Descripción ultimo cambio</th> --}}

				    {{-- <th class="text-center">Objetivo</th> --}}
				    {{-- <th class="text-center">Imagen</th> --}}
				    <th class="text-center">Responsable</th>

				    {{-- <th class="text-center">Autoridad</th> --}}
				    <th class="text-center">Requisitos</th>
				    <th class="text-center">Recursos Necesarios</th>

				    <th class="text-center">Elaborado por:</th>
				    {{-- <th class="text-center">Revisado por:</th> --}}
				    <th class="text-center">Aprobado por:<</th>

				    {{-- <th class="text-center">Creado el:</th> --}}
				    <th class="text-center">Actualizado el:</th>
				    <th class="text-center">Editar</th>
				  </thead>
				  <tbody>
				  	@foreach($procesos as $proceso)
				      <tr>
				        <td class="text-center">{{$proceso->ProcName}}</td>
				        <td class="text-center">{{$proceso->ProcRevVersion}}</td>
				        {{-- <td class="text-center">{{$proceso->ProcChangesDescription}}</td> --}}

				        {{-- <td class="text-center">{{$proceso->ProcObjetivo}}</td> --}}
				        {{-- <td class="text-center"><a target="_blank" href="{{Storage::url($proceso->ProcImage)}}">{{$proceso->ProcImage}}</td> --}}
				        <td class="text-center">{{$proceso->ProcResponsable}}</td>

				        {{-- <td class="text-center">{{$proceso->ProcAutoridad}}</td> --}}
				        <td class="text-center">{{$proceso->ProcRequsitos}}</td>
				        <td class="text-center">{{$proceso->ProcRecursos}}</td>

				        <td class="text-center">{{$proceso->ProcElaboro}}</td>
				        {{-- <td class="text-center">{{$proceso->ProcReviso}}</td> --}}
				        <td class="text-center">{{$proceso->ProcAprobo}}</td>

				        {{-- <td class="text-center">{{$proceso->created_at}}</td> --}}
				        <td class="text-center">{{$proceso->updated_at}}</td>
			        	<td class="text-center"><a href="procesos/{{$proceso->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a></td>
				      </tr>
				    @endforeach
				  </tbody>
				</table>
			</div>
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
		$('.table').DataTable({
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
		var table = $('.table').DataTable();

		
		table.on('draw', function() {
			var body = $(table.table().body());
			body.unhighlight();
			body.highlight(table.search());
		});
	});
</script>
@endpush