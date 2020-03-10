@extends('layouts.app', ['page' => __('Comunicados'), 'pageSlug' => 'releases'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comunicados
@endsection

@push('css')
    <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
    <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/>
@endpush

@section('content')
	<div class="card">
		<div class="card-title text-center">
			<h2>Comunicados</h2>
		</div>
		<div class="float-right">
			<a href="{{ route('releases.create') }}" class="fas fa-plus btn btn-sm btn-fill btn-success b-create"> Crear</a>
		</div>
        @include('alerts.success')
		<div class="card-body">
		  <div class="table-responsive table-upgrade">
		    <table class="table">
		      <thead>
		        <th class="text-center">Nombre</th>
		        <th class="text-center">Mensaje</th>
		        <th class="text-center">Fecha</th>
		        <th class="text-center" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Imagen</b>" data-content="Imagen referencia al comunicado emitido."><i class="far fa-question-circle"></i> Imagen</th>
		        <th class="text-center">Tipo de anuncio</th>
		        <th class="text-center">Ver Más..</th>
		      </thead>
		      <tbody>
		      	@foreach($releases as $release)
		          <tr>
		            <td class="text-center"><strong>{{$release->RelName}}</strong></td>
		            <td class="text-center">{{$release->RelMessage}}</td>
		            <td class="text-center">{{$release->RelDate}}</td>
		            <td class="text-center">
                        @if($release->RelSrc === "")
                            <img src="/white/img/bloc.jpg">
                        @else
                            <img src="{{Storage::url($release->RelSrc)}}" class="responsive">
                        @endif
                    </td>
		            <td class="text-center">{{$release->RelType}}</td>
		            <td class="text-center"><a href="releases/{{$release->id}}" class="btn btn-secondary tim-icons icon-double-right"> Ver Más..</a></td>
		          </tr>
		        @endforeach
		      </tbody>
		    </table>
		  </div>
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