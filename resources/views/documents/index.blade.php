@extends('layouts.app', ['page' => __('Documentos'), 'pageSlug' => 'documents'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Documentos
@endsection

@push('css')
    <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
    <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/>
@endpush

@section('content')
	<div class="card">
		<div class="card-header pull-left">
		    <h4 class="card-title"><strong>Documentos</strong>

            @can('createDocuments')
    		    {{-- @hasrole('Super Admin') --}}
    		  	   <a href="{{ route('documents.create') }}" class="fas fa-plus btn btn-sm btn-fill btn-success pull-right"> Crear</a>
    		    {{-- @else
    		    @endhasrole --}}
            @endcan
		  </h4>
		</div>
        @include('alerts.success')
		<div class="card-body">
			<table class="table table-bordered table-striped" id="tabledata">
                <thead>
    			    <th class="text-center">Nombre</th>
    			    <th class="text-center" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Archivo</b>" data-content="Listado de archivos.">Archivo</th>
    			    <th class="text-center" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Versión</b>" data-content="Versión correspondiente a cada documento.">Versión</th>
    			    {{-- <th class="text-center">Tamaño Archivo</th> --}}
                    @can('indexDocuments')
    			     <th class="text-center" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Publicado</b>" data-content="Informa si el documento se encuentra publicado (general) o en restringido.">Publicado</th>
                    @endcan
    			    <th class="text-center" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tipo de documento</b>" data-content="Categoria a la cual pertenece el documento">Tipo de documento</th>
    			    <th class="text-center" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Áreas</b>" data-content="Áreas a las cuales pertenece el documento.">Áreas</th>
                    <th class="text-center" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Código</b>" data-content="Código referencia a dicho documento.">Código</th>
    			    @can('updateDocuments')
    			    	<th class="text-center">Editar</th>
    			    @endcan
                </thead>
                    @can('indexDocuments')
                        <tbody>
                            @foreach($Documents as $Document)
                            <tr>
            			        <td class="text-center">{{$Document->DocName}}</td>
            			        <td class="text-center">
                                    @if($Document->DocSrc === "")
                                        <p><a href="/white/img/test.pdf"><strong>Archivo</strong></a></p>
                                    @else
                                        <p><a target="_blank" href="{{Storage::url($Document->DocSrc)}}">{{$Document->DocOriginalName}}</a></p>
                                    @endif
                                </td>
            		        	<td class="text-center">{{$Document->DocVersion}}</td>
            		        	{{-- <td class="text-center">{{$Document->DocSize}}</td> --}}
                                @can('indexDocuments')
            		        	<td class="text-center">{{ $Document->DocPublisher === 0 ? "No Publicado" : "Publicado" }}</td>
                                @endcan
            		        	<td class="text-center">{{$Document->DocType}}</td>
            		        	<td class="text-center">
            		        		<ul class="list-group list-group-flush">
            		        		    @foreach($Document->areas as $area)
            		        		    <li class="list-group-item" style="background-color: #ffffff;"><font color="#525f7f">{{$area->AreaName}}</font></li>
            		        		    @endforeach  
            		        		</ul>
            		        	</td>
                                <td class="text-center">
                                    {{$Document->DocCodigo}}
                                </td>
            		        	@can('updateDocuments')
            		        		<td class="text-center"><a href="documents/{{$Document->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a></td>
            		        	@endcan
                            </tr>
                            @endforeach
                        </tbody>
                    @else
                        <tbody>
                            @foreach($publicadodocumentos as $publicadodocumento)
                            <tr>
                                <td class="text-center">{{$publicadodocumento->DocName}}</td>
                                <td class="text-center">
                                    @if($publicadodocumento->DocSrc === "")
                                        <p><a href="/white/img/test.pdf"><strong>Archivo</strong></a></p>
                                    @else
                                        <p><a target="_blank" href="{{Storage::url($publicadodocumento->DocSrc)}}">{{$publicadodocumento->DocOriginalName}}</a></p>
                                    @endif
                                </td>
                                <td class="text-center">{{$publicadodocumento->DocVersion}}</td>
                                {{-- <td class="text-center">{{$Document->DocSize}}</td> --}}
                                @can('indexDocuments')
                                <td class="text-center">{{ $publicadodocumento->DocPublisher === 0 ? "No Publicado" : "Publicado" }}</td>
                                @endcan
                                <td class="text-center">{{$publicadodocumento->DocType}}</td>
                                <td class="text-center">
                                    <ul class="list-group list-group-flush">
                                        @foreach($publicadodocumento->areas as $area)
                                        <li class="list-group-item" style="background-color: #ffffff;"><font color="#525f7f">{{$area->AreaName}}</font></li>
                                        @endforeach  
                                    </ul>
                                </td>
                                <td class="text-center">
                                    {{$publicadodocumento->DocCodigo}}
                                </td>
                                @can('updateDocuments')
                                    <td class="text-center"><a href="documents/{{$Document->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a></td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    @endcan
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