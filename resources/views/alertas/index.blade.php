@extends('layouts.app', ['page' => __('Alertas'), 'pageSlug' => 'alerts'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Alertas
@endsection

@push('css')
    <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
    <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/>
@endpush

@section('content')
	<div class="card">
		<div class="card-title text-center">
			<br>
			<h2>Alertas Tempranas</h2>
		</div>
		<div class="col-md-12 row">
			<div class="col-md-6 text-center">
				<a href="{{ route('alerts.create') }}" class="fas fa-plus btn btn-sm btn-fill btn-success" style="margin: 0em 0em 1em 2em;"> Crear</a>
			</div>
			<div class="col-md-6 text-center">
				<a href="{{ route('alerts.calendario') }}" class="far fa-calendar-alt btn btn-sm btn-fill btn-success" style="margin: 0em 0em 1em 2em;"> Calendario</a>
			</div>
		</div>
        @include('alerts.success')
		<div class="card-body">
		  <div class="table-responsive table-upgrade">
		    <table class="table table-bordered table-striped" id="tabledata">
		      <thead>
		        <th class="text-center">Fecha Evento</th>
		        <th class="text-center">Nombre</th>
		        <th class="text-center">Descripción</th>
		        <th class="text-center">Creada por:</th>
		        <th class="text-center" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Fecha de Notificación</b>" data-content="Fecha en la cual se iniciaran las notificaciones de alerta.">Fecha Notificación</th>
                <th class="text-center" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Notificado</b>" data-content="Informa en que estado de notificación se encuentra la alerta.">Notificado</th>
		        <th class="text-center" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Realizado</b>" data-content="Permite marcar la notificación como <i>Realizada</i>, de este modo no se recibiran más notificaciones de dicha alerta.">Realizado</th>
		        <th class="text-center">Editar</th>
			</thead>
			<tbody>
				@foreach($alerts as $alert)
				<tr>
					<td class="text-center">{{date_format($alert->AlertDateEvent, 'Y-m-d')}}</td>
					<td class="text-center">{{$alert->AlertName}}</td>
					<td class="text-center">{{$alert->AlertDescription}}</td>
					<td class="text-center">{{$alert->user->email}}</td>
					<td class="text-center">{{date_format($alert->AlertDateNotifi, 'Y-m-d')}}
					</td>
					<td class="text-center">
						@switch($alert->AlertNotification)
							@case(0)
                                    Sin Notificar
                                    @break
									
                                @case(1)
								<font color="#ff0000">Alerta Roja</font>
								@break
								
                                @case(2)
                                    <font color="#ffd100">Alerta Amarilla</font>
                                    @break
									
									@case(3)
                                   <font color="#42ff00"> Alerta Verde</font>
								   @break
								   
								   @case(4)
                                   <font color="#00a2ff"> Realizado</font>
                                    @break
									
									@case(5)
                                   <font color="#525f7f">NO Realizado</font>
                                    @break
									
                                @default
								Por notificar...
								@endswitch
							</td>
							<td class="text-center" id="Boton-alert-{{$alert->id}}">
								@if($alert->AlertNotification === 5)
                                <i><strong>NO Realizado</strong>
									@else
									@if($alert->AlertRealizado === 0)
                                    <button class="btn-success" onclick="editBoton({{$alert->id}})">Realizado</button>
									@else
                                    <i><strong>Realizado</strong></i>
									@endif
									@endif
								</td>
								@if($alert->user_id === Auth::user()->id)
									<td class="text-center"><a href="alerts/{{$alert->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a></td>
								@endif
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
<script type="text/javascript">

    function editBoton(id){
        var data = id;
        var token = '{{csrf_token()}}';
        var data = {id,_token:token};
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: "{{url('/CambioDeBoton')}}/"+id,
            data: data,
            success: function (msg) {
                $('#Boton-alert-'+id).empty();
                $('#Boton-alert-'+id).append(`<i><strong>Realizado</strong></i>`);
                alert(msg);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Hay un error, no esta pasando por el AjaxController");
            }
        });
    }
</script>
@endpush