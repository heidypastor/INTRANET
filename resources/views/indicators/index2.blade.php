@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'Generales'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Indicadores Generales
@endsection

@push('css')
    <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
    <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/>
@endpush

@section('content')

	<div class="card">
		<div class="card-header text-center">
		  <h3 class="card-title"><strong>Indicadores Generales</strong></h3>
		</div>
		<div class="col-md-12">
			<a href="{{ route('indicators.create') }}" class="float-right fas fa-plus btn btn-sm btn-fill btn-success b-create"> Crear</a>
		</div>

        @include('alerts.success')
		<div class="card-body">
			<table class="table table-bordered table-striped" id="tabledata">
			  <thead>
			    <th class="text-center">Nombre</th>
			    <th class="text-center">Objetivo</th>
			    <th class="text-center">Área</th>
			    <th class="text-center">Ver más... </th>
			  </thead>
			  @foreach($Indicators as $indicator)
			  	@if($indicator->IndType === 1)
				  <tbody>
				  	<td class="text-center">{{$indicator->IndName}}</td>
				  	<td class="text-center">{{$indicator->IndObjective}}</td>
				  	<td class="text-center">
				  		@foreach($indicator->areas as $area)
				  		<font color="#525f7f">{{$area->AreaName}}</font>
				  		@endforeach
				  	</td>
				  	<td class="text-center"><a target="_blank" method='GET' href="indicators/{{$indicator->id}}" class="btn btn-secondary tim-icons icon-double-right"> Ver Más.</a></td>
				  </tbody>
				@else
				@endif
			  @endforeach
			</table>
		</div>
	</div>
@endsection

@push('js')
	<script src="{{ asset('js') }}/datatable-depen.js"></script>
	<script src="{{ asset('js') }}/datatable-plugins.js"></script>
@endpush

@push('scripts')
<script type="text/javascript">
    /*$(document).ready( function () {
        $('#tabledocuments').DataTable();
    } );*/

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