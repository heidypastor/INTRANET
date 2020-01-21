@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])

@section('htmlheader_titleicon')
/img/favicon.png
@endsection

@section('htmlheader_title')
Procesos
@endsection

@section('css')
       <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
       <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/>
@endsection

@section('content')

	<div class="card-header text-center">
	  <h4 class="card-title">Procesos</h4>
	</div>

	<div class="card-body text-left">
	  <a href="{{ route('procesos.create') }}" class="fas fa-plus btn btn-fill btn-success"> Crear</a>
	</div>

	<div class="card-body">
		<div class="table-responsive table-upgrade">
			<table class="table table-compact display" id="tableProcesses">
			  <thead>
			    <th class="text-center">Nombre</th>
			    <th class="text-center">Revisión</th>
			    <th class="text-center">Descripción ultimo cambio</th>

			    {{-- <th class="text-center">Objetivo</th> --}}
			    <th class="text-center">Imagen</th>
			    <th class="text-center">Responsable</th>

			    <th class="text-center">Autoridad</th>
			    <th class="text-center">Requisitos</th>
			    <th class="text-center">Recursos Necesarios</th>

			    <th class="text-center">Elaborado por:</th>
			    <th class="text-center">Revisado por:</th>
			    <th class="text-center">Aprobado por:<</th>

			    <th class="text-center">Creado el:</th>
			    <th class="text-center">Actualizado el:</th>
			    <th class="text-center">Editar</th>
			  </thead>
			  <tbody>
			  	@foreach($procesos as $proceso)
			      <tr>
			        <td class="text-center">{{$proceso->ProcName}}</td>
			        <td class="text-center">{{$proceso->ProcRevVersion}}</td>
			        <td class="text-center">{{$proceso->ProcChangesDescription}}</td>

			        {{-- <td class="text-center">{{$proceso->ProcObjetivo}}</td> --}}
			        <td class="text-center"><a target="_blank" href="{{Storage::url($proceso->ProcImage)}}">{{$proceso->ProcImage}}</td>
			        <td class="text-center">{{$proceso->ProcResponsable}}</td>

			        <td class="text-center">{{$proceso->ProcAutoridad}}</td>
			        <td class="text-center">{{$proceso->ProcRequsitos}}</td>
			        <td class="text-center">{{$proceso->ProcRecursos}}</td>

			        <td class="text-center">{{$proceso->ProcElaboro}}</td>
			        <td class="text-center">{{$proceso->ProcReviso}}</td>
			        <td class="text-center">{{$proceso->ProcAprobo}}</td>

			        <td class="text-center">{{$proceso->created_at}}</td>
			        <td class="text-center">{{$proceso->updated_at}}</td>
		        	<td class="text-center"><a href="procesos/{{$proceso->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a></td>
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
{{-- <script type="text/javascript">
    $(document).ready( function () {
        $('#tableProcesses').DataTable({
        	"dom": "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
        	    "<'row'<'col-md-12'tr>>" +
        	    "<'row'<'col-md-6'i><'col-md-6'p>>",
        	"scrollX": true,
        	"autoWidth": true,
        	"select": true,
        	"colReorder": true,
        	"searchHighlight": true,
        	"responsive": true,
        	"keys": true,
        	"lengthChange": true,
        	// "buttons": [
        	//     botoncito,
        	// ],
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
    } );
</script> --}}
<script type="text/javascript">
$(document).ready(function() {


	/*var botoncito define los botones que se usaran si el usuario es programador*/
	var botoncito = (true) ? [{extend: 'colvis', text: 'Columnas Visibles'}, {extend: 'copy', text: 'Copiar'}, {extend: 'excel', text: 'Excel'}, {extend: 'pdf', text: 'Pdf'}, {
					extend: 'collection',
					text: 'Selector',
					buttons: ['selectRows', 'selectCells']
				}] : [{extend: 'colvis', text: 'Columnas Visibles'}, {extend: 'excel', text: 'Excel'}];

	/*funcion para renderizar la tabla de cotizacion.index*/
	$('#tableProcesses').DataTable({
		responsive: true,
		select: true,
		scrollX:true,
		dom: 'Bfrtip',
		buttons: [
			botoncito, {
				extend: 'collection',
				text: 'Selector',
				buttons: ['selectRows', 'selectCells']
			}
		],
		colReorder: true,
		ordering: true,
		autoWith: true,
		searchHighlight: true,
		columnDefs: [{
			"targets": 15,
			"data": "id",
			"render": function(data, type, row, meta) {
				return "<a method='get' href='/procesos/" + data + "/' class='btn btn-primary btn-block'>Ver mas</a>";
			}
		}]
	});

	/*funcion para resaltar las busquedas*/
	var table = $('#tableProcesses').DataTable();

	table.on('draw', function() {
		var body = $(table.table().body());
		body.unhighlight();
		body.highlight(table.search());
	});
});

</script>
@endpush