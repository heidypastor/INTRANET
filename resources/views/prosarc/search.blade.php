@extends('layouts.app', ['page' => __('Search'), 'pageSlug' => 'dashboard'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Search
@endsection

@push('css')
    <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
    <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/>
@endpush

@section('content')

	<div class="card">
		<div class="card-header">
			<h2>Buscador</h2>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-striped" id="tabledata">
				<thead>
				    <th class="text-center">Tipo</th>
				    <th class="text-center">Nombre</th>
				    <th class="text-center">Ver más...</th>
				</thead>
				<tbody>
			  		@foreach($documents as $document)
				  	    <tr>
					  	    <td class="text-center">Documento</td>
					  	    <td class="text-center">{{$document->DocName}}</td>
					  	    <td class="text-center"><a href="{{Storage::url($document->DocSrc)}}" class="btn btn-info">Ver más..</a></td>
				  	    </tr>
				  	@endforeach
				  	@foreach($indicators as $indicator)
				  	    <tr>
					  	    <td class="text-center">Indicador</td>
					  	    <td class="text-center">{{$indicator->IndName}}</td>
					  	    <td class="text-center"><a href="indicators/{{$indicator->id}}" class="btn btn-info">Ver más..</a></td>
				  	    </tr>
				  	@endforeach
				  	@foreach($comunicados as $comunicado)
				  	    <tr>
					  	    <td class="text-center">Comunicado</td>
					  	    <td class="text-center">{{$comunicado->RelName}}</td>
					  	    <td class="text-center"><a href="releases/{{$comunicado->id}}" class="btn btn-info">Ver más..</a></td>
				  	    </tr>
				  	@endforeach
				  	@foreach($procesos as $proceso)
				  	    <tr>
					  	    <td class="text-center">Proceso</td>
					  	    <td class="text-center">{{$proceso->ProcName}}</td>
					  	    <td class="text-center"><a href="{{ route('proceso.show', $proceso) }}" class="btn btn-info">Ver más...</a></td>
				  	    </tr>
				  	@endforeach
				  	@foreach($requisitos as $requisito)
				  	    <tr>
					  	    <td class="text-center">Requisito</td>
					  	    <td class="text-center">{{$requisito->ReqName}}</td>
					  	    <td class="text-center">
					  	    	@if($requisito->ReqLink == "N" || $requisito->ReqLink == "")
					  	    		<a class="btn btn-info" href="{{$requisito->ReqSrc}}">Ver más...</a>
					  	    	@else
					  	    		<a class="btn btn-info" href="{{$requisito->ReqLink}}">Ver más...</a>
					  	    	@endif
					  	    </td>
				  	    </tr>
				  	@endforeach
				  	@foreach($alerts as $alert)
				  	    <tr>
					  	    <td class="text-center">Alertas</td>
					  	    <td class="text-center">{{$alert->AlertName}}</td>
					  	    <td class="text-center">
				  	    	    @if($alert->user_id == Auth::user()->id) 
				  	    			<a href="{{ route('alerts.calendario') }}" class="btn btn-info">Ver más..</a>
				  	    	    @endif
					  	    </td>
				  	    </tr>
				  	@endforeach
				</tbody>
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